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
    'description' => 'Clojure',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'def', 'defn', 'defmacro', 'fn', 'defstruct', 'defmulti',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'case', 'caselet', 'check', 'if', 'let', 'when', 'whenlet',
            ),
        ),
        array(
            'id' => 4,
            'list' => array(
                'first', 'rest', 'cons', 'ffirst', 'frest', 'rrest', 'second',
                'every?', 'not-every?', 'some', 'not-any?', 'concat', 'map',
                'mapcat', 'reducefilter', 'take', 'take-nth', 'take-while',
                'drop', 'nthrest', 'drop-while', 'reverse', 'cycle',
                'interleave', 'split-at', 'split-with', 'repeat', 'replicate',
                'iterate', 'range', 'into', 'distinct', 'sort', 'sort-by',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => ';',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\;\\|',
                'close' => '\\|\\;',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\:|\\&|\\<|\\>|\\!|\\+|\\=|\\/|\\*|\\\'',
);
