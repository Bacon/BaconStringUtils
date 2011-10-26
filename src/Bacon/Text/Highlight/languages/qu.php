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
    'description' => 'Qu',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstract', 'as', 'atomic', 'break', 'case', 'catch', 'class',
                'const', 'continue', 'default', 'do', 'each', 'elif', 'else',
                'end', 'enum', 'ensure', 'final', 'finally', 'for', 'if', 'in',
                'is', 'lambda', 'local', 'loop', 'me', 'nil', 'once', 'pass',
                'public', 'redo', 'return', 'self', 'static', 'struct', 'sub',
                'super', 'switch', 'throw', 'true', 'try', 'until', 'use',
                'var', 'while', 'xor', 'yield', 'alias', 'private', 'import',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'bool', 'char', 'string', 'vector', 'map', 'set', 'null',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
            ),
        ),
        array(
            'id' => 4,
            'regex' => '__\\w+',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '#',
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
        'delimiter' => '\"|\'|`|```',
    ),
    'operators' => '\\(|\\)|\\{|\\}|\\[|\\]|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\^',
    'ignore_case' => false,
);
