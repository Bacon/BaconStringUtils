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
    'description' => 'Gambas',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abs', 'dim', 'ispunct', 'replace$', 'access', 'dir', 'isshort',
                'return', 'acos', 'div', 'issingle', 'right$', 'acosh', 'do',
                'isspace', 'rinstr', 'alloc', 'else', 'isstring', 'rmdir',
                'and', 'end', 'isucase', 'rnd', 'and', 'if', 'end', 'select',
                'kill', 'rol', 'ang', 'end', 'with', 'labels', 'ror', 'append',
                'endif', 'round', 'eof', 'last', 'rtrim$', 'error', 'lcase$',
                'scan', 'as', 'error', 'to', 'left$', 'sconv$', 'asc', 'eval',
                'len', 'second', 'asin', 'event', 'library', 'seek', 'asinh',
                'event', 'loop', 'like', 'seek', 'asl', 'events', 'declaration',
                'line', 'input', 'select', 'asr', 'exec', 'link', 'sgn',
                'exist', 'shell', 'exp', 'shl', 'atan', 'exp10', 'lock', 'shr',
                'atan2', 'exp2', 'lof', 'sin', 'atanh', 'expm', 'log', 'sinh',
                'bchg', 'export', 'log10', 'sleep', 'bclr', 'extern', 'log2',
                'space$', 'bin$', 'logp', 'split', 'break', 'false', 'loop',
                'sqr', 'bset', 'file', '&', 'directory', 'paths', 'lsl', 'stat',
                'btst', 'finally', 'lsr', 'static', 'case', 'fix', 'ltrim$',
                'step', 'catch', 'flush', 'mag', 'stop', 'cbool', 'for', 'max',
                'stop', 'event', 'cbr', 'for', 'each', 'me', 'str$', 'cbyte',
                'format$', 'cdate', 'frac', 'mid$', 'string$', 'cfloat', 'free',
                'min', 'strptr', 'choose', 'function', 'minute', 'sub', 'chr$',
                'global', 'event', 'handlers', 'mkdir', 'subst$', 'cint',
                'goto', 'mod', 'super', 'class', 'hex$', 'month', 'swap',
                'clong', 'hour', 'move', 'tan', 'close', 'hyp', 'new', 'tanh',
                'comp', 'if', 'next', 'temp$', 'comparison', 'methods', 'iif',
                'not', 'then', 'const', 'in', 'now', 'time', 'constant',
                'declaration', 'inc', 'null', 'timer', 'continue', 'inherits',
                'open', 'to', 'conv$', 'trim$', 'copy', 'input', 'optional',
                'true', 'cos', 'input', 'from', 'or', 'try', 'cosh', 'instr',
                'or', 'if', 'typeof', 'create', 'int', 'output', 'ucase$',
                'create', 'private', 'is', 'output', 'to', 'unlock', 'create',
                'static', 'isascii', 'pi', 'until', 'cshort', 'isblank', 'pipe',
                'csng', 'isboolean', 'print', 'cstr', 'isbyte', 'private',
                'val', 'cvariant', 'isdate', 'procedure', 'datatypes',
                'isdigit', 'property', 'wait', 'date', 'isdir', 'property',
                'declaration', 'watch', 'dateadd', 'isfloat', 'public', 'week',
                'datediff', 'ishexa', 'quit', 'weekday', 'day', 'isinteger',
                'rad', 'wend', 'dconv$', 'islcase', 'raise', 'while', 'debug',
                'isletter', 'randomize', 'with', 'dec', 'islong', 'rdir',
                'write', 'default', 'isnull', 'read', 'xor', 'deg', 'isnumber',
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
                'open' => '\'',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'identifiers' => '[a-zA-Z_]+\\$?',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\|',
    'ignore_case' => true,
);
