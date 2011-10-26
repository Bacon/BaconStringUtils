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
    'description' => 'Modelica',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'annotation', 'assert', 'block', 'class', 'connector',
                'constant', 'discrete', 'else', 'elseif', 'elsewhen', 'end',
                'exit', 'extends', 'external', 'final', 'flow', 'for',
                'function', 'if', 'in', 'inner', 'input', 'import', 'loop',
                'model', 'nondiscrete', 'outer', 'output', 'package',
                'parameter', 'record', 'redeclare', 'replaceable', 'return',
                'size', 'terminate', 'then', 'type', 'when', 'while',
                'algorithm', 'equation', 'protected', 'public', 'and', 'false',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'abs', 'acos', 'asin', 'atan', 'atan2', 'connect', 'cos',
                'cosh', 'cross', 'der', 'edge', 'exp', 'initial', 'noEvent',
                'pre', 'reinit', 'sample', 'sign', 'sin', 'sinh', 'tan', 'tanh',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\/\\/',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
