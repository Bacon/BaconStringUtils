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
    'description' => 'Javascript',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstract', 'break', 'class', 'const', 'continue', 'debugger',
                'default', 'delete', 'enum', 'export', 'extends', 'finally',
                'instanceof', 'import', 'implements', 'in', 'goto', 'native',
                'package', 'private', 'protected', 'public', 'super', 'throw',
                'throws', 'transient', 'typeof', 'void', 'false', 'with', 'for',
                'this', 'switch', 'try', 'while', 'if', 'do', 'else', 'return',
                'null', 'case', 'catch', 'true', 'new', 'prototype', 'var',
                'function', 'namespace', 'use', 'internal', 'interface',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'boolean', 'byte', 'char', 'double', 'float', 'int', 'long',
                'short', 'static', 'decimal', 'enum', 'sbyte', 'uint', 'ulong',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '\\[\\w+\\]',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\.',
    'ignore_case' => false,
);
