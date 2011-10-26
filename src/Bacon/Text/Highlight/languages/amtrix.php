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
    'description' => 'AMTrix',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'argument', 'amtrix_logid', 'and', 'append', 'arg_list',
                'arg_opt', 'argumentcount', 'arraysize', 'as', 'assignment', '',
                'begin', 'binary', 'bit_and', 'bit_not', 'bit_or', 'bit_shift',
                'bit_xor', 'block', 'bounded', 'break', 'by', 'call', 'case',
                'catch', 'center', 'char', 'charset', 'close', 'comments',
                'commit', 'composite', 'conditional', 'constant', 'constants',
                'continue', 'control', 'convert', 'copy', 'count',
                'currentdate', 'data', 'database', 'date', 'debug', 'declare',
                'delete', 'destination', 'dir_close', 'dir_open', 'dir_read',
                'dir_rewind', 'edi', 'edi_charset', 'edi_read_charset',
                'edi_read_interchange', 'edi_truncate', 'element', 'else',
                'error', 'exec', 'execute', 'exit', 'export', 'expressions',
                'file', 'float', 'for', 'format', 'from', 'from_iso8859',
                'function', 'getopt', 'group', 'if', 'import', 'include',
                'input', 'insert', 'integer', 'into', 'left', 'lock', 'log',
                'logid', 'loop', 'mandatory', 'module', 'move', 'ndec', 'nolog',
                'on', 'open', 'optdta_read', 'optdta_write', 'optional', 'or',
                'order', 'others', 'output', 'pragma', 'print', 'raw_close',
                'raw_flush', 'raw_open', 'raw_read', 'raw_seek', 'raw_tell',
                'raw_write', 'read', 'readtag', 'receive', 'regexp', 'relation',
                'release', 'repeat', 'reserved', 'return', 'right', 'rollback',
                'scan', 'segment', 'select', 'send', 'sequence', 'set', 'sleep',
                'source', 'sourcefile', 'sourceline', 'sourcemodule',
                'sourceprocedure', 'split', 'sql', 'statement', 'str_field',
                'str_fields', 'str_lower', 'str_upper', 'strcnv', 'strfield',
                'strfields', 'string', 'strlen', 'strmid', 'sub', 'switch',
                'system', 'table', 'text', 'throw', 'to', 'to_iso8859', 'trunc',
                'truncate', 'try', 'type', 'types', 'unbounded', 'unique_id',
                'unique_name', 'unlock', 'update', 'values', 'variable',
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
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
