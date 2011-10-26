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
    'description' => 'Open Object Rexx',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'address', 'additional', 'any', 'arg', 'arguments', 'array',
                'by', 'call', 'caseless', 'continue', 'class', 'description',
                'digits', 'do', 'drop', 'end', 'engineering', 'error', 'exit',
                'expose', 'else', 'failure', 'for', 'forever', 'form',
                'forward', 'fuzz', 'guard', 'halt', 'if', 'interpret',
                'iterate', 'leave', 'lower', 'lostdigits', 'message', 'name',
                'nop', 'nomethod', 'nostring', 'notready', 'novalue', 'numeric',
                'on', 'off', 'otherwise', 'parse', 'procedure', 'pull', 'push',
                'propagate', 'queue', 'raise', 'reply', 'return', 'ret', 'rc',
                'say', 'scientific', 'select', 'sigl', 'signal', 'source',
                'syntax', 'then', 'to', 'trace', 'upper', 'until', 'use',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'abbrev', '', 'abs', '', 'address', 'arg', '', 'b2x', '',
                'beep', 'bitand', '', 'bitor', '', 'bitxor', '', 'c2d', '',
                'c2x', '', 'center', 'changestr', 'charin', '', 'charout', '',
                'chars', '', 'compare', 'condition', 'copies', 'countstr',
                'd2c', '', 'd2x', 'datatype', 'date', 'delstr', '', 'delword',
                '', 'digits', 'directory', 'endlocal', '', 'errortext',
                'filespec', 'form', 'format', 'fuzz', 'insert', 'lastpos', '',
                'left', 'length', 'linein', '', 'lineout', 'lines', '', 'max',
                '', 'min', 'overlay', 'pos', 'queued', 'random', 'reverse',
                'right', 'rxfuncadd', 'rxfuncdrop', 'rxfuncquery', 'rxqueue',
                'setlocal', '', 'sign', 'sourceline', 'space', 'stream',
                'strip', 'substr', '', 'subword', 'symbol', 'time', 'trace',
                'translate', 'trunc', 'userid', 'value', 'var', 'verify',
                'word', 'wordindex', 'wordlength', 'wordpos', '', 'words',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\w+)\\s*\\:',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\-\\-|\\#',
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
        'delimiter' => '\'|\"',
    ),
    'operators' => '\\+|\\-|\\\\|\\/|\\%|\\*|\\&|\\=|\\>|\\<|\\.|\\,|\\;|\\:|\\(|\\)|\\[|\\]|\\~',
    'ignore_case' => true,
);
