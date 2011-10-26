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
    'description' => 'Pascal',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'absolute', 'abstract', 'and', 'array', 'as', 'asm',
                'assembler', 'automated', 'begin', 'case', 'cdecl', 'class',
                'const', 'constructor', 'destructor', 'dispid', 'dispinterface',
                'div', 'dynamic', 'end', 'except', 'export', 'exports',
                'external', 'far', 'file', 'finalization', 'finally', 'forward',
                'function', 'goto', 'implementation', 'in', 'initialization',
                'inherited', 'inline', 'interface', 'is', 'label', 'library',
                'message', 'mod', 'near', 'nil', 'not', 'object', 'of', 'or',
                'out', 'override', 'packed', 'pascal', 'private', 'procedure',
                'program', 'property', 'protected', 'public', 'published',
                'raise', 'record', 'register', 'resourcestring', 'safecall',
                'set', 'shl', 'shr', 'stdcall', 'string', 'threadvar', 'try',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'boolean', 'char', 'integer', 'pointer', 'real', 'text', 'true',
                'false', 'cardinal', 'longint', 'byte', 'word', 'single',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'if', 'else', 'then', 'downto', 'do', 'for', 'repeat', 'while',
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
                'open' => '//',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\{',
                'close' => '\\}',
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
        'delimiter' => '\"|\'',
    ),
    'nested_sections' => array(
        'lang' => 'assembler',
        'delimiter' => array(
            'open' => 'asm',
            'close' => 'end;',
        ),
    ),
    'digits' => '(?:0x|0X|\\$)[0-9a-fA-F]+|\\d*[\\.\\_]?\\d+(?:[eE][\\-\\+]\\d+)?[lLuUbfdm]*',
    'operators' => '\\(|\\)|\\[|\\]|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\@|\\.|\\^',
    'ignore_case' => true,
);
