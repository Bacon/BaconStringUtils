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
    'description' => 'Arc',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'def', 'defhook', 'defmem', 'defop', 'defops', 'defset',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'drain', 'each', 'for', 'forlen', 'loop', 'noisy-each', 'on',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'case', 'caselet', 'check', 'if', 'iflet', 'when', 'whenlet',
            ),
        ),
        array(
            'id' => 4,
            'list' => array(
                'aand', 'abs', 'accum', 'acons', 'addtem', 'adjoin', 'afn',
                'after', 'aif', 'alist', 'all', 'alphadig', 'alref', 'and',
                'andf', 'annotate', 'apply', 'assert', 'assoc', 'atend',
                'atlet', 'atom', 'atomic', 'atomic-invoke', 'atwith', 'atwiths',
                'avg', 'awhen', 'bar*', 'before', 'begins', 'best', 'bestn',
                'blank', 'bound', 'break-threadcaar', 'cache', 'cadr',
                'call-w/stdin', 'call-w/stdout', 'car', 'carif', 'caris',
                'catch', 'ccc', 'cddr', 'cdr', 'client-ip', 'close', 'coerce',
                'commonest', 'compare', 'complement', 'compose', 'consif',
                'conswhen', 'copy', 'count', 'counts',
                'current-gc-milliseconds', 'current-process-milliseconds',
                'cut', 'date', 'days-since', 'dead', 'dedup', 'deq', 'details',
                'dir', 'dir-exists', 'disp', 'do', 'do1', 'dotted', 'downcase',
                'ellipsize', 'empty', 'endmatch', 'enq', 'enq-limit',
                'ensure-dir', 'ero', 'err', 'errsafe', 'eval', 'even', 'exact',
                'expand-metafn-call', 'expand=', 'expand=list', 'expt',
                'file-exists', 'fill-table', 'find', 'findsubseq', 'firstn',
                'firstn-that', 'flat', 'fn', 'for', 'forlen', 'fromstring',
                'headmatch', 'hook', 'hooks*', 'hours-since', 'idfn', 'in',
                'infile', 'insert-sorted', 'inside', 'insort', 'insortnew',
                'inst', 'instring', 'intersperse', 'is', 'isa', 'isnt', 'iso',
                'join', 'jtime', 'keep', 'keys', 'kill-thread', 'last', 'len',
                'len<', 'len>', 'let', 'list', 'listtab', 'litmatch', 'load',
                'load-table', 'load-tables', 'macex', 'macex1', 'map', 'map1',
                'mappend', 'maptable', 'max', 'median', 'mem', 'memo',
                'memtable', 'merge', 'mergesort', 'metafn', 'min', 'mismatch',
                'mod', 'most', 'msec', 'multiple', 'multisubst', 'n-of',
                'new-thread', 'newstring', 'no', '', 'nonwhite', 'nor',
                'nthcdr', 'num', 'number', 'obj', 'odd', 'on-err', 'only',
                'ontree', 'open-socket', 'or', 'orf', 'outfile', 'outstring',
                'pair', 'parse-format', 'peekc', 'pipe-from', 'plural', 'point',
                'pop', 'pos', 'positive', 'posmatch', 'pr', 'prall', 'prf',
                'prn', 'protect', 'prs', 'pull', 'punc', 'push', 'pushnew',
                'qlen', 'qlist', 'quasiquote', 'queue', 'quit', 'quote', 'rand',
                'rand-choice', 'rand-string', 'random-elt', 'range', 'read',
                'read-table', 'readall', 'readb', 'readc', 'readfile',
                'readfile1', 'readline', 'readstring1', 'reclist', 'recstring',
                'reduce', 'reinsert-sorted', 'rem', 'rep', 'repeat', 'rev',
                'rfn', 'rmfile', 'rotate', 'round', 'roundup', 'rreduce',
                'safe-load-table', 'saferead', 'safeset', 'save-table', 'scar',
                'scdr', 'seconds', 'set', 'setforms', 'setter', 'sig', 'since',
                'single', 'sleep', 'socket-accept', 'some', 'sort', 'split',
                'sqrt', 'sread', 'sref', 'ssexpand', 'ssyntax', 'stderr',
                'stdin', 'stdout', 'string', 'subst', 'summing', 'swap', 'sym',
                'system', 'table', 'tablist', 'temload', 'temloadall',
                'templates*', 'templatize', 'temread', 'testify', 'thread',
                'time', 'time10', 'to-nearest', 'tokens', 'tostring', 'trav',
                'tree-subst', 'treewise', 'trim', 'trues', 'trunc', 'tuples',
                'type', 'union', 'uniq', 'upcase', 'urldecode', 'vals',
                'w/appendfile', 'w/bars', 'w/infile', 'w/instring', 'w/outfile',
                'w/outstring', 'w/socket', 'w/stdin', 'w/stdout', 'w/table',
                'w/uniq', 'warn', 'whitec', 'wipe', 'with', 'withs', 'write',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => ';',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\;\\|',
                'close' => '\\|\\;',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'identifiers' => '[a-zA-Z_][\\w\\-\\/]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\:|\\&|\\<|\\>|\\!|\\+|\\=|\\/|\\*|\\\'',
);
