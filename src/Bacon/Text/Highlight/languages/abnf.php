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
    'description' => 'Advanced Backus-Naur Form',
    'keywords' => array(
        array(
            'id' => 1,
            'regex' => '^\\s*([^=]+)\\s*=',
        ),
        array(
            'id' => 2,
            'regex' => '[?][^?]+[?]',
        ),
        array(
            'id' => 3,
            'regex' => '[a-zA-Z][-a-zA-Z0-9]*',
        ),
        array(
            'id' => 4,
            'list' => array(
                'ALPHA', 'DIGIT', 'HEXDIG', 'DQUOTE', 'SP', 'HTAB', 'WSP',
                'LWSP', 'VCHAR', 'CHAR', 'OCTET', 'CTL', 'CR', 'LF', 'CRLF',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\;|\\-|\\*|\\/|\\=',
    'ignore_case' => false,
);
