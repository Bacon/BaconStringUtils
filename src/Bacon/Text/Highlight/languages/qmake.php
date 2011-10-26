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
    'description' => 'QMake Project',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'basename', 'contains', 'count', '', 'dirname', 'error', 'eval',
                'exists', 'find', 'for', 'include', 'infile', '', 'isEmpty',
                'join', 'member', 'message', 'prompt', 'quote', 'sprintf',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '([A-Z_]+)\\W',
        ),
        array(
            'id' => 3,
            'regex' => '\\s*([\\w\\+\\-]+)\\:?\\w*\\s*\\{',
        ),
        array(
            'id' => 4,
            'regex' => '\\$?\\$\\w+|\\$\\$',
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
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\:|\\&|\\!|\\=|\\*|\\%|\\+|\\~|\\\\',
    'ignore_case' => false,
);
