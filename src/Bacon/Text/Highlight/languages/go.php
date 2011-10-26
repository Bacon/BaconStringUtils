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
    'description' => 'Go',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'break', 'default', 'func', 'interface', 'select', 'case',
                'defer', 'go', 'map', 'struct', 'chan', 'else', 'goto',
                'package', 'switch', 'const', 'fallthrough', 'if', 'range',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'bool', 'byte', 'float32', 'float64', 'int8', 'int16', 'int32',
                'int64', 'string', 'uint8', 'uint16', 'uint32', 'uint64',
                'float', 'int', 'uint', 'uintptr', '', 'true', 'false', 'iota',
                'nil', 'cap', 'close', 'closed', 'len', 'make', 'new', 'panic',
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
                'open' => '//',
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
        'delimiter' => '\"|\'|`',
        'escape' => '\\\\\\d{3}|\\\\x\\p{XDigit}{2}|\\\\u\\p{XDigit}{4}|\\\\U\\p{XDigit}{8}|\\\\[ntvbrfa\\\\\\?\'\"]',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\^',
    'ignore_case' => false,
);
