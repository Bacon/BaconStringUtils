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
    'description' => 'Java',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstract', 'default', 'if', 'private', 'this', 'do',
                'implements', 'protected', 'throw', 'break', 'import', 'public',
                'throws', 'else', 'instanceof', 'return', 'transient', 'case',
                'extends', 'try', 'catch', 'final', 'interface', 'static',
                'finally', 'strictfp', 'volatile', 'class', 'native', 'super',
                'while', 'const', 'for', 'new', 'switch', 'continue', 'goto',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'boolean', 'double', 'byte', 'int', 'short', 'void', 'char',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '@\\w+',
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
        'escape' => '\\\\u\\d{4}|\\\\x?\\d{3}|\\\\\\w|\\\\[\\\'\\\\\\\"]',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\|',
    'enable_indentation' => true,
    'ignore_case' => false,
);
