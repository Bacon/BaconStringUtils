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
    'description' => 'Bash',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'case', 'in', 'esac', 'for', 'do', 'done', 'function', 'if',
                'then', 'fi', 'elif', 'else', 'select', 'time', 'until',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'source', 'alias', 'bind', 'break', 'builtin', 'command',
                'continue', 'declare', 'dirs', 'disown', 'echo', 'enable',
                'export', 'fc', 'fg', 'getopts', 'hash', 'help', 'history',
                'jobs', 'let', 'local', 'logout', 'popd', 'printf', 'pushd',
                'pwd', 'read', 'readonly', 'return', 'set', 'shift', 'shopt',
                'suspend', 'test', 'times', 'trap', 'type', 'ulimit', 'umask',
                'unalias', 'unset', 'wait', 'eval', 'bg', 'cd', 'echo', 'eval',
                'exec', 'exit', 'kill', 'read', 'set', 'test', 'trap', 'ulimit',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'ls', 'cat', 'tac', 'rev', 'cp', 'mv', 'rm', 'rmdir', 'chmod',
                'chattr', 'ln', 'find', 'xargs', 'expr', 'date', 'zdump',
                'time', 'touch', 'at', 'batch', 'cal', 'sleep', 'usleep',
                'hwclock', 'clock', 'sort', 'tsort', 'diff', 'patch', 'diff3',
                'sdiff', 'cmp', 'comm', 'uniq', 'expand', 'unexpand', 'cat',
                'paste', 'join', 'head', 'tail', 'grep', 'egrep', 'zgrep',
                'look', 'sed', 'awk', 'wc', 'tr', 'fold', 'fmt', 'ptx', 'col',
                'column', 'colrm', 'nl', 'pr', 'gettext', 'iconv', 'recode',
                'groff', 'lex', 'yacc', 'tar', 'shar', 'ar', 'cpio', 'gzip',
                'bzip2', 'compress', 'uncompress', 'zip', 'unzip', 'sq', 'file',
                'which', 'whereis', 'whatis', 'vdir', 'shred', 'locate',
                'slocate', 'strings', 'basename', 'dirname', 'split', 'sum',
                'cksum', 'md5sum', 'sha1sum', 'uuencode', 'uudecode', 'crypt',
                'make', 'install', 'more', 'less', 'host', 'vrfy', 'nslookup',
                'dig', 'traceroute', 'ping', 'whois', 'finger', 'ftp', 'uucp',
                'telnet', 'rlogin', 'rsh', 'rcp', 'ssh', 'write', 'mail',
                'vacation', 'tput', 'reset', 'clear', 'script', 'factor', 'bc',
                'dc', 'jot', 'seq', 'yes', 'banner', 'printenv', 'lp', 'tee',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '\\$\\{.+?\\}',
        ),
        array(
            'id' => 4,
            'regex' => '\\$[\\w\\#]+',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '#',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'|`',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
