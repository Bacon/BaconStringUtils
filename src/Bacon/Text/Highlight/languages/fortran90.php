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
    'description' => 'Fortran 90',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'accept', 'endmap', 'pause', 'assign', 'endstructure',
                'pointer', 'automatic', 'endunion', 'print', 'backspace',
                'entry', 'program', 'blockdata', 'equivalence', 'read', 'byte',
                'external', 'readonly', 'call', 'find', 'real', 'character',
                'format', 'record', 'close', 'function', 'return', 'common',
                'goto', 'rewind', 'complex', 'if', 'rewrite', 'continue',
                'implicit', 'save', 'data', 'implicitnone', 'shared', 'decode',
                'implicitundefined', 'static', 'definefile', 'include', 'stop',
                'delete', 'inquire', 'structure', 'dimension', 'integer',
                'subroutine', 'do', 'intrinsic', 'then', 'doublecomplex', 'key',
                'to', 'doubleprecision', 'logical', 'type', 'else', 'map',
                'undefined', 'elseif', 'namelist', 'union', 'encode', 'none',
                'unlock', 'end', 'nospanblocks', 'virtual', 'enddo', 'open',
                'volatile', 'endfile', 'options', 'while', 'endif', 'parameter',
                'write', 'module', 'interface', 'use', 'contains', 'stop',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'integer', 'real', 'double', 'precision', 'complex', 'logical',
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
                'open' => '!',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'digits' => '(?:0x|0X)[0-9a-fA-F]+|\\d*[\\.\\_]?\\d+(?:[eE][\\-\\+]\\d+)?[lLuUbfdm]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\-|\\+|\\=|\\/|\\*|\\%|\\+|\\-|\\.|\\$',
    'ignore_case' => true,
);
