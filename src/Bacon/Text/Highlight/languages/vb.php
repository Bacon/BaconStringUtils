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
    'description' => 'Visual Basic',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'and', 'as', 'begin', 'case', 'call', 'continue', 'do', 'each',
                'else', 'elseif', 'end', 'erase', 'error', 'event', 'exit',
                'false', 'for', 'function', 'get', 'gosub', 'goto', 'if',
                'implement', 'in', 'load', 'loop', 'lset', 'me', 'mid', 'new',
                'next', 'not', 'nothing', 'on', 'or', 'property', 'raiseevent',
                'resume', 'return', 'rset', 'select', 'set', 'stop', 'sub',
                'then', 'to', 'true', 'unload', 'until', 'wend', 'while',
                'with', 'withevents', 'attribute', 'alias', 'as', '', 'byref',
                '', 'byval', '', 'compare', '', '', 'declare', 'explicit',
                'friend', 'global', 'let', 'lib', '', 'module', 'object',
                'option', 'optional', 'preserve', 'private', 'property',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'boolean', '', 'byte', '', 'currency', 'date', 'decimal', '',
                'double', 'enum', 'integer', '', 'long', 'single', 'static',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '\\$\\S+',
        ),
        array(
            'id' => 3,
            'regex' => '^\\s*(\\w+):$',
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
                'open' => '\'|rem|REM|Rem',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\.',
    'ignore_case' => true,
);
