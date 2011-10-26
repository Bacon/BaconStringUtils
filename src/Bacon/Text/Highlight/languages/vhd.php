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
    'description' => 'VHDL',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abs', 'access', 'after', 'all', 'and', 'architecture', 'array',
                'assert', 'attribute', 'begin', 'block', 'body', 'buffer',
                'bus', 'case', 'component', 'configuration', 'disconnect',
                'downto', 'else', 'elsif', 'end', 'entity', 'exit', 'file',
                'for', 'function', 'generate', 'generic', 'group', 'guarded',
                'if', 'impure', 'in', 'inertial', 'inout', 'is', 'label',
                'library', 'linkage', 'literal', 'loop', 'map', 'mod', 'nand',
                'new', 'next', 'nor', 'not', 'null', 'of', 'on', 'open', 'or',
                'others', 'out', 'package', 'port', 'postponed', 'procedure',
                'process', 'pure', 'range', 'record', 'register', 'reject',
                'rem', 'report', 'return', 'rol', 'ror', 'select', 'severity',
                'shared', 'sla', 'sll', 'sra', 'srl', 'then', 'to', 'transport',
                'unaffected', 'units', 'until', 'use', 'wait', 'when', 'while',
                'with', 'xnor', 'xor', 'ActivPullUp', 'AndN', 'And2FF',
                'AndNFF', 'Cnt1Bit', 'CntNBit', 'CntNBitDown', 'CntNBitMod',
                'CntNBitOe', 'CntNBitSLd', 'CntNBitSR', 'CntNBitUpDown',
                'CompNBit', 'CompNBitFF', 'DiffH2LWithFF', 'DiffL2HWithFF',
                'Dff1', 'Dff1NegClk', 'Dffn', 'Encode4to5', 'Mux1of2',
                'Mux1of8', 'Mux1Vof2V', 'Mux1Vof3V', 'Mux1Vof4V',
                'PreScale1Bit', 'PreScale1BitAR', 'PreScale1BitARNegClk',
                'PreScaleNBit', 'PreScaleNBitAR', 'Reg1Bit', 'Reg1BitAR',
                'Reg1BitR', 'RegNBit', 'RegNBitAR', 'RSFFAsync', 'RSFFsync',
                'RsSynchronizer', 'ShiftP2SRegNBitAR', 'ShiftRegNBitAR',
                'ShiftS2SRegNBit', 'SRFFsync', 'SyncAndDiffL2HWithFF',
                'SyncAndDiffH2LWithFF', 'SyncAndDiffL2HWithFFAndFg',
                'SyncAndDiffH2LWithFFAndFg', 'SyncAndDiffLL2HHWithFF',
                'SyncAndDiffHH2LLWithFF', 'SyncAndDiffLL2HHWithFFAndFg',
                'SyncAndDiffHH2LLWithFFAndFg', 'ActivPullUp_arch', 'AndN_arch',
                'And2FF_arch', 'AndNFF_arch', 'Cnt1Bit_arch', 'CntNBit_arch',
                'CntNBitDown_arch', 'CntNBitMod_arch', 'CntNBitOe_arch',
                'CntNBitSLd_arch', 'CntNBitSR_arch', 'CntNBitUpDown_arch',
                'CompNBit_arch', 'CompNBitFF_arch', 'DiffH2LWithFF_arch',
                'DiffL2HWithFF_arch', 'Dff1_arch', 'Dff1NegClk_arch',
                'Dffn_arch', 'Encode4to5_arch', 'Mux1of2_arch', 'Mux1of8_arch',
                'Mux1Vof2V_arch', 'Mux1Vof3V_arch', 'Mux1Vof4V_arch',
                'PreScale1Bit_arch', 'PreScale1BitAR_arch',
                'PreScale1BitARNegClk_arch', 'PreScaleNBit_arch',
                'PreScaleNBitAR_arch', 'Reg1Bit_arch', 'Reg1BitAR_arch',
                'Reg1BitR_arch', 'RegNBit_arch', 'RegNBitAR_arch',
                'RSFFAsync_arch', 'RSFFsync_arch', 'RsSynchronizer_arch',
                'ShiftP2SRegNBitAR_arch', 'ShiftRegNBitAR_arch',
                'ShiftS2SRegNBit_arch', 'SRFFsync_arch',
                'SyncAndDiffL2HWithFF_arch', 'SyncAndDiffH2LWithFF_arch',
                'SyncAndDiffL2HWithFFAndFg_arch',
                'SyncAndDiffH2LWithFFAndFg_arch', 'SyncAndDiffLL2HHWithFF_arch',
                'SyncAndDiffHH2LLWithFF_arch',
                'SyncAndDiffLL2HHWithFFAndFg_arch',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'bit', 'bit_vector', 'boolean', 'integer', 'real', 'std_logic',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
            ),
        ),
        array(
            'id' => 4,
            'regex' => '[\\w\\(\\)]+(\'\\w+)',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\-\\-',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
