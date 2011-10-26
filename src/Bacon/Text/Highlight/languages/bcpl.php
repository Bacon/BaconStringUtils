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
    'description' => 'BCPL',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'NUMBER', 'NAME', 'STRINGCONST', 'TRUE', 'FALSE', 'VALOF', 'LV',
                'RV', 'DIV', 'REM', 'PLUS', 'MINUS', 'EQ', 'NE', 'LS', 'GR',
                'LE', 'GE', 'NOT', 'LSHIFT', 'RSHIFT', 'LOGAND', 'LOGOR', 'EQV',
                'NEQV', 'COND', 'COMMA', 'AND', 'ASS', 'GOTO', 'RESULTIS',
                'COLON', 'TEST', 'FOR', 'IF', 'UNLESS', 'WHILE', 'UNTIL',
                'REPEAT', 'REPEATWHILE', 'REPEATUNTIL', 'BREAK', 'RETURN',
                'FINISH', 'SWITCHON', 'CASE', 'DEFAULT', 'LET', 'MANIFEST',
                'GLOBAL', 'BE', 'SECTBRA', 'SECTKET', 'RBRA', 'RKET', 'SBRA',
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
                'open' => '//',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
        'raw_prefix' => 'R',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\|',
    'ignore_case' => false,
);
