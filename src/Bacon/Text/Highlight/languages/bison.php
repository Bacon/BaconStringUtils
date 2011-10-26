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
    'description' => 'Bison',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'error', 'YYABORT', 'YYACCEPT', 'YYBACKUP', 'YYERROR',
                'YYERROR_VERBOSE', 'YYINITDEPTH', 'YYLEX_PARAM', 'YYLTYPE',
                'yyltype', 'YYMAXDEPTH', 'YYPARSE_PARAM', 'YYRECOVERING',
                'YYSTACK_USE_ALLOCA', 'YYSTYPE', 'yychar', 'yyclearin',
                'yydebug', 'yyerrok', 'yyerror', 'yylex', 'yylval', 'yylloc',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'int', 'long', 'short', 'char', 'void', 'signed', 'unsigned',
                'float', 'double', 'size_t', 'wchar_t', 'ptrdiff_t',
                'sig_atomic_t', 'fpos_t', 'clock_t', 'time_t', 'va_list',
                'jmp_buf', 'FILE', 'DIR', 'div_t', 'ldiv_t', 'static', 'const',
                'bool', 'struct', 'union', 'enum', 'size_t', 'wchar_t',
                'ptrdiff_t', 'sig_atomic_t', 'fpos_t', 'clock_t', 'time_t',
                'va_list', 'jmp_buf', 'FILE', 'DIR', 'div_t', 'ldiv_t',
                'mbstate_t', 'wctrans_t', 'wint_t', 'wctype_t', 'bool',
                'complex', 'int8_t', 'int16_t', 'int32_t', 'int64_t', 'uint8_t',
                'uint16_t', 'uint32_t', 'uint64_t', 'int_least8_t',
                'int_least16_t', 'int_least32_t', 'int_least64_t',
                'uint_least8_t', 'uint_least16_t', 'uint_least32_t',
                'uint_least64_t', 'int_fast8_t', 'int_fast16_t', 'int_fast32_t',
                'int_fast64_t', 'uint_fast8_t', 'uint_fast16_t',
                'uint_fast32_t', 'uint_fast64_t', 'intptr_t', 'uintptr_t',
            ),
        ),
        array(
            'id' => 3,
            'regex' => '\\$\\w+',
        ),
        array(
            'id' => 4,
            'regex' => '^\\w+:',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '//',
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
    'pre_processor' => array(
        'prefix' => '#',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\+|\\-',
    'ignore_case' => false,
);
