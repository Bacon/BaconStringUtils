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
    'description' => 'C#',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'return', 'value', 'add', 'remove', 'get', 'set', 'readonly',
                'break', 'case', 'default', 'else', 'if', 'switch', 'catch',
                'checked', 'finally', 'throw', 'try', 'unchecked', 'abstract',
                'base', 'class', 'delegate', 'event', 'explicit', 'implicit',
                'interface', 'internal', 'new', 'operator', 'override',
                'private', 'protected', 'public', 'sealed', 'static', 'this',
                'virtual', 'false', 'null', 'true', 'namespace', 'using',
                'break', 'continue', 'do', 'for', 'foreach', 'while', 'goto',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'object', 'bool', 'byte', 'char', 'const', 'decimal', 'double',
                'enum', 'float', 'int', 'long', 'sbyte', 'short', 'string',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '^\\s*(\\w+):',
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
        'delimiter' => '\"|\'',
        'raw_prefix' => '@',
    ),
    'pre_processor' => array(
        'prefix' => '#',
        'continuation' => '\\',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'enable_indentation' => true,
    'ignore_case' => false,
);
