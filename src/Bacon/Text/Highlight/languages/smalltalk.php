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
    'description' => 'Smalltalk',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
            ),
        ),
        array(
            'id' => 2,
            'regex' => '\\b[a-z]\\w*:(?!=)|(?<= )(?<!  )(?<!\\[ )(?<!\\| )(?<!= )(?<!. )(?<!: )(?<!\\* )(?<!- )(?<!\\+ )(?<!/ )[a-z]\\w*\\b|[\\-+/*=]|==|[<>]=|^\\s*[a-z]\\w+\\s*$',
        ),
        array(
            'id' => 3,
            'regex' => '\\b[A-Z]\\w*\\b',
        ),
        array(
            'id' => 4,
            'regex' => '#[a-zA-Z0-9_:]+|#[\\-+/*]|(?<= ):\\w*\\b|(?<=\\[):\\w*\\b|\\| *\\w+(?: +\\w+)* *\\|',
        ),
    ),
    'comments' => array(
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\"',
                'close' => '\"',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\'',
    ),
    'digits' => '(?:0x|0X)[0-9a-fA-F]+|\\d*[\\.]?\\d+(?:[eE][\\-\\+]\\\\d+)?[lLuU]?|\\$[\\w\\$\\#\\\'\\\"\\-]',
    'operators' => '\\:|\\=|\\.|\\;|\\(|\\)|\\[|\\]|\\^|\\#|\\!|\\$|\\%|\\{|\\}',
    'enable_indentation' => false,
    'ignore_case' => false,
);
