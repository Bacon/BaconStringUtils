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
    'description' => 'ASCEND',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'ADD', 'AND', 'ALIASES', 'ARE_ALIKE', 'ARE_THE_SAME',
                'ARE_NOT_THE_SAME', 'ASSERT', 'ATOM', 'CALL', 'CASE', 'CARD',
                'CHECK', 'CHOICE', 'CONSTANT', 'CONDITIONAL', 'CREATE', 'DATA',
                'DEFAULT', 'DEFINITION', 'DO', 'ELSE', 'FIX', 'FOR', 'FREE',
                'IF', 'IN', 'INPUT', 'INTERSECTION', 'IS_A', 'IS_REFINED_TO',
                'MAX', 'MAXIMIZE', 'MIN', 'MINIMIZE', 'NOTES', 'OF', 'OR',
                'OTHERWISE', 'OUTPUT', 'PROVIDE', 'PROD', 'REPLACE', 'REFINES',
                'RUN', 'SATISFIED', 'SELECT', 'SELF', 'STUDY', 'SUCH_THAT',
                'SUM', 'SWITCH', 'THEN', 'UNIVERSAL', 'UNION', 'UNITS', 'USE',
                'WHEN', 'WHERE', 'WITH_VALUE', 'WILL_BE', 'WILL_BE_THE_SAME',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'FALSE', 'TRUE', 'real_constant', 'integer_constant',
                'symbol_constant', 'boolean_constant', 'real', 'integer',
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
            'nested' => false,
            'delimiter' => array(
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\'',
        'delimiter_pairs' => array(
            array(
                'open' => '\\{',
                'close' => '\\}',
            ),
        ),
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'enable_indentation' => true,
    'ignore_case' => false,
);
