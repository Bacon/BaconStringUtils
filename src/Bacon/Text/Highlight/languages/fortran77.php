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
    'description' => 'Fortran 77',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'break', 'common', 'continue', 'date', 'default', 'dimension',
                'do', 'else', 'enddo', 'endif', 'for', 'goto', 'go', 'to', 'if',
                'then', 'return', 'end', 'format', 'write', 'read',
                'subroutine', 'function', 'switch', 'program', 'call', 'while',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'character', 'complex', 'double', 'precision', 'real', 'real*8',
                'integer', 'common', 'logical', 'implicit', 'dimension',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '^[cC].*',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\.',
    'ignore_case' => true,
);
