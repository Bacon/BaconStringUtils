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
    'description' => 'Charmm',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'if', 'then', 'set', 'goto', 'label', 'stream', 'increment',
                'decrement', 'rewind', 'return', 'endif', 'define', 'calc',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'merge', 'merg', 'hqbm', 'update', 'upda', 'tmdinit', 'tmdi',
                'print', 'prin', 'nbonds', 'nbon', 'vibran', 'vibr', 'diag',
                'ic', 'hbuild', 'hbui', 'dynamics', 'dyna', 'shake', 'shak',
                'energy', 'ener', 'mini', 'crystal', 'crys', 'image', 'imag',
                'scalar', 'scal', 'generate', 'gene', 'delete', 'dele',
                'correl', 'corr', 'enter', 'ente', 'trajectory', 'traj',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '^\\s*(close|read|open|write)',
        ),
        array(
            'id' => 4,
            'regex' => '[@|\\?|$]\\w+',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\!',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'|`',
    ),
    'pre_processor' => array(
        'prefix' => '^\\*',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\|',
    'enable_indentation' => false,
    'ignore_case' => true,
);
