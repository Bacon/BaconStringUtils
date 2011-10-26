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
    'description' => '(G)AWK',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'begin', 'break', 'close', 'continue', 'delete', 'do', 'else',
                'end', 'exit', 'for', 'getline', 'gsub', 'if', 'index',
                'length', 'match', 'next', 'print', 'printf', 'return', 'split',
                'sprintf', 'sub', 'substr', 'system', 'tolower', 'toupper',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'argc', 'argind', 'argv', 'convfmt', 'environ', 'errno',
                'fieldwidths', 'filename', 'fnr', 'fs', 'ignorecase', 'nf',
                'nr', 'ofmt', 'ofs', 'ors', 'rlength', 'rs', 'rstart', 'rt',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '#',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
        'escape' => '[\\\\%]\\d{3}|[\\\\%]x\\d{2}|[\\\\%][ntvbrfa\\\\\\?\'\"%]',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!\\=|\\/|\\*\\|\\+|\\-',
    'ignore_case' => true,
);
