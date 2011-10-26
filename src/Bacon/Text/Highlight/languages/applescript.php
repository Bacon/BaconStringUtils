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
    'description' => 'AppleScript',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'and', 'as', 'at', 'beginning', 'considering', 'contain',
                'contains', 'does', 'div', 'else', 'end', 'equal', 'error',
                'every', 'exit', 'first', 'from', 'get', 'global', 'greater',
                'if', 'ignoring', 'in', 'is', 'last', 'local', 'me', 'mod',
                'my', 'not', 'of', 'on', 'or', 'property', 'reopen', 'repeat',
                'return', 'script', 'set', 'tell', 'than', 'the', 'then', 'to',
                'transaction', 'try', 'with', 'without', 'which', 'while',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'AppleScript', 'access', 'activate', 'after', 'alias',
                'application', '', 'ascending', 'ASCII', 'at', 'attached',
                'before', 'box', 'button', 'buttons', 'case', 'cell', 'cells',
                'character', 'characters', '', 'choose', 'class', 'close',
                'column', 'columns', 'content', 'contents', 'control',
                'controls', 'copy', 'count', '', 'current', 'data', 'date',
                'day', 'default', 'delay', 'delete', 'delimiter', 'descending',
                'desktop', 'dialog', '', 'display', 'document', 'documents',
                'domain', 'duplicate', 'enabled', 'ends', 'eof', 'equal',
                'entry', '', 'entries', 'exists', 'false', 'field', 'fields',
                'file', 'files', 'folder', 'folders', 'for', 'icon', 'icons',
                'indicator', '', 'indicators', 'item', 'items', 'length',
                'list', 'load', 'location', 'localized', 'make', 'matrix',
                'menu', 'menus', '', 'missing', 'month', 'months', 'name',
                'new', 'number', 'offset', 'open', 'order', 'panel', 'panels',
                'path', 'popup', '', 'print', 'process', 'progress',
                'properties', 'quit', 'read', 'response', 'row', 'rows',
                'scroll', 'select', '', 'selected', 'selection', 'sheet',
                'size', 'sort', 'sorted', 'source', 'specification', 'start',
                'starting', '', 'stop', 'string', 'table', 'text', 'title',
                'true', 'Unicode', 'update', 'user', 'value', 'visible', 'view',
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
                'open' => '--',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
        'escape' => '\\\\\\d{3}|\\\\u\\d{4}|\\\\x\\p{XDigit}{2}|\\\\[ntvbrfa\\\\\\?\'\"]',
    ),
    'enable_indentation' => false,
    'ignore_case' => false,
);
