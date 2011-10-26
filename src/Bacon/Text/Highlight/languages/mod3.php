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
    'description' => 'Modula3',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'and', 'do', 'from', 'not', 'repeat', 'until', 'any', 'else',
                'generic', 'object', 'return', 'untraced', 'array', 'elsif',
                'if', 'of', 'reveal', 'value', 'as', 'end', 'import', 'or',
                'root', 'var', 'begin', 'eval', 'in', 'overrides', 'set',
                'while', 'bits', 'except', 'interface', 'procedure', 'then',
                'with', 'branded', 'exception', 'lock', 'raise', 'to', 'by',
                'exit', 'loop', 'raises', 'try', 'case', 'exports', 'methods',
                'readonly', 'type', 'const', 'finally', 'mod', 'record',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'abs', 'bytesize', 'extended', 'integer', 'min', 'number',
                'text', 'address', 'cardinal', 'false', 'istype', 'mutex',
                'ord', 'true', 'adr', 'ceiling', 'first', 'last', 'narrow',
                'real', 'trunc', 'adrsize', 'char', 'float', 'longreal', 'new',
                'refany', 'typecode', 'bitsize', 'dec', 'floor', 'loophole',
                'nil', 'round', 'val', 'boolean', 'dispose', 'inc', 'max',
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
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
