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
    'description' => 'Java FX',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstract', 'after', 'and', 'as', 'assert', 'at', 'attribute',
                'before', 'bind', 'bound', 'break', 'catch', 'class',
                'continue', 'def', 'delete', 'else', 'exclusive', 'extends',
                'false', 'finally', 'first', 'for', 'from', 'function', 'if',
                'import', 'indexof', 'in', 'init', 'insert', 'instanceof',
                'into', 'inverse', 'last', 'lazy', 'mixin', 'mod', 'new', 'not',
                'null', 'on', 'or', 'override', 'package', 'postinit',
                'private', 'protected', 'public-init', 'public', 'public-read',
                'replace', 'return', 'reverse', 'sizeof', 'static', 'step',
                'super', 'then', 'this', 'throw', 'trigger', 'true', 'try',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\w+)\\s*\\(',
        ),
    ),
    'comments' => array(
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '//',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\|',
    'ignore_case' => false,
);
