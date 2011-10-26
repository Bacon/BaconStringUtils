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
    'description' => 'NetRexx',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'class', 'private', 'public', 'abstract', 'final', 'interface',
                'dependent', 'adapter', 'deprecated', 'extends', 'uses',
                'implements', 'method', 'native', 'returns', 'signals',
                'properties', 'private', 'public', 'inheritable', 'constant',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'do', 'label', 'protect', 'catch', 'finally', 'end', 'signal',
                'if', 'then', 'else', 'select', 'case', 'when', 'otherwise',
                'loop', 'forever', 'for', 'to', 'by', 'over', 'until', 'while',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'ask', 'digits', 'form', 'null', 'source', 'this', 'super',
                'parent', 'sourceline', 'version', 'trace', 'var', 'all',
                'results', 'off', 'methods', 'package', 'import', 'numeric',
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
                'open' => '\\-\\-',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'ignore_case' => false,
);
