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
    'description' => 'AutoHotKey',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'autotrim', 'blockinput', 'break', 'click', 'clipwait',
                'continue', 'control', 'controlclick', 'controlfocus',
                'controlget', 'controlgetfocus', 'controlgetpos',
                'controlgettext', 'controlmove', 'controlsend',
                'controlsettext', 'coordmode', 'critical', 'detecthiddentext',
                'detecthiddenwindows', 'dllcall', 'drive', 'driveget',
                'drivespacefree', 'edit', 'else', 'envadd', 'envdiv', 'envget',
                'envmult', 'envset', 'envsub', 'envupdate', 'exit', 'exitapp',
                'fileappend', 'filecopy', 'filecopydir', 'filecreatedir',
                'filecreateshortcut', 'filedelete', 'fileinstall',
                'filegetattrib', 'filegetshortcut', 'filegetsize',
                'filegettime', 'filegetversion', 'filemove', 'filemovedir',
                'fileread', 'filereadline', 'filerecycle', 'filerecycleempty',
                'fileremovedir', 'fileselectfile', 'fileselectfolder',
                'displays', 'filesetattrib', 'filesettime', 'formattime',
                'getkeystate', 'gosub', 'goto', 'groupactivate', 'groupadd',
                'groupclose', 'groupdeactivate', 'gui', 'guicontrol',
                'guicontrolget', 'hideautoitwin,', 'hotkey', 'if',
                'ifequal/ifnotequal', 'ifexist', 'ifgreater',
                'ifgreaterorequal', 'ifinstring', 'ifless/iflessorequal',
                'ifmsgbox', 'ifwinactive', 'ifwinexist', 'imagesearch',
                'inidelete', 'iniread', 'iniwrite', 'input', 'inputbox',
                'keyhistory', 'keywait', 'leftclick', 'leftclickdrag',
                'listhotkeys', 'listlines', 'listvars', 'loop', 'loop', 'loop',
                'loop', 'loop', 'menu', 'mouseclick', 'mouseclickdrag',
                'mousegetpos', 'mousemove', 'msgbox', 'onexit', 'onmessage',
                'outputdebug', 'pause', 'pixelgetcolor', 'pixelsearch',
                'postmessage', 'process', 'progress', 'random', 'regexmatch',
                'regexreplace', 'regdelete', 'regread', 'regwrite',
                'registercallback', 'reload', 'repeat', 'endrepeat', 'return',
                'rightclick', 'rightclickdrag', 'run', 'runas', 'runwait',
                'send', 'sendmessage', 'sendmode', 'setbatchlines',
                'setcapslockstate', 'setcontroldelay', 'setdefaultmousespeed',
                'setenv', 'setformat', 'setkeydelay', 'setmousedelay',
                'setnumlockstate', 'setscrolllockstate', 'setstorecapslockmode',
                'settimer', 'settitlematchmode', 'setwindelay', 'setworkingdir',
                'shutdown', 'sleep', 'sort', 'soundbeep', 'soundget',
                'soundgetwavevolume', 'soundplay', 'soundset',
                'soundsetwavevolume', 'splashimage', 'splashtexton',
                'splashtextoff', 'splitpath', 'statusbargettext',
                'statusbarwait', 'stringcasesense', 'stringgetpos',
                'stringleft', 'stringlen', 'stringlower', 'stringmid',
                'stringreplace', 'stringright', 'stringsplit', 'stringtrimleft',
                'stringtrimright', 'stringupper', 'suspend', 'sysget', 'thread',
                'tooltip', 'transform', 'traytip', 'urldownloadtofile', 'var',
                'var', 'varsetcapacity', 'while-loop', 'winactivate',
                'winactivatebottom', 'winclose', 'wingetactivestats',
                'wingetactivetitle', 'wingetclass', 'winget', 'wingetpos',
                'wingettext', 'wingettitle', 'winhide', 'winkill',
                'winmaximize', 'winmenuselectitem', 'winminimize',
                'winminimizeall', 'winminimizeallundo', 'winmove', 'winrestore',
                'winset', 'winsettitle', 'winshow', 'winwait', 'winwaitactive',
            ),
        ),
        array(
            'id' => 1,
            'regex' => '\\#\\w+(?!\\:\\:)',
        ),
        array(
            'id' => 2,
            'regex' => '[\\#\\!\\^\\+\\&\\<\\>\\*\\~\\$]*[\\w\\&\\s]+?\\:\\:',
        ),
        array(
            'id' => 3,
            'regex' => '%\\w+?%',
        ),
        array(
            'id' => 4,
            'regex' => '\\:.+?\\:\\:',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => ';',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\\\|\\`',
    'ignore_case' => true,
);
