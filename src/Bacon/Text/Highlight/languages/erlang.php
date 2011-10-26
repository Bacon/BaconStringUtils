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
    'description' => 'Erlang',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'after', 'begin', 'case', 'catch', 'cond', 'end', 'fun', 'if',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'abs', 'alive', 'apply', 'atom_to_list', 'binary_to_list',
                'binary_to_term', 'concat_binary', 'date', 'disconnect_node',
                'element', 'erase', 'exit', 'float', 'float_to_list', 'get',
                'get_keys', 'group_leader', 'halt', 'hd', 'integer_to_list',
                'is_alive', 'length', 'link', 'list_to_atom', 'list_to_binary',
                'list_to_float', 'list_to_integer', 'list_to_pid',
                'list_to_tuple', 'load_module', 'make_ref', 'monitor_node',
                'node', 'nodes', 'now', 'open_port', 'pid_to_list',
                'process_flag', 'process_info', 'process', 'put', 'register',
                'registered', 'round', 'self', 'setelement', 'size', 'spawn',
                'spawn_link', 'split_binary', 'statistics', 'term_to_binary',
                'throw', 'time', 'tl', 'trunc', 'tuple_to_list', 'unlink',
                'unregister', 'whereis', 'atom', 'binary', 'constant',
                'function', 'integer', 'list', 'number', 'pid', 'ports',
                'port_close', 'port_info', 'reference', 'record',
                'check_process_code', 'delete_module', 'get_cookie', 'hash',
                'math', 'module_loaded', 'preloaded', 'processes',
                'purge_module', 'set_cookie', 'set_node', 'acos', 'asin',
                'atan', 'atan2', 'cos', 'cosh', 'exp', 'log', 'log10', 'pi',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '(\\w+):',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\+|\\-|\\.',
    'ignore_case' => false,
);
