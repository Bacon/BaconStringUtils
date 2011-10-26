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
    'description' => 'Lua',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'and', 'break', 'do', 'else', 'elseif', 'end', 'false', 'for',
                'function', 'if', 'in', 'local', 'nil', 'not', 'or', 'repeat',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'number', 'string', 'function', 'userdata', 'table', 'assert',
                'call', 'collectgarbage', 'copytagmethods', 'dofile',
                'dostring', 'error', 'foreach', 'foreachi', 'getglobal', 'getn',
                'gettagmethod', 'globals', 'newtag', 'next', 'print', 'rawget',
                'rawset', 'setglobal', 'settag', 'settagmethod', 'sort', 'tag',
                'tonumber', 'tostring', 'tinsert', 'tremove', 'type', 'abs',
                'acos', 'asin', 'atan', 'atan2', 'ceil', 'cos', 'deg', 'exp',
                'floor', 'log', 'log10', 'max', 'min', 'mod', 'rad', 'sin',
                'sqrt', 'tan', 'frexp', 'ldexp', 'random', 'randomseed',
                'openfile', 'closefile', 'readfrom', 'writeto', 'appendto',
                'remove', 'rename', 'flush', 'seek', 'tmpname', 'read', 'write',
                'clock', 'date', 'execute', 'exit', 'getenv', 'setlocale',
                'strbyte', 'strchar', 'strfind', 'strlen', 'strlower', 'strrep',
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
                'open' => '\\-\\-(?!\\[\\[) ',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => ' \\-\\-\\[\\[ ',
                'close' => ' \\]\\] ',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
        'delimiter_pairs' => array(
            array(
                'open' => '\\[\\[',
                'close' => '\\]\\]',
                'raw' => true,
            ),
        ),
    ),
    'operators' => '\\(|\\)|\\{|\\}|\\[|\\]|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\#|\\\\',
    'ignore_case' => false,
    'on_state_change' => function($oldState, $newState, $token) {
        if ($token === ']]' && $oldState === self::HL_STRING && $newState === self::HL_BLOCK_COMMENT_END) {
            return self::HL_STRING_END;
        }
    
        return $newState;
    },
);
