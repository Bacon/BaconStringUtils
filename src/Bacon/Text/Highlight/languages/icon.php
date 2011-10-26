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
    'description' => 'Icon',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'by', 'case', '', 'create', 'default', 'do', 'else', 'every',
                'if', 'initial', 'next', 'of', 'repeat', 'then', 'to', 'until',
                'while', 'break', 'end', 'fail', 'global', 'invocable', 'link',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'co-expression', 'cset', 'tfile', 'integer', 'list', 'null',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '\\&\\w+',
        ),
        array(
            'id' => 3,
            'regex' => '\\$\\w+',
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
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\<|\\>|\\!|\\-|\\+|\\=|\\/|\\*|\\+|\\-|\\~',
    'ignore_case' => false,
);
