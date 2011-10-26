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
    'description' => 'Pike',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'constant', 'enum', 'typedef', 'if', 'do', 'for', 'while',
                'else', 'foreach', 'case', 'switch', 'break', 'continue',
                'return', 'sscanf', 'typeof', 'catch', 'gauge', 'class',
                'lambda', 'import', 'inherit', 'facet', 'final', 'static',
                'private', 'local', 'public', 'protected', 'nomask', 'inline',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'array', 'constant', 'extern', 'float', 'function', 'int',
                'local', 'mapping', 'mixed', 'multiset', 'object', 'program',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                '__parse_pike_type', '_disable_threads', '_do_call_outs',
                '_exit', '_gc_status', '_leak', '_memory_usage', '_next',
                '_prev', '_refs', '_static_modules', '_typeof', 'abs', 'acos',
                'add_constant', 'add_include_path', 'add_module_path',
                'add_program_path', 'aggregate', 'aggregate_mapping',
                'aggregate_multiset', 'alarm', 'all_constants', 'all_threads',
                'allocate', 'array_sscanf', 'arrayp', 'asin', 'atan', 'atan2',
                'atexit', 'backtrace', 'basename', 'call_function', 'call_out',
                'call_out_info', 'cd', 'ceil', 'chmod', 'chown', 'chroot',
                'cleargroups', 'clone', 'closelog', 'column', 'combine_path',
                'combine_path_nt', 'combine_path_unix', 'compile', '',
                'compile_file', 'compile_string', 'copy_value', 'cos', 'cpp',
                'crypt', 'ctime', 'decode_value', 'delay', 'describe_backtrace',
                'describe_error', 'destruct', 'dirname', 'encode_value',
                'encode_value_canonic', 'endgrent', 'endpwent', 'enumerate',
                'equal', 'errno', 'exece', 'exit', 'exp', 'explode_path',
                'file_stat', 'file_truncate', 'filesystem_stat', 'filter',
                'find_call_out', 'floatp', 'floor', 'fork', 'function_name',
                'function_object', 'functionp', 'gc', 'get_all_groups',
                'get_all_users', 'get_dir', 'get_groups_for_user',
                'get_weak_flag', 'getcwd', 'getegid', 'getenv', 'geteuid',
                'getgid', 'getgrent', 'getgrgid', 'getgrnam', 'getgroups',
                'gethostbyaddr', 'gethostbyname', 'gethostname', 'gethrtime',
                'getpgrp', 'getpid', 'getppid', 'getpwent', 'getpwnam',
                'getpwuid', 'getsid', 'getuid', 'glob', 'gmtime', 'hardlink',
                'has_index', 'has_prefix', 'has_suffix', 'has_value', 'hash',
                'hash_7_0', 'indices', 'initgroups', 'innetgr', 'intp',
                'is_absolute_path', 'kill', 'load_module', 'localtime', 'log',
                'lower_case', 'm_delete', 'map', 'mappingp', 'master', 'max',
                'min', 'mkdir', 'mkmapping', 'mkmultiset', 'mktime',
                'multisetp', 'mv', 'new', 'next_object', 'normalize_path',
                'object_program', 'object_variablep', 'objectp', 'openlog',
                'pow', 'programp', '', 'putenv', 'query_num_arg', 'random',
                'random_seed', 'random_string', 'readlink', 'remove_call_out',
                'remove_include_path', 'remove_module_path',
                'remove_program_path', 'replace', 'replace_master', 'reverse',
                'rm', 'round', 'rows', 'rusage', 'search', 'set_priority',
                'set_weak_flag', 'setegid', 'seteuid', 'setgid', 'setgrent',
                'setgroups', 'setpgrp', 'setpwent', 'setresgid', 'setresuid',
                'setsid', 'setuid', 'sgn', 'signal', 'signame', 'signum', 'sin',
                'sizeof', 'sleep', 'sort', 'sprintf', 'sqrt', 'strerror',
                'string_to_unicode', 'string_to_utf8', 'stringp', 'strlen',
                'symlink', 'syslog', 'tan', 'this_object', 'this_thread',
                'thread_create', 'thread_local', 'throw', 'time', 'trace',
                'ualarm', 'umask', 'uname', 'unicode_to_string', 'upper_case',
                'utf8_to_string', 'utime', 'values', 'version', 'werror',
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
                'open' => '\\/\\/',
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
    'pre_processor' => array(
        'prefix' => '#',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
