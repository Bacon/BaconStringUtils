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
    'description' => 'Modula2',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'AND', 'ARRAY', 'BEGIN', 'BY', 'CASE', 'CONST', 'DEFINITION',
                'DIV', 'DO', 'ELSE', 'ELSIF', 'END', 'EXCEPT', 'EXIT', 'EXPORT',
                'FINALLY', 'FOR', 'FORWARD', 'FROM', 'IF', 'IMPLEMENTATION',
                'IMPORT', 'IN', 'LOOP', 'MOD', 'MODULE', 'NOT', 'OF', 'OR',
                'PACKEDSET', 'POINTER', 'PROCEDURE', 'QUALIFIED', 'RECORD',
                'REM', 'REPEAT', 'RETRY', 'RETURN', 'SET', 'THEN', 'TO', 'TYPE',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'ABS', 'BITSET', 'BOOLEAN', 'CAP', 'CARDINAL', 'CHAR', 'CHR',
                'DEC', 'DISPOSE', 'EXCL', 'FALSE', 'FLOAT', 'HALT', 'HIGH',
                'INC', 'INCL', 'INTEGER', 'LONGCARD', 'LONGINT', 'LONGREAL',
                'MAX', 'MIN', 'NEW', 'NIL', 'ODD', 'ORD', 'PROC', 'REAL',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\w+?)\\s*\\(',
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
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\^|\\~|\\&|\\+|\\-|\\/|\\*|\\=|\\#|\\<|\\>',
    'ignore_case' => false,
);
