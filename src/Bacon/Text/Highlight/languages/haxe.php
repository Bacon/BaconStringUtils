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
    'description' => 'haXe',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'function', 'class', 'static', 'var', 'if', 'else', 'while',
                'do', 'for', 'break', 'return', 'continue', 'extends',
                'implements', 'import', 'switch', 'case', 'default', 'private',
                'public', 'try', 'catch', 'new', 'this', 'throw', 'extern',
                'enum', 'in', 'interface', 'untyped', 'cast', 'override',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'Void', 'Float', 'Int', '', 'Bool', 'Dynamic', 'true', 'false',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '~\\/.*?\\/[igms]*',
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
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'digits' => '(?:0x|0X)[0-9a-fA-F]+|\\d*[\\.\\_]?\\d+(?:[eE][\\-\\+]?\\d+)?[lLuUbfdm]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'ignore_case' => false,
);
