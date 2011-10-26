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
    'description' => 'INI',
    'keywords' => array(
        array(
            'id' => 1,
            'regex' => '^\\s*(\\[.*\\])',
        ),
        array(
            'id' => 2,
            'regex' => '^\\s*([^=]+)\\s*=',
        ),
        array(
            'id' => 3,
            'regex' => '^\\s*[^=]+\\s*=\\s*(\\S.*)',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '^\\s*([;#].*)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\{|\\}|\\,|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
);
