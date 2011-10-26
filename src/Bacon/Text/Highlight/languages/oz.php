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
    'description' => 'Oz',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'andthen', 'at', 'attr', 'case', 'catch', 'choice', 'class',
                'cond', 'declare', 'define', 'dis', 'div', 'else', 'elsecase',
                'elseif', 'end', 'export', 'fail', 'false', 'feat', 'finally',
                'from', 'fun', 'functor', 'if', 'import', 'in', 'local', 'lock',
                'meth', 'mod', 'not', 'of', 'or', 'orelse', 'prepare', 'proc',
                'prop', 'raise', 'require', 'self', 'skip', 'then', 'thread',
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
                'open' => '%',
            ),
        ),
        array(
            'block' => true,
            'nested' => true,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\#|\\@',
    'ignore_case' => false,
);
