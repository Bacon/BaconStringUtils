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
    'description' => 'Qore',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'class', 'private', 'synchronized', 'new', 'inherits', 'shift',
                'where', 'do', 'while', 'if', 'else', 'for', 'foreach', 'const',
                'namespace', 'return', 'my', 'our', 'try', 'throw', 'catch',
                'find', 'delete', 'background', 'exists', 'thread_exit', 'in',
                'elements', 'keys', 'sub', 'context', 'sortBy',
                'sortDescendingBy', 'NULL', 'NOTHING', 'summarize', 'by',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '[$]\\w+',
        ),
        array(
            'id' => 3,
            'regex' => '[%][\\w\\-]+',
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
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'pre_processor' => array(
        'prefix' => '%',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\\\|\\*|\\%|\\+|\\-|\\~',
    'ignore_case' => false,
);
