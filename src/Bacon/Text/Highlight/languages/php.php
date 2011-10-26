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
    'description' => 'PHP',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abstract', 'and', 'array', 'as', 'break', 'case', 'catch',
                'cfunction', 'class', 'clone', 'const', 'continue', 'declare',
                'default', 'do', 'else', 'elseif', 'enddeclare', 'endfor',
                'endforeach', 'endif', 'endswitch', 'endwhile', 'extends',
                'final', 'for', 'foreach', 'function', 'global', 'goto', 'if',
                'implements', 'interface', 'instanceof', 'namespace', 'new',
                'old_function', 'or', 'private', 'protected', 'public',
                'static', 'switch', 'throw', 'try', 'use', 'var', 'while',
                'xor', '__CLASS__', '__DIR__', '__FILE__', '__FUNCTION__',
                '__METHOD__', '__NAMESPACE__', 'die', 'echo', 'empty', 'exit',
                'eval', 'include', 'include_once', 'isset', 'list', 'require',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'int', 'integer', 'real', 'double', 'float', 'string', 'array',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '\\$\\w+',
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
                'open' => '\\/\\/|\\#',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\/\\*',
                'close' => '\\*\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\|\\+|\\-|\\.|\\@',
    'ignore_case' => true,
);
