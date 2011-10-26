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
    'description' => 'ALGOL 68',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'mode', 'op', 'prio', 'proc', 'flex', 'heap', 'loc', 'long',
                'ref', 'short', 'bits', 'bool', 'bytes', 'char', 'compl', 'int',
                'real', 'sema', 'string', 'void', 'channel', 'file', 'format',
                'struct', 'union', 'of', 'at', 'is', 'isnt', 'true', 'false',
                'empty', 'nil', 'skip', 'co', 'comment', 'pr', 'pragmat',
                'case', 'in', 'ouse', 'in', 'out', 'esac', 'for', 'from', 'to',
                'by', 'while', 'do', 'od', 'if', 'then', 'elif', 'then', 'else',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\w+)\\s*\\(',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~|\\|',
    'ignore_case' => false,
);
