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
    'description' => 'Miranda',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstype', 'div', 'if', 'mod', 'otherwise', 'readvals', 'show',
                'type', 'where', 'with', 'sys_message', 'False', 'True',
                'Appendfile', 'Closefile', 'Exit', 'Stderr', 'Stdout', 'System',
                'Tofile', 'abs', 'and', 'arctan', 'cjustify', 'code', 'concat',
                'const', 'converse', 'cos', 'decode', 'digit', 'drop',
                'dropwhile', 'entier', 'error', 'exp', 'filemode', 'filter',
                'foldl', 'foldl1', 'foldr', 'foldr1', 'force', 'fst', 'getenv',
                'hd', 'hugenum', 'id', 'index', 'init', 'integer', 'iterate',
                'last', 'lay', 'layn', 'letter', 'limit', 'lines', 'ljustify',
                'log', 'log10', 'map', 'map2', 'max', 'max2', 'member', 'merge',
                'min', 'min2', 'mkset', 'neg', 'numval', 'or', 'pi', 'postfix',
                'product', 'read', 'rep', 'repeat', 'reverse', 'rjustify',
                'scan', 'seq', 'showfloat', 'shownum', 'showscaled', 'sin',
                'snd', 'sort', 'spaces', 'sqrt', 'subtract', 'sum', 'system',
                'take', 'takewhile', 'tinynum', 'tl', 'transpose', 'undef',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\s*[a-zA-Z][a-zA-Z0-9_\']*\\s*.*\\s*::\\s+.*|\\s*[a-zA-Z][a-zA-Z0-9_\']*\\s*[\\* ]*\\s*==\\s+.*|\\s*[a-zA-Z][a-zA-Z0-9_\']*\\s*[\\* ]*\\s*::=\\s+.*)',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\|\\|',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'pre_processor' => array(
        'prefix' => '%',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\.|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\^',
    'ignore_case' => false,
);
