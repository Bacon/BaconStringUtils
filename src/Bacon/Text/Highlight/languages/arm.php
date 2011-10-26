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
    'description' => 'ARM',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'AND', 'and', 'EOR', 'eor', 'SUB', 'sub', 'RSB', 'rsb', 'ADD',
                'add', 'ADC', 'adc', 'SBC', 'sbc', 'RSC', 'rsc', 'TST', 'tst',
                'TEQ', 'teq', 'CMP', 'cmp', 'CMN', 'cmn', 'ORR', 'orr', 'MOV',
                'mov', 'BIC', 'bic', 'MVN', 'mvn', 'LSL', 'lsl', 'LSR', 'lsr',
                'ASL', 'asl', 'ASR', 'asr', 'ROR', 'ror', 'RRX', 'rrx', 'NEG',
                'neg', 'MUL', 'mul', 'MLA', 'mla', 'SMULL', 'smull', 'UMULL',
                'umull', 'SMLAL', 'smlal', 'UMLAL', 'umlal', 'LDR', 'ldr',
                'STR', 'str', 'LDM', 'ldm', 'STM', 'stm', 'SWP', 'swp', 'PUSH',
                'push', 'POP', 'pop', 'SWI', 'swi', 'BKPT', 'bkpt', 'CLZ',
                'clz', 'MRS', 'mrs', 'MSR', 'msr', 'CDP', 'cdp', 'MRC', 'mrc',
                'MCR', 'mcr', 'LDC', 'ldc', 'STC', 'stc', 'OPT', 'EXT', 'EQU',
                'DC', 'ALIGN', 'ADR', 'RN', 'FN', 'DIV', 'SQR', 'SWAP', 'VDU',
                'NOP', 'BRK', 'SMUL', 'UMUL', 'SMLA', 'UMLA', 'LDF', 'STF',
                'ASSERT', 'FILL', 'FILE', 'COND', 'HEAD', 'ORG', 'CN', 'CP',
                'DN', 'EXPORT', 'GLOBAL', 'EXTERN', 'FN', 'GBL', 'IMPORT',
                'KEEP', 'LCL', 'RLIST', 'RN', 'SET', 'SN', 'ALIGN', 'DATA',
                'DC', 'FIELD', 'LTORG', 'MAP', 'SPACE', 'ELSE', 'ENDIF', 'GET',
                'INCLUDE', 'IF', 'INCBIN', 'MACRO', 'MEND', 'MEXIT', 'WEND',
                'WHILE', 'ENDFUNC', 'ENDP', 'FRAME', 'ADDRESS', 'POP', 'PUSH',
                'REGISTER', 'RESTORE', 'SAVE', 'STATE', 'REMEMBER', 'RESTORE',
                'FUNCTION', 'PROC', 'AREA', 'ASSERT', 'CODE16', 'CODE32', 'END',
                'ENTRY', 'INFO', 'NOFP', 'OPT', 'REQUIRE', 'ROUT', 'SUBT',
                'TTL', 'VFPASSERT', 'SCALAR', 'VECTOR', 'ADR', 'FLD', 'LDF',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'A1', 'A2', 'A3', 'A4', 'F0', 'F1', 'F2', 'F3', 'F4', 'F5',
                'F6', 'F7', 'FP', 'IP', 'LR', 'PC', 'R0', 'R1', 'R10', 'R11',
                'R12', 'R13', 'R14', 'R15', 'R2', 'R3', 'R4', 'R5', 'R6', 'R7',
                'R8', 'R9', 'SL', 'SP', 'V1', 'V2', 'V3', 'V4', 'V5', 'V6',
                'a1', 'a2', 'a3', 'a4', '', 'f0', 'f1', 'f2', 'f3', 'f4', 'f5',
                'f6', 'f7', 'fp', '', 'ip', 'lr', 'pc', 'r0', 'r1', 'r10',
                'r11', 'r12', 'r13', 'r14', 'r15', 'r2', 'r3', 'r4', 'r5', 'r6',
                'r7', 'r8', 'r9', 'sl', 'sp', 'v1', 'v2', 'v3', 'v4', 'v5',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\|/\\;|rem|REM|Rem',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
