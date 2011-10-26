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
    'description' => 'Lotos',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'accept', 'actualizedby', 'any', 'behavior', 'behaviour',
                'choice', 'endlib', 'endproc', 'endspec', 'endtype', 'eqns',
                'exit', 'for', 'forall', 'formaleqns', 'formalopns',
                'formalsorts', 'hide', 'iin', 'is', 'let', 'library', 'noexit',
                'of', 'ofsort', 'opnnames', 'opns', 'par', 'process',
                'renamedby', 'sortnames', 'sorts', 'specification', 'stop',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'Bit', 'BitString', 'Bool', 'DecDigit', 'DecString', 'Element',
                'FBool', 'HexDigit', 'HexStringOctDigit', 'Octet', 'OctString',
                'Nat', 'NonEmptyString', 'OctetString', 'Set', 'String',
                'BasicNaturalNumber', 'BasicNonEmptyString', 'BitNatRepr',
                'Boolean', 'FBoolean', 'DecNatRepr', 'HexNatRepr',
                'NatRepresentations', 'NaturalNumber', 'OctNatRepr',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => true,
            'nested' => false,
            'delimiter' => array(
                'open' => '\\(\\*',
                'close' => '\\*\\)',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
