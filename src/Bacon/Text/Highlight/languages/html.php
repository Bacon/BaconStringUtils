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
    'description' => 'HTML',
    'keywords' => array(
        array(
            'id' => 1,
            'regex' => '<[!?]?(?!\\-\\-)\\/?[\\w\\:\\-]+>?|[/?]?>',
            'group' => 0,
        ),
        array(
            'id' => 2,
            'regex' => '([-\\w]+)=\"',
        ),
        array(
            'id' => 4,
            'regex' => '\\&\\#?\\w+;',
        ),
    ),
    'comments' => array(
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\<\\!\\-\\-',
                'close' => '\\-\\-\\>',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'nested_sections' => array(
        'lang' => 'php',
        'delimiter' => array(
            'open' => '\\<\\?php',
            'close' => '\\?\\>',
        ),
        'lang' => 'jsp',
        'delimiter' => array(
            'open' => '\\<\\%[@!\\=]?',
            'close' => '.*(%>).*',
        ),
        'lang' => 'css',
        'delimiter' => array(
            'open' => '\\<style\\s+type\\=[\\\'\\\"]text\\/css[\\\'\\\"]\\>',
            'close' => '\\<\\/style\\>',
        ),
        'lang' => 'js',
        'delimiter' => array(
            'open' => '\\<script\\s+language\\=\\\"[jJ]ava[sS]cript\\\"(?:\\s+type\\=\\\"text\\/javascript\\\")?\\>',
            'close' => '\\<\\/script\\>',
        ),
        'lang' => 'js',
        'delimiter' => array(
            'open' => '\\<script\\s+language=[\\\"\\\'][jJ]ava[sS]cript[\\\"\\\'](?:\\s+type=[\\\"\\\']text/javascript[\\\"\\\'])?[^>]*\\>',
            'close' => '\\<\\/script\\>',
        ),
        'lang' => 'js',
        'delimiter' => array(
            'open' => '\\<script(?:\\s+type=[\\\"\\\']text/javascript[\\\"\\\'])\\s+language=[\\\"\\\'][jJ]ava[sS]cript[\\\"\\\']?[^>]*\\>',
            'close' => '\\<\\/script\\>',
        ),
    ),
    'ignore_case' => true,
);
