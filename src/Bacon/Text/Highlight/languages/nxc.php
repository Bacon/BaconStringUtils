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
    'description' => 'Not eXactly C',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                '__RETURN__', '__RETVAL__', '__STRRETVAL__', '__TMPBYTE__',
                '__TMPWORD__', '__TMPLONG__', 'abs', 'asm', 'bool', 'break',
                'byte', 'case', 'char', 'const', 'continue', 'default', 'do',
                'else', 'false', 'for', 'goto', 'if', 'inline', 'int', 'long',
                'mutex', 'priority', 'repeat', 'return', 'safecall', 'short',
                'sign', 'start', 'stop', 'string', 'struct', 'sub', 'switch',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'bool', 'byte', 'unsigned', 'char', 'char', 'int', 'short',
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
        'continuation' => '\\',
    ),
    'nested_sections' => array(
        'lang' => 'asm',
        'delimiter' => array(
            'open' => 'asm',
            'close' => '\\}',
        ),
    ),
    'digits' => '(?:x|X)[-a-fA-F]+|\\d*[\\.]?\\d+(?:[eE][\\-\\+]\\\\d+)?[lLuU]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'enable_indentation' => true,
    'ignore_case' => false,
);
