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
    'description' => 'Vala',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'if', 'else', 'switch', 'case', 'default', 'break', 'continue',
                'return', 'for', 'foreach', 'in', 'do', 'while', 'try', 'catch',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'namespace', 'interface', 'class', 'struct', 'enum', 'signal',
                'construct', 'callback', 'get', 'set', 'base', 'const',
                'static', 'var', 'weak', 'virtual', 'abstract', 'override',
                'public', 'protected', 'private', 'in', 'out', 'ref', '',
                'lock', 'using', 'abstract', 'dynamic', 'extern', 'internal',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'true', 'false', 'null', 'bool', 'byte', 'char', 'decimal',
                'double', 'float', 'int', 'int8', 'int16', 'int32', 'int64',
                'long', 'object', 'sbyte', 'short', 'string', 'uchar', 'uint',
                'uint8', 'uint16', 'uint32', 'uint64', 'ulong', 'ushort',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\w+)\\s*\\(',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\/\\/',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'pre_processor' => array(
        'prefix' => '#',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\|',
    'enable_indentation' => false,
    'ignore_case' => false,
);
