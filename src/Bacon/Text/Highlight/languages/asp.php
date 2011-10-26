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
    'description' => 'ASP',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'and', 'response', 'write', 'case', 'select', 'continue',
                'date', 'dim', 'server', 'createobject', 'do', 'if', 'else',
                'end', 'empty', 'then', 'next', 'set', 'default', 'movenext',
                'open', 'close', 'activeconnection', 'false', 'true', 'BOF',
                'eof', 'each', 'for', 'sub', 'function', 'len', 'cstr',
                'include', 'cdbl', 'cdate', 'is', 'null', 'object', 'redirect',
                'request', 'querystring', 'exit', 'clng', 'redim', 'session',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\'',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
