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
    'description' => 'Prolog',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'true', 'fail', 'at_end_of_stream', 'nl', 'repeat', 'halt',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'call', 'catch', 'throw', 'unify_with_occurs_check', 'var',
                'atom', 'integer', 'float', 'atomic', 'compound', 'nonvar',
                'number', 'functor', 'arg', 'copy_term', 'clause',
                'current_predicate', 'asserta', 'assertz', 'retract', 'abolish',
                'findall', 'bagof', 'setof', 'current_input', 'current_output',
                'set_input', 'set_output', 'open', 'close', 'stream_property',
                'at_end_of_stream', 'set_stream_position', 'get_char',
                'get_code', 'peek_char', 'peek_code', 'put_char', 'put_code',
                'nl', 'get_byte', 'peek_byte', 'put_byte', 'read_term', 'read',
                'write_term', 'write', 'writeq', 'write_canonical', 'op',
                'current_op', 'char_conversion', 'current_char_conversion',
                'once', 'atom_length', 'atom_concat', 'sub_atom', 'atom_chars',
                'atom_codes', 'char_code', 'number_chars', 'number_codes',
                'set_prolog_flag', 'current_prolog_flag', 'halt', 'sin', 'cos',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '0(\')\\w+',
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
    'pre_processor' => array(
        'prefix' => '#',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\+|\\-|\\.',
    'ignore_case' => false,
);
