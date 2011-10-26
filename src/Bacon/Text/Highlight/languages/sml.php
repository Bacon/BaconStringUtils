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
    'description' => 'Standard ML',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstraction', 'abstype', 'and', 'andalso', 'as', 'before',
                'case', 'datatype', 'else', 'end', 'eqtype', 'exception', 'do',
                'fn', 'fun', 'functor', 'handle', 'if', 'in', 'include',
                'infix', 'infixr', 'let', 'local', 'nonfix', 'of', 'op', 'open',
                'orelse', 'overload', 'raise', 'rec', 'sharing', 'sig',
                'signature', 'struct', 'structure', 'then', 'type', 'val',
                'where', 'while', 'with', 'withtype', 'o', 'true', 'false', '',
                'Bool', 'String', 'Int', 'Real', 'Word', 'Char', 'StringCvt',
                'Word8', 'List', 'ListPair', 'Vector', 'TextIO', 'BinIO', 'div',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\w+)\\s*\\(',
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\\'|\\.',
    'ignore_case' => false,
);
