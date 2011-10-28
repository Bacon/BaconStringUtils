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
    'description' => 'TeX and LaTeX',
    'keywords' => array(
        array(
            'id' => 1,
            'regex' => '\\\\\\w+',
        ),
        array(
            'id' => 2,
            'list' => array(
                'a4paper', 'report', 'ngerman', 'dvips', '', 'graphicx',
                'latin1', 'inputenc', '', 'T1', 'fontenc', 'color', 'alltt',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '\\#\\d+',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '(?<!\\\\)%.*$',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'nested_sections' => array(
        'language' => 'perl',
        'delimiter' => array(
            'open' => '\\\\perl(?:re)?newcommand\\{\\\\\\w+\\}\\[.*\\]\\{',
            'close' => '\\{',
        ),
        'language' => 'perl',
        'delimiter' => array(
            'open' => '\\\\perl(?:re)?newenvironment\\{\\w+\\}\\[.*\\]\\{',
            'close' => '\\{',
        ),
        'language' => 'inc_luatex',
        'delimiter' => array(
            'open' => '\\\\directlua0?.*?\\{',
            'close' => '(?<!\\{)\\}',
        ),
        'language' => 'r',
        'delimiter' => array(
            'open' => '\\<\\<.*\\>\\>\\=',
            'close' => '@',
        ),
    ),
    'operators' => '\\{|\\}|\\[|\\]',
    'ignore_case' => false,
);
