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
    'description' => 'Transact-SQL',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'add', 'exists', 'precision', 'all', 'exit', 'primary', 'alter',
                'external', 'print', 'and', 'fetch', 'proc', 'any', 'file',
                'procedure', 'as', 'fillfactor', 'public', 'asc', 'for',
                'raiserror', 'authorization', 'foreign', 'read', 'backup',
                'freetext', 'readtext', 'begin', 'freetexttable', 'reconfigure',
                'between', 'from', 'references', 'break', 'full', 'replication',
                'browse', 'function', 'restore', 'bulk', 'goto', 'restrict',
                'by', 'grant', 'return', 'cascade', 'group', 'revert', 'case',
                'having', 'revoke', 'check', 'holdlock', 'right', 'checkpoint',
                'identity', 'rollback', 'close', 'identity_insert', 'rowcount',
                'clustered', 'identitycol', 'rowguidcol', 'coalesce', 'if',
                'rule', 'collate', 'in', 'save', 'column', 'index', 'schema',
                'commit', 'inner', 'securityaudit', 'compute', 'insert',
                'select', 'constraint', 'intersect', 'session_user', 'contains',
                'into', 'set', 'containstable', 'is', 'setuser', 'continue',
                'join', 'shutdown', 'convert', 'key', 'some', 'create', 'kill',
                'statistics', 'cross', 'left', 'system_user', 'current', 'like',
                'table', 'current_date', 'lineno', 'tablesample',
                'current_time', 'load', 'textsize', 'current_timestamp',
                'merge', 'then', 'current_user', 'national', 'to', 'cursor',
                'nocheck', 'top', 'database', 'nonclustered', 'tran', 'dbcc',
                'not', 'transaction', 'deallocate', 'null', 'trigger',
                'declare', 'nullif', 'truncate', 'default', 'of', 'tsequal',
                'delete', 'off', 'union', 'deny', 'offsets', 'unique', 'desc',
                'on', 'unpivot', 'disk', 'open', 'update', 'distinct',
                'opendatasource', 'updatetext', 'distributed', 'openquery',
                'use', 'double', 'openrowset', 'user', 'drop', 'openxml',
                'values', 'dump', 'option', 'varying', 'else', 'or', 'view',
                'end', 'order', 'waitfor', 'errlvl', 'outer', 'when', 'escape',
                'over', 'where', 'except', 'percent', 'while', 'exec', 'pivot',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'absolute', 'exec', 'overlaps', 'action', 'execute', 'pad',
                'ada', 'exists', 'partial', 'add', 'external', 'pascal', 'all',
                'extract', 'position', 'allocate', 'false', 'precision',
                'alter', 'fetch', 'prepare', 'and', 'first', 'preserve', 'any',
                'float', 'primary', 'are', 'for', 'prior', 'as', 'foreign',
                'privileges', 'asc', 'fortran', 'procedure', 'assertion',
                'found', 'public', 'at', 'from', 'read', 'authorization',
                'full', 'real', 'avg', 'get', 'references', 'begin', 'global',
                'relative', 'between', 'go', 'restrict', 'bit', 'goto',
                'revoke', 'bit_length', 'grant', 'right', 'both', 'group',
                'rollback', 'by', 'having', 'rows', 'cascade', 'hour', 'schema',
                'cascaded', 'identity', 'scroll', 'case', 'immediate', 'second',
                'cast', 'in', 'section', 'catalog', 'include', 'select', 'char',
                'index', 'session', 'char_length', 'indicator', 'session_user',
                'character', 'initially', 'set', 'character_length', 'inner',
                'size', 'check', 'input', 'smallint', 'close', 'insensitive',
                'some', 'coalesce', 'insert', 'space', 'collate', 'int', 'sql',
                'collation', 'integer', 'sqlca', 'column', 'intersect',
                'sqlcode', 'commit', 'interval', 'sqlerror', 'connect', 'into',
                'sqlstate', 'connection', 'is', 'sqlwarning', 'constraint',
                'isolation', 'substring', 'constraints', 'join', 'sum',
                'continue', 'key', 'system_user', 'convert', 'language',
                'table', 'corresponding', 'last', 'temporary', 'count',
                'leading', 'then', 'create', 'left', 'time', 'cross', 'level',
                'timestamp', 'current', 'like', 'timezone_hour', 'current_date',
                'local', 'timezone_minute', 'current_time', 'lower', 'to',
                'current_timestamp', 'match', 'trailing', 'current_user', 'max',
                'transaction', 'cursor', 'min', 'translate', 'date', 'minute',
                'translation', 'day', 'module', 'trim', 'deallocate', 'month',
                'true', 'dec', 'names', 'union', 'decimal', 'national',
                'unique', 'declare', 'natural', 'unknown', 'default', 'nchar',
                'update', 'deferrable', 'next', 'upper', 'deferred', 'no',
                'usage', 'delete', 'none', 'user', 'desc', 'not', 'using',
                'describe', 'null', 'value', 'descriptor', 'nullif', 'values',
                'diagnostics', 'numeric', 'varchar', 'disconnect',
                'octet_length', 'varying', 'distinct', 'of', 'view', 'domain',
                'on', 'when', 'double', 'only', 'whenever', 'drop', 'open',
                'where', 'else', 'option', 'with', 'end', 'or', 'work',
                'end-exec', 'order', 'write', 'escape', 'outer', 'year',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '(\\w+)\\s*\\(',
        ),
        array(
            'id' => 4,
            'regex' => '@?@\\w+',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\-\\-',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
