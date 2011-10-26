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
    'description' => 'Boo',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstract', 'and', 'as', 'AST', 'break', 'callable', 'cast',
                'char', 'class', 'constructor', 'continue', 'def', 'destructor',
                'do', 'elif', 'else', 'ensure', 'enum', 'event', 'except',
                'failure', 'final', 'from', 'for', 'false', 'get', 'given',
                'goto', 'if', 'import', 'in', 'interface', 'internal', 'is',
                'isa', 'not', 'null', 'of', 'or', 'otherwise', 'override',
                'namespace', 'partial', 'pass', 'public', 'protected',
                'private', 'raise', 'ref', 'retry', 'return', 'self', 'set',
                'super', 'static', 'struct', 'success', 'transient', 'true',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
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
                'open' => '#|\\/\\/',
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
        'delimiter' => '\"\"\"|\'\'\'|\"|\'',
        'raw_prefix' => 'r',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\@',
    'ignore_case' => false,
);
