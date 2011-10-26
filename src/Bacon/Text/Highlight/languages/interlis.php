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
    'description' => 'INTERLIS',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'ANY', 'ARCS', 'AREA', 'BASE', 'BLANK', 'CODE', 'CONTINUE',
                'CONTOUR', 'COORD2', 'COORD3', 'DATE', 'DEFAULT', 'DEGREES',
                'DERIVATIVES', 'DIM1', 'DIM2', 'DOMAIN', 'END', 'FIX', 'FONT',
                'FORMAT', 'FREE', 'GRADS', 'HALIGNMENT', 'I16', 'I32', 'IDENT',
                'LINEATTR', 'LINESIZE', 'MODEL', 'NO', 'OPTIONAL', 'OVERLAPS',
                'PERIPHERY', 'POLYLINE', 'RADIANS', 'STRAIGHTS', 'SURFACE',
                'TABLE', 'TEXT', 'TID', 'TIDSIZE', 'TOPIC', 'TRANSFER',
                'UNDEFINED', 'VALIGNMENT', 'VERTEX', 'VERTEXINFO', 'VIEW',
                'WITH', 'WITHOUT', 'ABSTRACT', 'ACCORDING', 'AGGREGATES',
                'AGGREGATION', 'ALL', 'AND', 'ANY', 'ANYCLASS', 'ANYSTRUCTURE',
                'ARCS', 'AREA', 'AS', 'ASSOCIATION', 'AT', 'ATTRIBUTE',
                'ATTRIBUTES', 'BAG', 'BASE', 'BASED', 'BASKET', 'BINARY',
                'BLACKBOX', 'BOOLEAN', 'BY', 'CARDINALITY', 'CIRCULAR', 'CLASS',
                'CLOCKWISE', 'CONSTRAINT', 'CONSTRAINTS', 'CONTINUE',
                'CONTINUOUS', 'CONTRACTED', 'COORD', 'COUNTERCLOCKWISE',
                'DEFINED', 'DEPENDS', 'DERIVED', 'DIRECTED', 'DOMAIN', 'END',
                'ENUMTREEVAL', 'ENUMVAL', 'EQUAL', 'EXISTENCE', 'EXTENDED',
                'EXTENDS', 'EXTERNAL', 'FINAL', 'FIRST', 'FORM', 'FROM',
                'FUNCTION', 'GRAPHIC', 'HALIGNMENT', 'HIDING', 'IMPORTS', 'IN',
                'INHERITANCE', 'INSPECTION', 'INTERLIS', 'JOIN', 'LAST', 'LINE',
                'LIST', 'LNBASE', 'LOCAL', 'MANDATORY', 'METAOBJECT', 'MODEL',
                'MTEXT', 'NAME', 'NOT', 'NO', 'NULL', 'NUMERIC', 'OBJECT', 'OF',
                'OID', 'ON', 'OR', 'ORDERED', 'OTHERS', 'OVERLAPS', 'PARAMETER',
                'PARENT', 'PI', 'POLYLINE', 'PROJECTION', 'REFERENCE',
                'REFSYSTEM', 'REQUIRED', 'RESTRICTED', 'ROTATION', 'SET',
                'SIGN', 'STRAIGHTS', 'STRUCTURE', 'SUBDIVISION', 'SURFACE',
                'SYMBOLOGY', 'TEXT', 'THATAREA', 'THIS', 'THISAREA', 'TO',
                'TOPIC', 'TRANSIENT', 'TRANSLATION', 'TYPE', 'UNDEFINED',
                'UNION', 'UNIQUE', 'UNIT', 'UNQUALIFIED', 'URI', 'VALIGNMENT',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\!\\!|\\/\\/',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\.|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'ignore_case' => false,
);
