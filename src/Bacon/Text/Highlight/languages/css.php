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
    'description' => 'CSS',
    'keywords' => array(
        array(
            'id' => 1,
            'regex' => '([\\w-]+)\\s*\\:',
        ),
        array(
            'id' => 2,
            'list' => array(
                'a', 'abbr', 'acronym', 'address', 'applet', 'area', 'b',
                'base', 'basefont', 'bdo', 'big', 'blockquote', 'body', 'br',
                'button', 'caption', 'center', 'cite', 'code', 'col',
                'colgroup', 'dd', 'del', 'dfn', 'dir', 'div', 'dl', 'dt', 'em',
                'fieldset', 'font', 'form', 'frame', 'frameset', 'h1', 'h2',
                'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html', 'i', 'iframe',
                'img', 'input', 'ins', 'isindex', 'kbd', 'label', 'legend',
                'li', 'link', 'map', 'menu', 'meta', 'noframes', 'noscript',
                'object', 'ol', 'optgroup', 'option', 'p', 'param', 'pre', 'q',
                's', 'samp', 'script', 'select', 'small', 'span', 'strike',
                'strong', 'style', 'sub', 'sup', 'table', 'tbody', 'td',
                'textarea', 'tfoot', 'th', 'thead', 'title', 'tr', 'tt', 'u',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '^\\s*(\\..+?)\\s*\\{',
        ),
        array(
            'id' => 4,
            'regex' => '^\\s*(#[\\w-]+)',
        ),
    ),
    'comments' => array(
        array(
            'block' => true,
            'nested' => true,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'digits' => '\\#\\p{XDigit}{3,6}|\\d*\\.?\\d+?\\w*',
    'identifiers' => '[a-zA-Z_][\\w\\-]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\.',
    'ignore_case' => true,
);
