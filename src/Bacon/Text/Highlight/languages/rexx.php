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
    'description' => 'Rexx',
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
                'result', 'say', 'scientific', 'select', 'sigl', 'signal',
                'source', 'syntax', 'then', 'to', 'trace', 'upper', 'until',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'abbrev', 'abs', 'append', 'beep', 'binary', 'bitand', 'bitor',
                'bitxor', 'both', 'b2x', 'center', 'centre', 'changestr',
                'char', 'charin', 'charout', 'chars', 'compare', 'condition',
                'copies', 'countstr', 'close', 'c2d', 'c2x', 'datetime',
                'datatype', 'date', 'delstr', 'delword', 'directory', 'd2c',
                'd2x', 'errortext', 'exists', 'filespec', 'flush', 'format',
                'handle', 'insert', 'lastpos', 'left', 'length', 'line',
                'linein', 'lineout', 'lines', 'max', 'min', 'nobuffer', 'open',
                'overlay', 'pos', 'position', 'queued', 'query', 'random',
                'reclength', 'read', 'replace', 'reverse', 'right', 'seek',
                'sign', 'size', 'shared', 'shareread', 'sharewrite',
                'sourceline', 'space', 'stream', 'streamtype', 'strip',
                'subword', 'substr', 'symbol', 'sys', 'time', 'timestamp',
                'translate', 'trunc', 'var', 'value', 'verify', 'word',
                'wordindex', 'wordlength', 'wordpos', 'words', 'write',
                'xrange', 'x2b', 'x2c', 'x2d', 'pid', 'pprio', 'ptime',
                'rxfuncadd', 'rxfuncdrop', 'rxfuncquery', 'rxqueue',
                'rxmessagebox', 'rxwinexec', 'sysaddrexxmacro', 'sysbootdrive',
                'sysclearrexxmacrospace', 'syscloseeventsem',
                'sysclosemutexsem', 'syscls', 'syscreateeventsem',
                'syscreatemutexsem', 'syscurpos', 'syscurstate', 'sysdriveinfo',
                'sysdrivemap', 'sysdropfuncs', 'sysdroprexxmacro',
                'sysdumpvariables', 'sysfiledelete', 'sysfilesearch',
                'sysfilesystemtype', 'sysgetfiledatetime', 'sysfiletree',
                'sysgetkey', 'sysini', 'sysloadfuncs', 'sysloadrexxmacrospace',
                'sysmkdir', 'sysopeneventsem', 'sysopenmutexsem',
                'sysposteventsem', 'syspulseeventsem', 'sysqueryprocess',
                'sysqueryrexxmacro', 'sysreleasemutexsem',
                'sysreorderrexxmacro', 'sysrequestmutexsem', 'sysreseteventsem',
                'sysrmdir', 'syssaverexxmacrospace', 'syssearchpath',
                'syssetfiledatetime', 'syssetpriority', 'syssleep',
                'sysstemcopy', 'sysstemdelete', 'syssteminsert', 'sysstemsort',
                'sysswitchsession', 'syssystemdirectory', 'systempfilename',
                'systextscreenread', 'systextscreensize', 'sysutilversion',
                'sysvolumelabel', 'syswaiteventsem', 'syswaitnamedpipe',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'externals', 'find', 'getmsg', 'index', 'justify', 'linesize',
                'listdsi', 'msg', 'mvsvar', 'outtrap', 'prompt', 'setlang',
                'storage', 'syscpus', 'sysdsn', 'sysvar', 'userid', 'dbadjust',
                'dbbracket', 'dbcenter', 'dbcjustify', 'dbcs', 'dbleft',
                'dbright', 'dbrleft', 'dbrright', 'dbtodbcs', 'dbtosbcs',
                'dbunbracket', 'dbvalidate', 'dbwidth', 'delstack', 'dropbuf',
                'execio', 'executil', 'he', 'hi', 'ht', 'makebuf', 'newstack',
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
                'open' => '\\-\\-|\\#!',
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
    'digits' => '(?:0x|0X)[0-9a-fA-F]+|\\d+[\\.]?\\d+(?:[eE][\\-\\+]\\d+)?[lLuU]*',
    'operators' => '\\(|\\)|\\[|\\]|\\.|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
