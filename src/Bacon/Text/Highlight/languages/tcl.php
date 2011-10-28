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
    'description' => 'Tcl/Tk',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'Safe', 'Base', 'encoding', 'if', 'pid', 'switch', 'Tcl', 'eof',
                'incr', 'pkg::create', 'tcl_endOfWord', 'after', 'error',
                'info', 'pkg_mkIndex', 'tcl_findLibrary', 'append', 'eval',
                'interp', 'proc', 'tcl_startOfNextWord', 'array', 'exec',
                'join', 'puts', 'tcl_startOfPreviousWord', 'auto_execok',
                'exit', 'lappend', 'pwd', 'tcl_wordBreakAfter', 'auto_import',
                'expr', 'lindex', 're_syntax', 'tcl_wordBreakBefore',
                'auto_load', 'fblocked', 'linsert', 'read', 'tcltest',
                'auto_mkindex', 'fconfigure', 'list', 'regexp', 'tclvars',
                'auto_mkindex_old', 'fcopy', 'llength', 'registry', 'tell',
                'auto_qualify', 'file', 'load', 'regsub', 'time', 'auto_reset',
                'fileevent', 'lrange', 'rename', 'trace', 'bgerror', 'filename',
                'lreplace', 'resource', 'unknown', 'binary', 'flush', 'lsearch',
                'return', 'unset', 'break', 'for', 'lset', 'scan', 'update',
                'catch', 'foreach', 'lsort', 'seek', 'uplevel', 'cd', 'format',
                'memory', 'set', 'upvar', 'clock', 'gets', 'msgcat', 'socket',
                'variable', 'close', 'glob', 'namespace', 'source', 'vwait',
                'concat', 'global', 'open', 'split', 'while', 'continue',
                'history', 'package', 'string', 'dde', 'http', 'parray',
                'subst', 'bell', 'entry', 'loadTk', 'raise',
                'tk_focusFollowsMouse', 'tk_textPaste', 'bind', 'event',
                'lower', 'scale', 'tk_focusNext', 'tkerror', 'bindtags',
                'focus', 'menu', 'scrollbar', 'tk_focusPrev', 'tkvars',
                'bitmap', 'font', 'menubutton', 'selection', 'tk_getOpenFile',
                'tkwait', 'button', 'frame', 'message', 'send',
                'tk_getSaveFile', 'toplevel', 'canvas', 'grab', 'option',
                'spinbox', 'tk_menuSetFocus', 'winfo', 'checkbutton', 'grid',
                'options', 'text', 'tk_messageBox', 'wm', 'clipboard', 'image',
                'pack', 'tk', 'tk_optionMenu', 'colors', 'keysyms',
                'panedwindow', 'tk_bisque', 'tk_popup', 'console', 'label',
                'photo', 'tk_chooseColor', 'tk_setPalette', 'cursors',
                'labelframe', 'place', 'tk_chooseDirectory', 'tk_textCopy',
                'destroy', 'listbox', 'radiobutton', 'tk_dialog', 'tk_textCut',
            ),
        ),
        array(
            'id' => 2,
            'regex' => '\\$\\w*',
        ),
        array(
            'id' => 3,
            'regex' => '\\W(-\\w+)',
        ),
        array(
            'id' => 4,
            'regex' => '::(\\w+)',
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
    'identifiers' => '[a-zA-Z_][\\w\\-]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\\\|\\@',
    'ignore_case' => false,
);
