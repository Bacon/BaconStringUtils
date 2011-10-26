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
    'description' => 'ClearBasic',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'and', 'as', 'byref', 'byval', 'case', 'declare', 'dim', 'else',
                'elseif', 'end', 'for', 'function', 'global', 'if', 'me', 'not',
                'new', 'next', 'or', 'select', 'set', 'step', 'sub', 'then',
                'to', 'type', 'while', 'aix', 'dodefault', 'false', 'hpux',
                'irix', 'linux', 'mac68k', 'macppc', 'macintosh', 'netware',
                'nothing', 'null', 'os2', 'osf1', 'pi', 'sco', 'solaris',
                'sunos', 'true', 'unix', 'ultrix', 'unixware', 'vms', 'win16',
                'win32', 'cbabortretryignore', 'cbascending', 'cbbyref',
                'cbbyvalue', 'cbclosechildren', 'cbclosemessage',
                'cbdefclosedwindow', 'cbdefclosedwindow', 'cbdescending',
                'cbequal', 'cbfirstmessage', 'cbfrontifup', 'cbgreater',
                'cbgreaterorequal', 'cbidabort', 'cbidcancel', 'cbiddiscard',
                'cbidignore', 'cbidno', 'cbidok', 'cbidretry', 'cbidsave',
                'cbidyes', 'cbin', 'cbless', 'cblessorequal', 'cblike',
                'cbnodefault', 'cbnotequal', 'cbnotlike', 'cbok', 'cbokcancel',
                'cbrefreshmessage', 'cbretrycancel', 'cbsavediscardcancel',
                'cbsoundslike', 'cbyesno', 'cbyesnocancel', 'ebaix', 'ebabort',
                'ebabortretryignore', 'ebapplicationmodal', 'ebarchive',
                'ebarray', 'ebback', 'ebbold', 'ebbolditalic', 'ebboolean',
                'ebcfbitmap', 'ebcfdib', 'ebcfmetafile', 'ebcfpalette',
                'ebcftext', 'ebcfunicode', 'ebcancel', 'ebcr', 'ebcrlf',
                'ebcritical', 'ebcurrency', 'ebdos', 'ebdataobject', 'ebdate',
                'ebdefaultbutton1', 'ebdefaultbutton2', 'ebdefaultbutton3',
                'ebdirectory', 'ebdouble', 'ebempty', 'eberror',
                'ebexclamation', 'ebfirstfourdays', 'ebfirstfullweek',
                'ebfirstjan1', 'ebformfeed', 'ebfriday', 'ebfromunicode',
                'ebhpux', 'ebhidden', 'ebhide', 'ebhiragana', 'ebimealphadbl',
                'ebimealphasng', 'ebimedisabled', 'ebimehiragana',
                'ebimekatakanadbl', 'ebimekatakanasng', 'ebimenoop', 'ebimeoff',
                'ebimeon', 'ebignore', 'ebinformation', 'ebinteger', 'ebirix',
                'ebitalic', 'ebkatakana', 'eblinux', 'eblandscape',
                'ebleftbutton', 'eblf', 'eblong', 'eblowercase', 'ebmacintosh',
                'ebmaximized', 'ebmaximizedfocus', 'ebminimized',
                'ebminimizedfocus', 'ebminimizednofocus', 'ebmonday',
                'ebnarrow', 'ebnetware', 'ebno', 'ebnone', 'ebnormal',
                'ebnormalfocus', 'ebnormalnofocus', 'ebnull', 'ebnullchar',
                'ebnullstring', 'ebok', 'ebokcancel', 'ebokonly', 'ebos2',
                'ebosf1', 'ebobject', 'ebportrait', 'ebpropercase',
                'ebquestion', 'ebreadonly', 'ebregular', 'ebrestored',
                'ebretry', 'ebretrycancel', 'ebrightbutton', 'ebsco',
                'ebsaturday', 'ebsingle', 'ebsolaris', 'ebstring', 'ebsunos',
                'ebsunday', 'ebsystem', 'ebsystemmodal', 'ebtab', 'ebthursday',
                'ebtuesday', 'ebultrix', 'ebunicode', 'ebunixware',
                'ebuppercase', 'ebvms', 'ebvariant', 'ebverticaltab',
                'ebvolume', 'ebwednesday', 'ebwide', 'ebwin16', 'ebwin32',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'app', 'appmenu', 'basic', 'bool', 'boolean', 'bulkretrieve',
                'bulksave', 'clarifydb', 'clipboard', 'commondialog',
                'contextualobject', 'control', 'dde', 'debug', 'err', 'form',
                'integer', 'list', 'long', 'msg', 'net', 'powerquery',
                'printer', 'record', 'sqldb', 'screen', 'servicemessage',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\'',
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
    'ignore_case' => true,
);
