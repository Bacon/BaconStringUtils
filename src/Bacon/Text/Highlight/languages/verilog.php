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
    'description' => 'Verilog',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'always', 'and', 'assign', 'attribute', 'begin', 'buf',
                'bufif0', 'bufif1', 'case', 'casex', 'casez', 'cmos',
                'deassign', 'default', 'defparam', 'disable', 'edge', 'else',
                'end', 'endattribute', 'endcase', 'endmodule', 'endfunction',
                'endprimitive', 'endspecify', 'endtable', 'endtask', 'event',
                'for', 'force', 'forever', 'fork', 'function', 'highz0',
                'highz1', 'if', 'initial', 'inout', 'input', 'integer', 'join',
                'large', 'macromodule', 'medium', 'module', 'nand', 'negedge',
                'nmos', 'nor', 'not', 'notif0', 'notif1', 'or', 'output',
                'parameter', 'pmos', 'posedge', 'primitive', 'pull0', 'pull1',
                'pullup', 'pulldown', 'rcmos', 'reg', 'release', 'repeat',
                'rnmos', 'rpmos', 'rtran', 'rtranif0', 'rtranif1', 'scalared',
                'small', 'specify', 'specparam', 'strength', 'strong0',
                'strong1', 'supply0', 'supply1', 'table', 'task', 'time',
                'tran', 'tranif0', 'tranif1', 'tri', 'tri0', 'tri1', 'triand',
                'trior', 'trireg', 'use', 'vectored', 'wait', 'wand', 'weak0',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '\\$\\w+',
        ),
        array(
            'id' => 3,
            'regex' => '#\\d+',
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
        'prefix' => '`',
    ),
    'digits' => '(?:0x|0X)[0-9a-fA-F]+|\\d*[\\.\\_]?[\\d+\\\'](?:[eE][\\-\\+]\\d+)?[lLuUbfdm]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\@',
    'ignore_case' => false,
    'on_state_change' => function($oldState, $newState, $token) {
        if ($token === '\'' && $oldState === self::HL_NUMBER && $newState === self::HL_STRING) {
            return self::HL_NUMBER;
        }
    
        return $newState;
    },
);
