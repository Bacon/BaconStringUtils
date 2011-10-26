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
    'description' => 'AMPL',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'and', 'arc', 'by', 'check', 'cross', 'close', 'diff',
                'difference', 'div', 'data', 'display', 'drop', 'else',
                'exists', 'end', 'forall', 'fix', 'function', 'if', 'in',
                'inter', 'intersection', 'interval', 'include', 'less', 'let',
                'maximize', 'minimize', 'min', 'max', 'mod', 'model', 'node',
                'not', 'or', 'objective', 'option', 'param', 'prod', 'product',
                'print', 'printf', 'quit', 'reset', 'restore', 'set', 'setof',
                'subject', 'subj', 's.t.', 'symdiff', 'sum', 'shell',
                'solution', 'then', 'to', 'union', 'update', 'unfix', 'var',
                'write', 'binary', 'circular', 'coeff', 'coef', 'cover',
                'dimen', 'dimension', 'default', 'display_1col', 'display_eps',
                'display_max_2d_cols', 'display_precison', 'display_round',
                'display_transpose', 'display_width', 'from', 'gutter_width',
                'integer', 'Infinity', 'ordered', 'obj', 'objective_precision',
                'omit_zero_cols', 'omit_zero_rows', 'output_precision',
                'print_precision', 'print_round', 'print_seperator', 'symbolic',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'abs', 'acos', 'acosh', 'alias', 'asin', 'asinh', 'atan',
                'atan2', 'atanh', 'Beta', 'ceil', 'cos', 'card', 'Cauchy',
                'exp', 'Exponential', 'floor', 'first', 'Gamma', 'Irand224',
                'int', 'log', 'log10', 'last', 'member', 'Normal', 'next',
                'nextw', 'ord', 'ord0', 'Poisson', 'precision', 'prev', 'prevw',
                'round', 'sin', 'sinh', 'sqrt', 'tan', 'tanh', 'trunc',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '#',
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
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
