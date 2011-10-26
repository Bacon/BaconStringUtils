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
    'description' => 'Informix',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'add', 'after', 'all', 'allowing', 'and', 'any', 'arg_val',
                'array', 'arr_count', 'arr_curr', 'as', 'asc', 'at',
                'attribute', 'attributes', 'auto', 'autonext', 'average', 'avg',
                'before', 'between', 'bottom', 'by', 'call', 'case', 'check',
                'clear', 'clipped', 'close', 'column', 'columns', 'command',
                'comment', 'comments', 'commit', 'composites', 'connect',
                'construct', 'continue', 'correct', 'count', 'current',
                'cursor', 'database', 'declare', 'default', 'defer', 'define',
                'delimiters', 'desc', 'describe', 'display', 'displayonly',
                'distinct', 'do', 'down', 'downshift', 'else', 'end', 'entry',
                'every', 'execute', 'exists', 'exit', 'extern', 'false',
                'fetch', 'field', 'finish', 'first', 'for', 'foreach', 'form',
                'format', 'formonly', 'found', 'from', 'function', 'globals',
                'group', 'having', 'header', 'help', 'if', 'in', 'include',
                'input', 'insert', 'instructions', 'into', 'is', 'joining',
                'key', 'label', 'last', 'lenght', 'let', 'line', 'lineno',
                'lines', 'log', 'main', 'margin', 'master', 'matches', 'max',
                'mdy', 'menu', 'message', 'min', 'mode', 'name', 'need', 'next',
                'nextfield', 'no', 'normal', 'not', 'notfound', 'null',
                'num_args', 'of', 'on', 'open', 'option', 'options', 'or',
                'order', 'otherwise', 'outer', 'output', 'page', 'pageno',
                'prepare', 'previous', 'print', 'printer', 'privileges',
                'program', 'prompt', 'query', 'queryclear', 'quit', 'record',
                'register', 'report', 'resource', 'return', 'returning',
                'reverse', 'right', 'row', 'rowid', 'run', 'screen', 'scroll',
                'scr_line', 'select', 'set', 'set_count', 'share', 'sizeof',
                'skip', 'some', 'sqlca', 'start', 'startlog', 'static',
                'statistics', 'status', 'step', 'stop', 'sum', 'switch',
                'synonym', 'systables', 'then', 'through', 'thru', 'to', 'top',
                'trailer', 'true', 'union', 'unique', 'unlock', 'up', 'upshift',
                'user', 'using', 'validate', 'value', 'values', 'verify',
                'view', 'waiting', 'warning', 'when', 'whenever', 'where',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '#|\\-\\-',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\{',
                'close' => '\\}',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
);
