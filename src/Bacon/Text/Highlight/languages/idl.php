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
    'description' => 'IDL',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'case', 'coclass', '', 'dispinterface', 'enum', 'interface',
                'library', 'module', 'pipe', 'struct', 'switch', 'typedef',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'auto', 'boolean', 'bstr', 'byte', 'char', 'double',
                'error_status_t', 'float', 'handle_t', 'hbitmap',
                'henhmetafile', 'hglobal', 'hmetafile', 'hmetafile_pict',
                'hpalette', 'hresult', 'hyper', 'int', 'long', 'safearray',
                'short', 'signed', 'small', 'unsigned', 'variant',
                'variant_bool', 'void', 'wchar_t', 'aggregatable', 'appobject',
                '', 'bindable', 'broadcast', 'callback', 'const',
                'context_handle', 'control', 'custom', 'default', 'defaultbind',
                'defaultcollelem', 'defaultvalue', 'defaultvtable',
                'displaybind', 'dllname', 'dual', 'endpoint', 'entry',
                'first_is', 'handle', 'helpcontext', 'helpfile', 'helpstring',
                'helpstringcontext', 'helpstringdll', 'hidden', 'id',
                'idempotentent', 'ignore', 'iid_is', 'immediatebind', 'in',
                'last_is', 'lcid', 'length_is', 'licensed', 'local', 'max_is',
                'maybe', 'message', 'ms_union', 'nonbrowsable', 'noncreatable',
                'nonextensible', 'object', 'oleautomation', 'optional', 'out',
                'pointer_default', 'propget', 'propput', 'propputref', 'ptr',
                'public', 'range', 'readonly', 'ref', 'requestedit',
                'restricted', 'retval', 'size_is', 'source', 'string',
                'switch_is', 'switch_type', 'transmit_as', 'uidefault',
                'unique', 'user_marshal', 'usesgetlasterror', 'uuid', 'v1_enum',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '//',
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
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
