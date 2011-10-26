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
    'description' => 'Zonnon',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'accept', 'activity', 'array', 'as', 'await', 'begin', 'by',
                'case', 'const', 'definition', 'div', 'do', 'else', 'elsif',
                'end', 'exception', 'exit', 'false', 'for', 'if',
                'implementation', 'implements', 'import', 'in', 'is', 'loop',
                'mod', 'module', 'new', 'nil', 'object', 'of', 'on', 'operator',
                'or', 'procedure', 'protocol', 'record', 'refines', 'repeat',
                'return', 'self', 'termination', 'then', 'to', 'true', 'type',
                'until', 'var', 'while', 'ACCEPT', 'ACTIVITY', 'ARRAY', 'AS',
                'AWAIT', 'BEGIN', 'BY', 'CASE', 'CONST', 'DEFINITION', 'DIV',
                'DO', 'ELSE', 'ELSIF', 'END', 'EXCEPTION', 'EXIT', 'FALSE',
                'FOR', 'IF', 'IMPLEMENTATION', 'IMPLEMENTS', 'IMPORT', 'IN',
                'IS', 'LOOP', 'MOD', 'MODULE', 'NEW', 'NIL', 'OBJECT', 'OF',
                'ON', 'OPERATOR', 'OR', 'PROCEDURE', 'PROTOCOL', 'RECORD',
                'REFINES', 'REPEAT', 'RETURN', 'SELF', 'TERMINATION', 'THEN',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'object', 'boolean', 'char', 'integer', 'cardinal', 'fixed',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
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
            'nested' => true,
            'delimiter' => array(
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\||\\#',
    'ignore_case' => true,
);
