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
    'description' => 'TCSH',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'return', 'if', 'endif', 'then', 'else', 'switch', 'endsw',
                'while', 'end', 'foreach', 'do', 'done', '', 'eval', 'exec',
                'exit', 'fg', 'goto', 'glob', 'hashstat', 'history', 'jobs',
                'kill', 'limit', 'login', 'logout', 'nohup', 'notify', 'nice',
                'onintr', 'popd', 'pushd', 'printenv', 'read', 'rehash',
                'repeat', 'set', 'setenv', 'shift', 'source', 'suspend', 'time',
                'umask', 'unalias', 'unhash', 'unlimit', 'unset', 'unsetenv',
                'wait', 'alloc', 'bindkey', 'builtins', 'complete', 'echotc',
                'filetest', 'hup', 'log', 'sched', 'settc', 'setty', 'stop',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '\\$\\S+',
        ),
        array(
            'id' => 3,
            'regex' => '(\\$\\{\\w+\\})',
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
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
