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
    'description' => 'Euphoria',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'and', 'by', 'constant', 'do', 'else', 'elsif', 'end', 'exit',
                'for', 'function', 'global', 'if', 'include', 'not', 'or',
                'procedure', 'return', 'then', 'to', 'type', 'while', 'with',
                'without', 'xor', 'append', 'arcsin', 'arccos', 'arctan',
                'and_bits', 'allow_break', 'abort', 'all_palette', 'allocate',
                'allocate_low', 'allocate_string', 'atom_to_float64',
                'atom_to_float32', 'bk_color', 'bytes_to_int', 'bits_to_int',
                'compare', 'custom_sort', 'cos', 'close', 'current_dir',
                'chdir', 'check_break', 'command_line', 'clear_screen',
                'cursor', 'call', 'crash_file', 'crash_message', 'call_proc',
                'call_func', 'c_proc', 'c_func', 'call_back', 'dir', 'date',
                'display_text_image', 'draw_line', 'display_image',
                'dos_interrupt', 'define_c_proc', 'define_c_func',
                'define_c_var', 'equal', 'ellipse', 'find', 'floor', 'flush',
                'free', 'free_low', 'float64_to_atom', 'float32_to_atom',
                'free_console', 'get', 'getc', 'gets', 'get_bytes', 'get_key',
                'get_mouse', 'getenv', 'get_position', 'graphics_mode',
                'get_all_palette', 'get_active_page', 'get_display_page',
                'get_screen_char', 'get_pixel', 'get_vector', 'int_to_bytes',
                'int_to_bits', 'instance', 'length', 'lower', 'log',
                'lock_file', 'lock_memory', 'match', 'mouse_events',
                'mouse_pointer', 'machine_func', 'machine_proc', 'mem_copy',
                'mem_set', 'message_box', 'not_bits', 'or_bits', 'open',
                'open_dll', 'pi', 'prepend', 'power', 'print', 'printf', 'puts',
                'prompt_string', 'prompt_number', 'platform', 'profile',
                'position', 'palette', 'put_screen_char', 'pixel', 'polygon',
                'peek', 'peek4s', 'peek4u', 'poke', 'poke4', 'rand', 'repeat',
                'reverse', 'remainder', 'read_bitmap', 'register_block',
                'routine_id', 'sin', 'sort', 'sqrt', 'sprintf', 'seek',
                'system', 'system_exec', 'sleep', 'scroll', 'save_bitmap',
                'set_active_page', 'set_display_page', 'sound',
                'save_text_image', 'save_screen', 'save_image', 'set_vector',
                'set_rand', 'tan', 'time', 'tick_rate', 'trace', 'text_color',
                'text_rows', 'upper', 'unlock_file', 'unregister_block',
                'use_vesa', 'value', 'video_config', 'wildcard_match',
                'wildcard_file', 'wait_key', 'where', 'walk_dir', 'wrap',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
            ),
        ),
        array(
            'id' => 3,
            'regex' => '\\#\\p{XDigit}+',
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
                'open' => '--',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\?|\\=|\\/|\\*|\\%|\\+|\\-|\\.',
    'ignore_case' => true,
);
