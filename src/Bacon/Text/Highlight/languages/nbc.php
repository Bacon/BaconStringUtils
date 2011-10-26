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
    'description' => 'NeXT Byte Codes',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'add', 'sub', 'neg', 'mul', 'div', 'mod', 'and', 'or', 'xor',
                'not', 'cmp', 'tst', 'index', 'replace', 'arrsize', 'arrbuild',
                'arrsubset', 'arrinit', 'mov', 'set', 'flatten', 'unflatten',
                'numtostr', 'strtonum', 'strcat', 'strsubset', 'strtoarr',
                'arrtostr', 'jmp', 'brcmp', 'brtst', 'syscall', 'stop', 'exit',
                'exitto', 'acquire', 'release', 'subcall', 'subret', 'setin',
                'setout', 'getin', 'getout', 'wait', 'gettick', 'thread',
                'endt', 'subroutine', 'follows', 'precedes', 'segment', 'ends',
                'typedef', 'struct', 'dd', 'void', 'waitv', 'call', 'return',
                'abs', 'sign', 'strindex', 'strreplace', 'strlen', 'shl', 'shr',
                'sizeof', 'compchk', 'compif', 'compelse', 'compend', 'valueof',
                'isconst', 'asl', 'asr', 'lsl', 'lsr', 'rotl', 'rotr', 'start',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'byte', 'ubyte', 'db', 'sbyte', 'word', 'uword', 'dw', 'sword',
                'dword', 'udword', 'dd', 'sdword', 'long', 'ulong', 'slong',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'tan', 'sin', 'cos', 'sinh', 'cosh', 'arctan', 'cotan', 'arg',
                'exp', 'ln', 'log', 'log', 'logn', 'sqr', 'sqrt', 'trunc',
                'int', 'ceil', 'floor', 'heav', 'abs', 'sign', 'zero', 'ph',
                'rnd', 'random', 'max', 'min', 'power', 'intpower',
                'InputIOType', 'InputIOInputMode', 'InputIORawValue',
                'InputIONormalizedValue', 'InputIOScaledValue',
                'InputIOInvalidData', 'OutputIOUpdateFlags',
                'OutputIOOutputMode', 'OutputIOPower', 'OutputIOActualSpeed',
                'OutputIOTachoCount', 'OutputIOTachoLimit', 'OutputIORunState',
                'OutputIOTurnRatio', 'OutputIORegMode', 'OutputIOOverload',
                'OutputIORegPValue', 'OutputIORegIValue', 'OutputIORegDValue',
                'OutputIOBlockTachoCount', 'OutputIORotationCount',
                'FileOpenRead', 'FileOpenWrite', 'FileOpenAppend', 'FileRead',
                'FileWrite', 'FileClose', 'FileResolveHandle', 'FileRename',
                'FileDelete', 'SoundPlayFile', 'SoundPlayTone', 'SoundGetState',
                'SoundSetState', 'DrawText', 'DrawPoint', 'DrawLine',
                'DrawCircle', 'DrawRect', 'DrawGraphic', 'SetScreenMode',
                'ReadButton', 'CommLSWrite', 'CommLSRead', 'CommLSCheckStatus',
                'RandomNumber', 'GetStartTick', 'MessageWrite', 'MessageRead',
                'CommBTCheckStatus', 'CommBTWrite', 'KeepAlive', 'IOMapRead',
                'IOMapWrite', 'IOMapReadByID', 'IOMapWriteByID',
                'DisplayExecuteFunction', 'CommExecuteFunction',
                'LoaderExecuteFunction', 'Type', 'InputMode', 'RawValue',
                'NormalizedValue', 'ScaledValue', 'InvalidData', 'UpdateFlags',
                'OutputMode', 'Power', 'ActualSpeed', 'TachoCount',
                'TachoLimit', 'RunState', 'TurnRatio', 'RegMode', 'Overload',
                'RegPValue', 'RegIValue', 'RegDValue', 'BlockTachoCount',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\w+)\\s*\\(',
        ),
        array(
            'id' => 4,
            'regex' => '^(\\w+)\\:',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\/\\/|\\;',
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
        'continuation' => '\\',
    ),
    'digits' => '(?:x|X)[-a-fA-F]+|\\d*[\\.]?\\d+(?:[eE][\\-\\+]\\\\d+)?[lLuU]*',
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'ignore_case' => false,
);
