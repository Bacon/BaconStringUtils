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
    'description' => 'Jasmin',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'catch', 'class', 'end', 'field', 'implements', 'interface',
                'limit', 'line', 'method', 'source', 'super', 'throws', 'var',
                'aaload', 'aastore', 'aconst_null', 'aload', 'aload_0',
                'aload_1', 'aload_2', 'aload_3', 'anewarray', 'areturn',
                'arraylength', 'astore', 'astore_0', 'astore_1', 'astore_2',
                'astore_3', 'athrow', 'baload', 'bastore', 'bipush',
                'breakpoint', 'caload', 'castore', 'checkcast', 'd2f', 'd2i',
                'd2l', 'dadd', 'daload', 'dastore', 'dcmpg', 'dcmpl',
                'dconst_0', 'dconst_1', 'ddiv', 'dead', 'dload', 'dload_0',
                'dload_1', 'dload_2', 'dload_3', 'dmul', 'dneg', 'drem',
                'dreturn', 'dstore', 'dstore_0', 'dstore_1', 'dstore_2',
                'dstore_3', 'dsub', 'dup', 'dup2', 'dup2_x1', 'dup2_x2',
                'dup_x1', 'dup_x2', 'f2d', 'f2i', 'f2l', 'fadd', 'faload',
                'fastore', 'fcmpg', 'fcmpl', 'fconst_0', 'fconst_1', 'fconst_2',
                'fdiv', 'fload', 'fload_0', 'fload_1', 'fload_2', 'fload_3',
                'fmul', 'fneg', 'frem', 'freturn', 'fstore', 'fstore_0',
                'fstore_1', 'fstore_2', 'fstore_3', 'fsub', 'getfield',
                'getstatic', 'goto', 'goto_w', 'i2b', 'i2c', 'i2d', 'i2f',
                'i2l', 'i2s', 'iadd', 'iaload', 'iand', 'iastore', 'iconst_0',
                'iconst_1', 'iconst_2', 'iconst_3', 'iconst_4', 'iconst_5',
                'iconst_m1', 'idiv', 'if_acmpeq', 'if_acmpne', 'if_icmpeq',
                'if_icmpge', 'if_icmpgt', 'if_icmple', 'if_icmplt', 'if_icmpne',
                'ifeq', 'ifge', 'ifgt', 'ifle', 'iflt', 'ifne', 'ifnonnull',
                'ifnull', 'iinc', 'iload', 'iload_0', 'iload_1', 'iload_2',
                'iload_3', 'imul', 'ineg', 'instanceof', 'int2byte', 'int2char',
                'int2short', 'invokeinterface', 'invokenonvirtual',
                'invokespecial', 'invokestatic', 'invokevirtual', 'ior', 'irem',
                'ireturn', 'ishl', 'ishr', 'istore', 'istore_0', 'istore_1',
                'istore_2', 'istore_3', 'isub', 'iushr', 'ixor', 'jsr', 'jsr_w',
                'l2d', 'l2f', 'l2i', 'label', 'ladd', 'laload', 'land',
                'lastore', 'lcmp', 'lconst_0', 'lconst_1', 'ldc', 'ldc2_w',
                'ldc_w', 'ldiv', 'lload', 'lload_0', 'lload_1', 'lload_2',
                'lload_3', 'lmul', 'lneg', 'lor', 'lrem', 'lreturn', 'lshl',
                'lshr', 'lstore', 'lstore_0', 'lstore_1', 'lstore_2',
                'lstore_3', 'lsub', 'lushr', 'lxor', 'monitorenter',
                'monitorexit', 'multianewarray', 'new', 'newarray', 'nop',
                'pop', 'pop2', 'putfield', 'putstatic', 'ret', 'return',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'abstract', 'default', 'final', 'from', 'is', 'lookupswitch',
                'native', 'private', 'protected', 'public', 'static',
                'synchronized', 'tableswitch', 'to', 'transient', 'using',
            ),
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
        'delimiter' => '\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
