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
    'description' => 'RPM Spec',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'Summary', 'Name', 'Version', 'Release', 'Copyright', 'Group',
                'URL', 'Packager', 'Prefix', 'Distribution', 'Vendor', 'Icon',
                'Provides', 'Requires', 'Serial', 'Conflicts', 'AutoReqProv',
                'BuildArch', 'ExcludeArch', 'ExclusiveArch', 'ExclusiveOS',
                'BuildRoot', 'NoSource', 'NoPatch', 'License', 'Buildroot',
                'Source', 'Patch', 'case', 'in', 'esac', 'for', 'do', 'done',
                'function', 'if', 'then', 'fi', 'elif', 'Source0', 'Patch0',
                'Source1', 'Patch1', 'Source2', 'Patch2', 'Source3', 'Patch3',
                'Source4', 'Patch4', 'Source5', 'Patch5', 'Source6', 'Patch6',
                'Source7', 'Patch7', 'Source8', 'Patch8', 'Source9', 'Patch9',
                'Source10', 'Patch10', 'Source11', 'Patch11', 'Source12',
                'Patch12', 'Source13', 'Patch13', 'Source14', 'Patch14',
                'Source15', 'Patch15', 'Source16', 'Patch16', 'Source17',
                'Patch17', 'Source18', 'Patch18', 'Source19', 'Patch19',
                'Source20', 'Patch20', 'Source21', 'Patch21', 'Source22',
                'Patch22', 'Source23', 'Patch23', 'Source24', 'Patch24',
                'Source25', 'Patch25', 'Source26', 'Patch26', 'Source27',
                'Patch27', 'Source28', 'Patch28', 'Source29', 'Patch29',
                'Source30', 'Patch30', 'else', 'select', 'time', 'until',
                'while', 'source', 'alias', 'bind', 'break', 'builtin',
                'command', 'continue', 'declare', 'dirs', 'disown', 'echo',
                'enable', 'export', 'fc', 'fg', 'getopts', 'hash', 'help',
                'history', 'jobs', 'let', 'local', 'logout', 'popd', 'printf',
                'pushd', 'pwd', 'read', 'readonly', 'return', 'set', 'shift',
                'shopt', 'else', 'select', 'time', 'until', 'while', 'source',
                'alias', 'bind', 'break', 'builtin', 'command', 'continue',
                'declare', 'dirs', 'disown', 'echo', 'enable', 'export', 'fc',
                'fg', 'getopts', 'hash', 'help', 'history', 'jobs', 'let',
                'local', 'logout', 'popd', 'printf', 'pushd', 'pwd', 'read',
                'readonly', 'return', 'set', 'shift', 'shopt', 'suspend',
                'test', 'times', 'trap', 'type', 'ulimit', 'umask', 'unalias',
                'unset', 'wait', 'eval', 'bg', 'cd', 'echo', 'eval', 'exec',
                'exit', 'kill', 'read', 'set', 'test', 'trap', 'ulimit',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '\\%\\w+',
        ),
        array(
            'id' => 3,
            'regex' => '(\\%\\{.+\\})',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\+|\\-',
    'ignore_case' => false,
);
