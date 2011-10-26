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
return array_replace_recursive(array(
    'description' => 'RPG',
    'keywords' => array(
        array(
            'id' => 1,
            'regex' => '^\\s*([CDEFHIOP])',
        ),
        array(
            'id' => 1,
            'list' => array(
                'acq', 'add', 'adddur', 'alloc', 'andgt', 'andlt', 'andeq',
                'andne', 'andge', 'andle', 'begsr', 'bitoff', 'biton', 'cabxx',
                'call', 'callb', 'callp', 'casgt', 'caslt', 'caseq', 'casne',
                'casge', 'casle', 'cat', 'chain', 'check', 'checkr', 'clear',
                'close', 'commit', 'comp', 'dealloc', 'define', 'delete', 'div',
                'do', 'dou', 'dougt', 'doult', 'doueq', 'doune', 'douge',
                'doule', 'dow', 'dowgt', 'dowlt', 'doweq', 'downe', 'dowge',
                'dowle', 'dsply', 'dump', 'else', 'endcs', 'enddo', 'endfor',
                'endif', 'endsl', 'endsr', 'eval', 'evalr', 'except', 'exfmt',
                'exsr', 'extrct', 'feod', 'for', 'force', 'goto', 'if', 'ifgt',
                'iflt', 'ifeq', 'ifne', 'ifge', 'ifle', 'in', 'iter', 'kfld',
                'klist', 'leave', 'leavesr', 'lookup', 'mhhzo', 'mhlzo',
                'mlhzo', 'mllzo', 'move', 'movea', 'movel', 'mult', 'mvr',
                'next', 'occur', 'open', 'orgt', 'orlt', 'oreq', 'orne', 'orge',
                'orle', 'other', 'out', 'parm', 'plist', 'post', 'read',
                'readc', 'reade', 'readp', 'readpe', 'realloc', 'rel', 'reset',
                'return', 'rolbk', 'scan', 'select', 'setgt', 'setll', 'setoff',
                'seton', 'shtdn', 'sorta', 'sqrt', 'sub', 'subdur', 'subst',
                'tag', 'test', 'testb', 'testn', 'testz', 'time', 'unlock',
                'update', 'when', 'whengt', 'whenlt', 'wheneq', 'whenne',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '%\\w+',
        ),
        array(
            'id' => 3,
            'regex' => '/[\\w\\-]+',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '^\\s+(\\*.*)',
            ),
        ),
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '//',
            ),
        ),
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:',
), include __DIR__ . 'sql.php');
