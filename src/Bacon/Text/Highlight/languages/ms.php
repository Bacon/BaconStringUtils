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
    'description' => 'MaxScript',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'about', 'animate', 'as', 'at', 'by', 'case', 'catch',
                'collect', 'continue', 'coordsys', 'default', 'do', 'else',
                'exit', 'fn', 'for', 'function', 'global', 'group', 'if', 'in',
                'level', 'local', 'local', 'mapped', 'max', 'of', 'on',
                'parent', 'persistent', 'pivot', 'return', 'selection', 'set',
                'struct', 'then', 'throw', 'time', 'to', 'try', 'undo', 'where',
                'while', 'with', 'with', 'world', 'true', 'false', 'on', 'off',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'utility', 'rollout', 'label', 'button', 'edittext', 'combobox',
                'dropdownlist', 'listbox', 'spinner', 'slider', 'pickbutton',
                'pushbutton', 'checkbutton', 'macrobutton', 'radiobuttons',
                'checkbox', 'colorpicker', 'mapbutton', 'materialbutton',
                'progressbar', 'timer', 'bitmap', 'rcmenu', 'menuitem',
                'separator', 'submenu', 'macroscript', 'tool', 'plugin',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\-\\-',
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
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
