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
    'description' => 'Ruby',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'alias', 'and', 'begin', 'begin', 'break', 'case', 'class',
                'def', 'defined', 'loop', 'do', 'else', 'elsif', 'end', 'end',
                'ensure', 'false', 'for', 'if', 'in', 'module', 'next', 'nil',
                'not', 'or', 'redo', 'rescue', 'retry', 'return', 'require',
                'self', 'super', 'then', 'true', '', 'undef', 'unless', '',
                'until', 'when', 'while', 'yield', 'true', 'false', 'nil',
                'stdin', 'stdout', 'stderr', 'env', 'argf', 'argv', 'data',
                'version', 'ruby-release-date', 'ruby-platform', 'include',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'TRUE', 'FALSE', 'NIL', 'STDIN', 'STDOUT', 'STDERR', 'ENV',
                'ARGF', 'ARGV', 'DATA', 'RUBY_VERSION', 'RUBY_RELEASE_DATE',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '[\\$\\@][\\/\\w]+',
        ),
        array(
            'id' => 3,
            'regex' => 'm?\\/.*?\\/|(s|tr)\\/.*?\\/.*?\\/[cegimosx]*',
            'group' => 0,
        ),
        array(
            'id' => 3,
            'regex' => '\\:\\w+',
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
                'open' => '#',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\=begin',
                'close' => '\\=end',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'|`',
        'delimiter_pairs' => array(
            array(
                'open' => '%q\\(',
                'close' => '\\)',
            ),
            array(
                'open' => '%Q\\(',
                'close' => '\\)',
            ),
            array(
                'open' => '%\\(',
                'close' => '\\)',
            ),
            array(
                'open' => '%x\\(',
                'close' => '\\)',
            ),
        ),
    ),
    'digits' => '(?:0x|0X|0b)[0-9a-fA-F]+|\\d*[\\.\\_]?\\d+(?:[eE][\\-\\+]\\d+)?[lLuU]?',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\.|\\&|\\<|\\>|\\!|\\-|\\+|\\/|\\*|\\=|\\?|\\%|\\|',
    'ignore_case' => false,
);
