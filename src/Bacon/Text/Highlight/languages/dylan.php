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
    'description' => 'Dylan',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'interface', 'library', 'macro', 'method', 'class', 'function',
                'cleanup', 'block', 'afterwards', 'end', '', 'constant',
                'variable', 'generic', 'primary', 'begin', 'method', 'above',
                'below', 'from', 'by', 'in', 'instance', 'local', '', 'slot',
                'subclass', 'then', 'to', 'virtual', 'if', 'when', 'select',
                'case', 'else', 'elseif', 'unless', 'finally', 'otherwise', '',
                'then', 'for', 'until', 'while', 'from', 'to', 'define', 'let',
                'otherwise', 'finally', 'exception', 'handler', 'signal',
                'import', 'rename', 'create', 'use', 'export', 'exclude',
                'abstract', 'concrete', 'primary', 'inherited', 'inline',
            ),
        ),
        array(
            'id' => 1,
            'regex' => '<!?\\/?\\w+>?|>',
        ),
        array(
            'id' => 2,
            'regex' => '([-\\w]+)=\"',
        ),
        array(
            'id' => 2,
            'list' => array(
            ),
        ),
        array(
            'id' => 3,
            'regex' => '\\&\\#?\\w+;',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
);
