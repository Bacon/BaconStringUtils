<?php
/**
 * Bacon.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
return array(
    'description' => 'Felix',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'all', 'and', 'as', 'body', 'call', 'case', 'class', 'code',
                'const', 'define', 'elif', 'else', 'endif', 'endmatch',
                'except', 'export', 'fork', 'fun', 'function', 'functor',
                'goto', 'header', 'if', 'in', 'inf', 'interface', 'lambda',
                'let', 'match', 'module', 'NaN', '', 'not', 'of', 'open', 'or',
                'proc', 'procedure', 'raise', 'read', 'regexp', 'regmatch',
                'return', 'struct', 'then', 'to', 'todo', 'type', 'typedef',
                'union', 'use', 'val', 'var', 'when', 'with', 'header', 'body',
                'code', 'open', '', 'use', 'endl', 'print', 'include', 'true',
                'false', 'not', 'and', 'or', 'lnot', 'land', 'lor', 'pow',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'tiny', 'short', 'int', 'long', 'vlong', 'utiny', 'ushort',
                'uint', 'ulong', 'uvlong', 'int8', 'int16', 'int32', 'int64',
                'uint8', 'uint16', 'uint32', 'uint64', 'float', 'double',
                'ldouble', '', 'float32', 'float64', 'float80', 'char', 'wchar',
                'uchar', 'string', 'wstring', 'ustring', 'void', 'unit', 'bool',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '//',
            ),
        ),
        array(
            'block' => true,
            'nested' => true,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"\"\"|\'\'\'|\"|\'',
        'raw_prefix' => 'r',
    ),
    'pre_processor' => array(
        'prefix' => '#',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
