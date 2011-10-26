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
    'description' => 'Eiffel',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'agent', 'alias', 'all', 'and', 'as', 'assign', 'check',
                'class', 'convert', 'create', 'current', 'debug', 'deferred',
                'do', 'else', 'elseif', 'end', 'ensure', 'expanded', 'export',
                'external', 'false', 'feature', 'from', 'frozen', 'if',
                'implies', 'indexing', 'infix', 'inherit', 'inspect',
                'invariant', 'is', 'like', 'local', 'loop', 'not', 'obsolete',
                'old', 'once', 'or', 'prefix', 'precursor', 'pure', 'redefine',
                'reference', 'rename', 'require', 'rescue', 'result', 'retry',
                'separate', 'then', 'true', 'tuple', 'undefine', 'creation',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'integer', 'real', 'double', 'character', '', 'boolean',
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
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
        'escape' => '%\\d{3}|\\\\x\\p{XDigit}{2}|%[nNtvbrfa%\\?\'\"]|%$',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\-|\\+|\\=|\\/|\\*|\\+|\\-|\\.',
    'ignore_case' => true,
);
