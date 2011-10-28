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
    'description' => 'Make',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'addprefix', 'addsuffix', 'basename', 'dir', 'filter',
                'filter-out', 'findstring', 'firstword', 'foreach', 'join',
                'notdir', 'origin', 'patsubst', 'shell', 'sort', 'strip',
                'subst', 'suffix', 'wildcard', 'word', 'words', 'all_cflags',
                'ar', 'arflags', 'as', 'asflags', 'cc', 'cflags', 'co',
                'coflags', 'cpp', 'cppflags', 'ctangle', 'cweave', 'cxx',
                'cxxflags', 'fc', 'fflags', 'force', 'get', 'gflags',
                'install_data', 'install_program', 'ld', 'ldflags', 'lex',
                'lflags', 'makeinfo', 'pc', 'pflags', 'rflags', 'rm', 'tags',
                'tangle', 'tex', 'texi2dvi', 'weave', 'yacc', 'yaccr', 'yflags',
                'all', 'bindir', 'check', 'clean', 'clobber', 'datadir', 'dist',
                'distclean', 'dvi', 'exec_prefix', 'includedir', 'info',
                'infodir', 'install', 'installcheck', 'installdirs', 'libdir',
                'man0dir', 'man0ext', 'man1dir', 'man1ext', 'man2dir',
                'man2ext', 'man3dir', 'man3ext', 'man4dir', 'man4ext',
                'man5dir', 'man5ext', 'man6dir', 'man6ext', 'man7dir',
                'man7ext', 'man8dir', 'man8ext', 'man9dir', 'man9ext', 'mandir',
                'manext', 'mostlyclean', 'oldincludedir', 'prefix', 'print',
                'realclean', 'shar', 'srcdir', 'statedir', 'tar', 'test',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'define', 'else', 'endef', 'endif', 'export', 'ifdef', 'ifeq',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '(\\$\\{(\\w+)\\})',
        ),
        array(
            'id' => 4,
            'regex' => '\\$\\w+',
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
        'delimiter' => '\"|\'|`',
    ),
    'identifiers' => '[a-zA-Z_][\\w\\d\\-]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\$',
    'ignore_case' => false,
);
