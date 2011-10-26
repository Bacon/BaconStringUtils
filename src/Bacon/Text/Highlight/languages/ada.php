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
    'description' => 'ADA95',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abort', 'else', 'new', 'return', 'abs', 'elsif', 'not',
                'reverse', 'abstract', 'end', 'null', 'accept', 'entry',
                'select', 'access', 'exception', '', 'separate', '', 'aliased',
                'exit', 'of', '', 'subtype', '', 'all', 'or', '', 'and', '',
                'for', '', 'others', 'tagged', '', 'array', 'function', 'out',
                'task', '', 'at', 'terminate', 'generic', 'package', 'then', '',
                'begin', 'goto', 'pragma', 'type', '', 'body', 'private', 'if',
                'procedure', 'case', 'in', 'protected', '', '', 'until', '',
                'constant', 'is', '', 'use', 'raise', 'declare', '', '',
                'range', 'when', '', 'delay', 'limited', 'record', 'while', '',
                'delta', 'loop', 'rem', '', 'with', 'digits', 'renames', 'do',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'boolean', 'integer', 'natural', 'positive', 'float',
                'character', 'string', 'duration', 'short_integer',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'wide_character', 'wide_string', 'short_short_integer',
            ),
        ),
        array(
            'id' => 4,
            'list' => array(
            ),
        ),
        array(
            'id' => 4,
            'regex' => '[\\w\\)]+(\'\\w+)',
        ),
        array(
            'id' => 4,
            'regex' => '\'\'\'',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\-\\-',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\.',
    'ignore_case' => true,
);
