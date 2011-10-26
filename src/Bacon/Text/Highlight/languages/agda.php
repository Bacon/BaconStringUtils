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
    'description' => 'Agda',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstract', 'case', 'concrete', 'data', 'do', 'in', 'interface',
                'let', 'module', 'mutual', 'of', 'open', 'native', 'package',
                'postulate', 'private', 'public', 'sig', 'struct', 'type',
                'use', 'set', 'type', 'abstract', 'data', 'forall', 'hiding',
                'import', 'in', 'infix', 'infixl', 'infixr', 'let', 'module',
                'mutual', 'open', 'postulate', 'primitive', 'private', 'public',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '--',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\{\\-',
                'close' => '\\-\\}',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\\\|\\*|\\%|\\+|\\-|\\\'',
    'ignore_case' => true,
);
