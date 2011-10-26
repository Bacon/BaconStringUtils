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
    'description' => 'IO',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'activate', 'activeCoroCount', 'and', 'block', 'break', 'catch',
                'chedulerSleepSeconds', 'clone', 'collectGarbage',
                'compileString', 'continue', 'do', 'doFile', 'doMessage',
                'doString', 'else', 'elseif', 'exit', 'for', 'foreach',
                'forward', 'getSlot', 'getenv', 'hasSlot', 'if', 'ifFalse',
                'ifNil', 'ifTrue', 'isActive', 'isNil', 'list', 'message',
                'method', 'or', 'parent', 'pass', 'pause', 'perform',
                'performWithArgList', 'print', 'proto', 'raise', 'removeSlot',
                'resend', 'resume', 'return', 'self', 'sender',
                'setSchedulerSleepSeconds', 'setSlot', 'shallowCopy',
                'slotNames', 'super', 'system', 'then', 'thisBlock',
                'thisContext', 'thisMessage', 'try', 'type', 'uniqueId',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'Array', 'AudioDevice', 'AudioMixer', 'Block', 'Box', 'Buffer',
                'CFunction', 'CGI', 'Color', 'Curses', 'DBM', 'DNSResolver',
                'DOConnection', 'DOProxy', 'DOServer', 'Date', 'Directory',
                'Duration', 'DynLib', 'Error', 'Exception', 'FFT', 'File',
                'Fnmatch', 'Font', 'Future', 'GL', 'GLE', 'GLScissor', 'GLU',
                'GLUCylinder', 'GLUQuadric', 'GLUSphere', 'GLUT', 'Host',
                'Image', 'Importer', 'LinkList', 'List', 'Lobby', 'Locals',
                'MD5', 'MP3Decoder', 'MP3Encoder', 'Map', 'Message', 'Movie',
                'NULL', 'Nil', 'Nop', 'Notification', 'Number', 'Object',
                'OpenGL', 'Point', 'Protos', 'Regex', 'SGMLTag', 'SQLite',
                'Server', 'ShowMessage', 'SleepyCat', 'SleepyCatCursor',
                'Socket', 'SocketManager', 'Sound', 'Soup', 'Store', 'String',
                'Tree', 'UDPSender', 'UPDReceiver', 'URL', 'User', 'Warning',
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
                'open' => '#\\|\\/\\/',
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
        'delimiter' => '\"\"\"|\'\'\'|\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\^|\\@|\\.',
    'ignore_case' => false,
);
