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
    'description' => 'PATROL',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'else', 'elsif', 'exit', 'export', 'foreach', 'function', 'if',
                'last', 'local', 'main', 'next', 'requires', 'return', 'switch',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'acos', 'annotate', 'annotate_get', 'asctime', 'asin', 'atan',
                'blackout', 'cat', 'ceil', 'chan_exists', 'change_state',
                'close', 'cond_signal', 'cond_wait', 'console_type',
                'convert_date', 'cos', 'cosh', 'create', 'date', 'debugger',
                'destroy', 'destroy_lock', 'difference', 'event_archive',
                'event_catalog_get', 'event_check', 'event_query',
                'event_range_manage', 'event_range_query', 'event_report',
                'event_schedule', 'event_trigger', 'event_trigger2', 'execute',
                'exists', 'exp', 'fabs', 'file', 'floor', 'fmod', 'fopen',
                'fseek', 'ftell', 'full_discovery', 'get', 'get_chan_info',
                'getenv', 'getpid', 'get_ranges', 'get_vars', 'grep', 'history',
                'history_get_retention', 'index', 'int', 'internal',
                'intersection', 'in_transition', 'isnumber', 'is_var', 'kill',
                'length', 'lines', 'lock', 'log', 'loge', 'log10', 'ntharg',
                'nthargf', 'nthline', 'nthlinef', 'num_consoles', 'pconfig',
                'popen', 'pow', 'print', 'printf', 'proc_exists', 'process',
                'Pslexecute', 'random', 'read', 'readln', 'refresh_parameters',
                'remote_close', 'remote_event_query', 'remote_event_trigger',
                'remote_file_send', 'remote_open', 'response', '',
                'response_get_value', 'rindex', 'set', 'share', 'sin', 'sinh',
                'sleep', 'snmp_agent_config', 'snmp_agent_stop', 'snmp_close',
                'snmp_config', '_snmp_debug', 'snmp_get', 'snmp_get_next',
                'snmp_h_get', 'snmp__h_get_next', 'snmp_h_set', 'snmp_open',
                'snmp_set', 'snmp_trap_ignore', 'snmp_trap_listen',
                'snmp_trap_raise_std_trap', 'snmp_trap_receive',
                'snmp_trap_register_im', 'snmp_trap_send', 'snmp_walk', 'sort',
                'sprintf', 'sqrt', 'srandom', 'subset', 'substr', 'system',
                'tail', 'tanh', 'time', 'tmpnam', 'tolower', 'toupper', 'trim',
                'union', 'unique', 'unlock', 'unset', 'va_arg', 'va_start',
            ),
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
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
