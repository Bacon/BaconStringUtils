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
    'description' => 'Python',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'break', 'continue', 'del', 'except', 'exec', 'finally', 'pass',
                'print', 'raise', 'return', 'try', 'global', 'assert', 'lambda',
                'yield', 'def', 'class', 'for', 'while', 'if', 'elif', 'else',
                'and', 'in', 'is', 'not', 'or', 'import', 'from', 'as', 'None',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'bool', 'enumerate', 'set', 'frozenset', 'help', 'reversed',
                'sorted', 'sum', 'Ellipsis', 'NotImplemented', '__import__',
                'abs', 'apply', 'buffer', 'callable', 'chr', 'classmethod',
                'cmp', 'coerce', 'compile', 'complex', 'delattr', 'dict', 'dir',
                'divmod', 'eval', 'execfile', 'file', 'filter', 'float',
                'getattr', 'globals', 'hasattr', 'hash', 'hex', 'id', 'input',
                'int', 'intern', 'isinstance', 'issubclass', 'iter', 'len',
                'list', 'locals', 'long', 'map', 'max', 'min', 'object', 'oct',
                'open', 'ord', 'pow', 'property', 'range', 'raw_input',
                'reduce', 'reload', 'repr', 'round', 'setattr', 'slice',
                'staticmethod', 'str', 'super', 'tuple', 'type', 'unichr',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '@\\w+',
        ),
        array(
            'id' => 3,
            'list' => array(
                'ArithmeticError', 'AssertionError', 'AttributeError',
                'DeprecationWarning', 'EOFError', 'EnvironmentError',
                'Exception', 'FloatingPointError', 'IOError', 'ImportError',
                'IndentationError', 'IndexError', 'KeyError',
                'KeyboardInterrupt', 'LookupError', 'MemoryError', 'NameError',
                'NotImplementedError', 'OSError', 'OverflowError',
                'OverflowWarning', 'ReferenceError', 'RuntimeError',
                'RuntimeWarning', 'StandardError', 'StopIteration',
                'SyntaxError', 'SyntaxWarning', 'SystemError', 'SystemExit',
                'TabError', 'TypeError', 'UnboundLocalError', 'UnicodeError',
                'UnicodeEncodeError', 'UnicodeDecodeError',
                'UnicodeTranslateError', 'UserWarning', 'ValueError', 'Warning',
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
                'open' => '#',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"\"\"|\'\'\'|\"|\'',
        'escape' => '\\\\[ntvbrfa\\\\\\?\'\"]|\\\\\\d{3}|\\\\x\\p{XDigit}{2}',
        'raw_prefix' => 'r',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\@',
    'ignore_case' => false,
);
