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
    'description' => 'Applied Type System',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'and', 'as', 'assert', 'asr', 'begin', '', 'class',
                'constraint', 'do', 'done', 'downto', 'else', 'end',
                'exception', 'external', 'false', 'for', 'fun', 'function',
                'functor', 'if', 'in', 'include', 'inherit', 'initializer',
                'land', 'lazy', 'let', 'lor', 'lsl', 'lsr', 'lxor', 'match',
                'method', 'mod', 'module', 'mutable', 'new', 'object', 'of',
                'open', 'or', 'private', 'rec', 'sig', 'struct', 'then', 'to',
                'true', 'try', 'type', 'val', 'virtual', 'when', 'while',
                'with', 'value', 'staload', 'macdef', 'typedef', 'static',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'bool', 'string', 'int', 'real', 'word', 'float', 'unit',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '\'[a-zA-Z0-9_\']+',
        ),
        array(
            'id' => 3,
            'regex' => '\\b[A-Z][a-zA-Z0-9_\']*(?=\\.)',
        ),
        array(
            'id' => 4,
            'regex' => '\\b[A-Z][a-zA-Z0-9_\']*',
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
        array(
            'block' => true,
            'nested' => true,
            'delimiter' => array(
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'pre_processor' => array(
        'prefix' => '#',
    ),
    'digits' => '(?:0x|0X|0b|0B)[0-9a-fA-F]+|\\d*[\\.\\_]?\\d+(?:[eE][\\-\\+]\\d+)?[lLuUbfdm]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\_|\\*|\\%|\\+|\\-|\\.|\\^',
    'ignore_case' => false,
);
