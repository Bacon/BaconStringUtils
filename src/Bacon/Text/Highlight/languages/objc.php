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
    'description' => 'Objective C',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'goto', 'break', 'return', 'continue', 'asm', 'case', 'default',
                'if', 'else', 'switch', 'while', 'for', 'do', 'sizeof',
                'typeof', 'typedef', 'inline', 'stdcall', 'auto', 'cdecl',
                'class', 'const_cast', 'delete', 'dynamic_cast', 'explicit',
                'extern', 'friend', 'goto', 'inline', 'mutable', 'namespace',
                'new', 'operator', 'pascal', 'register', 'reinterpret_cast',
                'private', 'protected', 'public', 'static_cast', 'template',
                'this', 'throw', 'try', 'catch', 'typeid', 'using', 'virtual',
                'volatile', 'true', 'false', 'id', 'Class', 'SEL', 'IMP',
                'BOOL', 'oneway', 'in', 'out', 'inout', 'bycopy', 'byref',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'int', 'long', 'short', 'char', 'void', 'signed', 'unsigned',
                'float', 'double', 'size_t', 'wchar_t', 'ptrdiff_t',
                'sig_atomic_t', 'fpos_t', 'clock_t', 'time_t', 'va_list',
                'jmp_buf', 'FILE', 'DIR', 'div_t', 'ldiv_t', 'static',
                'register', 'auto', 'volatile', 'extern', 'const', 'bool',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '@\\w+',
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
        'delimiter' => '\"|\'',
    ),
    'pre_processor' => array(
        'prefix' => '#',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
