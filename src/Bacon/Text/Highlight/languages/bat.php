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
    'description' => 'DOS Batch',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'do', 'else', 'end', 'errorlevel', 'exist', 'exit', 'for',
                'goto', 'if', 'not', 'pause', 'return', 'say', 'select', 'then',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'ansi', 'append', 'assign', 'attrib', 'autofail', 'backup',
                'basedev', 'boot', 'break', 'buffers', 'cache', 'call', 'cd',
                'chcp', 'chdir', 'chkdsk', 'choice', 'cls', 'cmd', 'codepage',
                'command', 'comp', 'copy', 'country', 'date', 'ddinstal',
                'debug', 'del', 'detach', 'device', 'devicehigh', 'devinfo',
                'dir', 'diskcoache', 'diskcomp', 'diskcopy', 'doskey', 'dpath',
                'dumpprocess', 'eautil', 'endlocal', 'erase', 'exit_vdm',
                'extproc', 'fcbs', 'fdisk', 'fdiskpm', 'files', 'find',
                'format', 'fsaccess', 'fsfilter', 'graftabl', 'iopl', 'join',
                'keyb', 'keys', 'label', 'lastdrive', 'libpath', 'lh',
                'loadhigh', 'makeini', 'maxwait', 'md', 'mem', 'memman',
                'mkdir', 'mode', 'move', 'net', 'patch', 'path', 'pauseonerror',
                'picview', 'pmrexx', 'print', 'printmonbufsize', 'priority',
                'priority_disk_io', 'prompt', 'protectonly', 'protshell',
                'pstat', 'rd', 'recover', 'reipl', 'ren', 'rename', 'replace',
                'restore', 'rmdir', 'rmsize', 'run', 'set', 'setboot',
                'setlocal', 'shell', 'shift', 'sort', 'spool', 'start', 'subst',
                'suppresspopups', 'swappath', 'syslevel', 'syslog', 'threads',
                'time', 'timeslice', 'trace', 'tracebuf', 'tracefmt',
                'trapdump', 'tree', 'type', 'undelete', 'unpack', 'use', 'ver',
                'verify', 'view', 'vmdisk', 'vol', 'xcopy', 'xcopy32',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '%\\S+',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '^(rem|Rem|REM).*',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
