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
    'description' => 'Oberon',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'ARRAY', 'BEGIN', 'CASE', 'CONST', 'DIV', 'DO', 'ELSE', 'ELSIF',
                'END', 'EXIT', 'IF', 'IMPORT', 'IN', 'IS', 'LOOP', 'MOD',
                'MODULE', 'NIL', 'OF', 'OR', '', 'PROCEDURE', 'RECORD',
                'REPEAT', 'RETURN', 'THEN', 'TO', 'TYPE', 'UNTIL', 'VAR',
                'WHILE', 'WITH', 'ABS', 'ODD', 'CAP', 'ASH', 'LEN', 'MAX',
                'MIN', 'SIZE', 'ORD', 'CHR', 'SHORT', 'LONG', 'ENTIER', 'INC',
                'DEC', 'INCL', 'EXCL', 'COPY', 'NEW', 'HALT', 'ADR', 'BIT',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'BOOLEAN', 'CHAR', 'SHORTINT', 'INTEGER', 'LONGINT', 'REAL',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\w+)\\s*\\(',
        ),
    ),
    'comments' => array(
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\.|\\+|\\-|\\#',
    'ignore_case' => false,
);
