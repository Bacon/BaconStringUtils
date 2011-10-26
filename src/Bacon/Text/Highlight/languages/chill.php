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
    'description' => 'CHILL',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'AND', 'BEGIN', 'CASE', 'DIV', 'DO', 'ELSE', 'ELSIF', 'END',
                'ESAC', 'EXIT', 'FI', 'FOR', 'GOTO', 'IF', 'IN', 'MOD', 'NOT',
                'OD', 'OF', 'ON', 'OR', 'OUT', 'RESULT', 'RETURN', 'THEN',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'ARRAY', 'DCL', 'GRANT', 'LABEL', 'MODULE', 'NEWMODE', 'PROC',
                'POWERSET', 'SEIZE', 'SET', 'STRUCT', 'SYN', 'SYNMODE', 'TYPE',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
            ),
        ),
        array(
            'id' => 4,
            'list' => array(
                'MODULE_DESCRIPTION_HEADER', 'PATCH_INFOS', 'LIO_INFOS',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => true,
            'nested' => true,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
        array(
            'block' => true,
            'nested' => true,
            'delimiter' => array(
                'open' => '\\<\\>',
                'close' => '\\<\\>',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'ignore_case' => true,
);
