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
    'description' => 'ABC',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'WRITE', 'READ', 'EG', 'RAW', 'PUT', 'IN', 'SET', 'RANDOM',
                'REMOVE', 'FROM', 'INSERT', 'DELETE', 'PASS', 'KEYWORD',
                'CHECK', 'IF', 'SELECT', 'WHILE', 'FOR', 'HOW', 'TO', 'RETURN',
                'REPORT', 'SHARE', 'QUIT', 'FAIL', 'SUCCEED', 'AND', 'OR',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'exactly', 'exact', 'root', 'abs', 'round', 'mod', 'random',
                'exp', 'log', 'pi', 'sin', 'cos', 'tan', 'arctan', 'angle',
                'now', 'lower', 'upper', 'stripped', 'split', 'keys', 'min',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\|',
    'ignore_case' => false,
);
