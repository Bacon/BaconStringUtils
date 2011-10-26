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
    'description' => 'Mercury',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'is', 'and', 'or', 'func', 'impure', '', '', 'pred', '',
                'semipure', 'not', 'when', 'then', 'if', 'else', 'where', '',
                '', 'all', 'arbitrary', 'promise_equivalent_solutions',
                'promise_equivalent_solution_sets', 'promise_exclusive',
                'promise_exclusive_exhaustive', 'promise_exhaustive',
                'promise_impure', '', 'promise_impure_implicit', 'promise_pure',
                'promise_pure_implicit', 'promise_semipure',
                'promise_semipure_implicit', 'some', 'ype', 'solver', '', '',
                'end_module', 'import_module', 'include_module', 'initialise',
                'initialize', 'finalise', 'finalize', 'inst', 'instance',
                'mode', 'module', 'pragma', '', '', 'promise', '', 'rule',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
            ),
        ),
        array(
            'id' => 3,
            'regex' => '[A-Z]\\w+',
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
                'open' => '%',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\|\\+|\\-|\\~',
    'ignore_case' => false,
);
