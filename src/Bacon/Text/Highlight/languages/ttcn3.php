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
    'description' => 'TTCN3',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'if', 'else', 'while', 'for', 'do', 'return', 'log', 'testcase',
                'runs', 'on', 'module', 'repeat', 'stop', 'function',
                'template', 'import', 'from', 'alt', 'trigger', 'send', 'match',
                'timeout', 'setverdict', 'getverdict', 'true', 'false', 'not',
                'and', 'or', 'mod', 'not4b', 'and4b', 'or4b', 'xor4b', 'start',
                'stop', 'running', 'read', 'none', 'pass', 'fail', 'error',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'boolean', 'byte', 'char', 'integer', 'float', 'double',
                'timer', 'record', 'unsignedbyte', 'unsignedchar',
                'unsignedshort', 'unsignedlong', 'short', 'long', 'charstring',
            ),
        ),
        array(
            'id' => 3,
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
        'continuation' => '\\',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'enable_indentation' => true,
    'ignore_case' => false,
);
