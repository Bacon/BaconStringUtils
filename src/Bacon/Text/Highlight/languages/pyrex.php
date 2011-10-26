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
    'description' => 'Pyrex',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'global', 'nextgroup', 'pythonfunction', 'skipwhite',
                'contained', 'chr', 'cmp', 'coerce', 'compile', 'complex',
                'delattr', 'dir', 'divmod', 'eval', 'execfile', 'filter',
                'getattr', 'globals', 'hasattr', 'hash', 'hex', 'id', 'input',
                'intern', 'isinstance', 'issubclass', 'len', 'list', 'locals',
                'long', 'map', 'max', 'min', 'oct', 'open', 'ord', 'pow',
                'range', 'raw_input', 'reduce', 'reload', 'repr', 'round',
                'setattr', 'slice', 'str', 'tuple', 'type', 'vars', 'xrange',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'import', 'from', 'self', 'public', 'extern', 'struct', 'as',
                'break', 'continue', 'del', 'except', 'finally', 'pass',
                'print', 'raise', 'return', 'lambda', 'class', 'try', 'assert',
                'def', 'for', 'while', 'if', 'elif', 'else', 'and', 'in', 'is',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'arithmeticerror', 'assertionerror', 'attributeerror',
                'eoferror', 'exception', 'floatingpointerror', 'ioerror',
                'importerror', 'indexerror', 'keyerror', 'keyboardinterrupt',
                'lookuperror', 'memoryerror', 'nameerror',
                'notimplementederror', 'oserror', 'overflowerror',
                'runtimeerror', 'standarderror', 'syntaxerror', 'systemerror',
                'systemexit', 'typeerror', 'valueerror', 'zerodivisionerror',
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
        'delimiter' => '\"\"\"|\'\'\'|\"|\'',
        'raw_prefix' => 'r',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
