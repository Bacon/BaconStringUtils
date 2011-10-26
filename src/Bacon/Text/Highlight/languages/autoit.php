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
    'description' => 'AutoIt',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'continueloop', 'dim', 'global', 'local', 'const', 'do',
                'until', 'exit', 'exitloop', 'for', 'next', 'func', 'return',
                'endfunc', 'if', 'then', 'elseif', 'else', 'endif', 'redim',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'abs', 'acos', 'adlibdisable', 'adlibenable', 'asc', 'asin',
                'assign', 'atan', 'autoitsetoption', 'autoitwingettitle',
                'autoitwinsettitle', 'bitand', 'bitnot', 'bitor', 'bitshift',
                'bitxor', 'blockinput', 'break', 'call', 'cdtray', 'chr',
                'clipget', 'clipput', 'consolewrite', 'controlclick',
                'controlcommand', 'controldisable', 'controlenable',
                'controlfocus', 'controlgetfocus', 'controlgethandle',
                'controlgetpos', 'controlgettext', 'controlhide',
                'controllistview', 'controlmove', 'controlsend',
                'controlsettext', 'controlshow', 'cos', 'dec', 'dircopy',
                'dircreate', 'dirgetsize', 'dirmove', 'dirremove', 'dllcall',
                'dllclose', 'dllopen', 'drivegetdrive', 'drivegetfilesystem',
                'drivegetlabel', 'drivegetserial', 'drivegettype',
                'drivemapadd', 'drivemapdel', 'drivemapget', 'drivesetlabel',
                'drivespacefree', 'drivespacetotal', 'drivestatus', 'envget',
                'envset', 'envupdate', 'eval', 'exp', 'filechangedir',
                'fileclose', 'filecopy', 'filecreateshortcut', 'filedelete',
                'fileexists', 'filefindfirstfile', 'filefindnextfile',
                'filegetattrib', 'filegetlongname', 'filegetshortcut',
                'filegetshortname', 'filegetsize', 'filegettime',
                'filegetversion', 'fileinstall', 'filemove', 'fileopen',
                'fileopendialog', 'fileread', 'filereadline', 'filerecycle',
                'filerecycleempty', 'filesavedialog', 'fileselectfolder',
                'filesetattrib', 'filesettime', 'filewrite', 'filewriteline',
                'ftpsetproxy', 'guicreate', 'guictrlcreateavi',
                'guictrlcreatebutton', 'guictrlcreatecheckbox',
                'guictrlcreatecombo', 'guictrlcreatecontextmenu',
                'guictrlcreatedate', 'guictrlcreatedummy', 'guictrlcreateedit',
                'guictrlcreategroup', 'guictrlcreateicon', 'guictrlcreateinput',
                'guictrlcreatelabel', 'guictrlcreatelist',
                'guictrlcreatelistview', 'guictrlcreatelistviewitem',
                'guictrlcreatemenu', 'guictrlcreatemenuitem',
                'guictrlcreatepic', 'guictrlcreateprogress',
                'guictrlcreateradio', 'guictrlcreateslider', 'guictrlcreatetab',
                'guictrlcreatetabitem', 'guictrlcreatetreeview',
                'guictrlcreatetreeviewitem', 'guictrlcreateupdown',
                'guictrldelete', 'guictrlgetstate', 'guictrlread',
                'guictrlrecvmsg', 'guictrlsendmsg', 'guictrlsendtodummy',
                'guictrlsetbkcolor', 'guictrlsetcolor', 'guictrlsetcursor',
                'guictrlsetdata', 'guictrlsetfont', 'guictrlsetimage',
                'guictrlsetlimit', 'guictrlsetonevent', 'guictrlsetpos',
                'guictrlsetresizing', 'guictrlsetstate', 'guictrlsetstyle',
                'guictrlsettip', 'guidelete', 'guigetcursorinfo', 'guigetmsg',
                'guisetbkcolor', 'guisetcoord', 'guisetcursor', 'guisetfont',
                'guisethelp', 'guiseticon', 'guisetonevent', 'guisetstate',
                'guistartgroup', 'guiswitch', 'hex', 'hotkeyset',
                'httpsetproxy', 'inetget', 'inetgetsize', 'inidelete',
                'iniread', 'inireadsection', 'inireadsectionnames', 'iniwrite',
                'inputbox', 'int', 'isadmin', 'isarray', 'isdeclared',
                'isfloat', 'isint', 'isnumber', 'isstring', 'log',
                'memgetstats', 'mod', 'mouseclick', 'mouseclickdrag',
                'mousedown', 'mousegetcursor', 'mousegetpos', 'mousemove',
                'mouseup', 'mousewheel', 'msgbox', 'number', 'ping',
                'pixelchecksum', 'pixelgetcolor', 'pixelsearch', 'processclose',
                'processexists', 'processlist', 'processsetpriority',
                'processwait', 'processwaitclose', 'progressoff', 'progresson',
                'progressset', 'random', 'regdelete', 'regenumkey',
                'regenumval', 'regread', 'regwrite', 'round', 'run', 'runasset',
                'runwait', 'send', 'seterror', 'setextended', 'shutdown', 'sin',
                'sleep', 'soundplay', 'soundsetwavevolume', 'splashimageon',
                'splashoff', 'splashtexton', 'sqrt', 'statusbargettext',
                'string', 'stringaddcr', 'stringformat', 'stringinstr',
                'stringisalnum', 'stringisalpha', 'stringisascii',
                'stringisdigit', 'stringisfloat', 'stringisint',
                'stringislower', 'stringisspace', 'stringisupper',
                'stringisxdigit', 'stringleft', 'stringlen', 'stringlower',
                'stringmid', 'stringreplace', 'stringright', 'stringsplit',
                'stringstripcr', 'stringstripws', 'stringtrimleft',
                'stringtrimright', 'stringupper', 'tan', 'timerdiff',
                'timerinit', 'tooltip', 'traytip', 'ubound', 'winactivate',
                'winactive', 'winclose', 'winexists', 'wingetcaretpos',
                'wingetclasslist', 'wingetclientsize', 'wingethandle',
                'wingetpos', 'wingetprocess', 'wingetstate', 'wingettext',
                'wingettitle', 'winkill', 'winlist', 'winmenuselectitem',
                'winminimizeall', 'winminimizeallundo', 'winmove',
                'winsetontop', 'winsetstate', 'winsettitle', 'winsettrans',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '[@$]\\w+',
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
                'open' => ';',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\#comments-start',
                'close' => '\\#comments-end',
            ),
        ),
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\#cs',
                'close' => '\\#ce',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'pre_processor' => array(
        'prefix' => '#(?!cs|ce|comments\\-start|comments\\-end).*$',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'ignore_case' => true,
);
