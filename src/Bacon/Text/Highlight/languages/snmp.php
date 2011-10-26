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
    'description' => 'SNMP',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'ACCESS', 'ANY', 'AUGMENTS', 'BEGIN', 'BIT', 'BITS', 'BOOLEAN',
                'CHOICE', 'COMPONENTS', 'CONTACT-INFO', 'DEFINITIONS', 'DEFVAL',
                'DESCRIPTION', 'DISPLAY-HINT', 'END', 'ENTERPRISE', 'EXTERNAL',
                'FALSE', 'FROM', 'GROUP', 'IDENTIFIER', 'IMPLICIT', 'IMPLIED',
                'IMPORTS', 'INDEX', 'LAST-UPDATED', 'MANDATORY-GROUPS',
                'MAX-ACCESS', 'MIN-ACCESS', 'MODULE', 'MODULE-COMPLIANCE',
                'MODULE-IDENTITY', 'NOTIFICATION-GROUP', 'NOTIFICATION-TYPE',
                'NOTIFICATIONS', 'NULL', 'OBJECT', 'OBJECT-GROUP',
                'OBJECT-IDENTITY', 'OBJECT-TYPE', 'OBJECTS', 'OF', 'OPTIONAL',
                'ORGANIZATION', 'REFERENCE', 'REVISION', 'SEQUENCE', 'SET',
                'SIZE', 'STATUS', 'SYNTAX', 'TEXTUAL-CONVENTION', 'TRAP-TYPE',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'accessible-for-notify', 'current', 'DisplayString',
                'deprecated', 'mandatory', 'not-accessible', 'obsolete',
                'optional', 'read-create', 'read-only', 'read-write',
                'write-only', 'INTEGER', 'Counter', 'Gauge', 'IpAddress',
                'OCTET', 'STRING', 'experimental', 'mib-2', 'TimeTicks',
                'RowStatus', 'TruthValue', 'UInteger32', 'Unsigned32',
                'snmpModules', 'Integer32', 'Counter32', 'TestAndIncr',
                'TimeStamp', 'InstancePointer', 'Gauge32', 'AutonomousType',
                'Counter64', 'PhysAddress', 'TimeInterval', 'MacAddress',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'FORCE-INCLUDE', 'EXCLUDE', 'cookie', 'get-function',
                'set-function', 'test-function', 'get-function-async',
                'set-function-async', 'test-function-async', 'next-function',
            ),
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
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\=|\\.',
    'ignore_case' => false,
);
