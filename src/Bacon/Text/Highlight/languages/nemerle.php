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
    'description' => 'Nemerle',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                '_', 'abstract', 'and', 'array', 'as', 'base', 'catch', 'class',
                'def', 'delegate', 'do', 'else', 'enum', 'event', 'extern',
                'finally', 'for', 'foreach', 'fun', 'if', 'implements', 'in',
                'interface', 'internal', 'lock', 'macro', 'match', 'module',
                'mutable', 'namespace', 'new', 'out', 'override', 'params',
                'private', 'protected', 'public', 'ref', 'sealed', 'static',
                'struct', 'syntax', 'this', 'throw', 'try', 'type', 'typeof',
                'unless', 'using', 'variant', 'virtual', 'void', 'when',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'array', 'float', 'int', 'string', 'void', 'uint', 'long',
                'ulong', 'short', 'decimal', 'byte', 'sbyte', 'ushort',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
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
        'raw_prefix' => '@',
    ),
    'pre_processor' => array(
        'prefix' => '#',
    ),
    'digits' => '(?:0x|0X)[0-9a-fA-F]+|\\d*[\\.\\_]?\\d+(?:[eE][\\-\\+]\\d+)?[lLuUbfdm]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\.|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
