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
    'description' => 'F#',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstract', 'lsl', 'and', 'lsr', 'as', 'lxor', 'assert',
                'match', 'member', 'asr', 'mod', 'begin', 'module', 'class',
                'mutable', 'namespace', 'default', 'new', 'delegate', 'null',
                'do', 'of', 'done', 'open', 'downcast', 'or', 'downto',
                'override', 'else', 'rec', 'end', 'sig', 'exception', 'static',
                'false', 'struct', 'finally', 'then', 'for', 'to', 'fun',
                'true', 'function', 'try', 'if', 'type', 'in', 'val', 'inherit',
                'when', 'inline', 'upcast', 'interface', 'while', 'land',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'bool', 'string', 'int', 'real', 'word', 'float', 'unit',
            ),
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
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
        'raw_prefix' => '@',
    ),
    'pre_processor' => array(
        'prefix' => '#',
    ),
    'digits' => '(?:0x|0X|0b|0B|0o)[0-9a-fA-F]+?\\w*|\\d*[\\.\\_]?\\d+(?:[eE][\\-\\+]\\d+)?\\w*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\.|\\@|\\?|\\^',
    'ignore_case' => false,
);
