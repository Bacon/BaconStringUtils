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
    'description' => 'LDAP',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'binary', 'businesscategory', 'carlicense', 'changetype', 'cn',
                'commonname', 'departmentnumber', 'description', 'dn',
                'employeenumber', 'employeetype', 'facsimiletelephonenumber',
                'givenname', 'homephone', 'homepostaladdress', 'initials',
                'internationalisdnnumber', 'jpegphoto', 'l', 'labeleduri',
                'locality', 'mail', 'mailalternateaddress',
                'maildeliveryoption', 'mailhost', 'manager', 'mobile',
                'objectclass', 'pager', 'photo', 'postofficebox',
                'preferreddeliverymethod', 'preferredlanguage',
                'physicaldeliveryofficename', 'postaladdress', 'postalcode',
                'registeredaddress', 'roleoccupant', 'roomnumber', 'secretary',
                'seealso', 'sn', 'st', 'street', 'surname', 'telephonenumber',
                'title', 'uid', 'userpassword', 'usercertificate',
                'usercertificate', 'usersmimecertificate',
                'x500uniqueidentifier', 'add', 'c', 'dc', 'delete', 'modify',
                'o', 'ou', 'crypt', 'inetorgperson', 'mailrecipient',
                'nslicenseuser', 'organizationalperson', 'organizationalrole',
                'residentialperson', 'person', 'sha', 'top', 'nsserversecurity',
                'nsserverid', 'nsbinddn', 'nsbasedn', 'serverroot',
                'nsserverport', 'nssecureserverport', 'serverproductname',
                'serverversionnumber', 'installationtimestamp',
                'installationtimestamp', 'serverhostname', 'nstasklabel', '',
                'creatorsname', 'modifiersname', 'createtimestamp',
                'modifytimestamp', 'nsuniqueid', 'aci', 'uniquemember',
                'passwordExpirationTime', 'nsAdminDomainName',
                'nshardwareplatform', 'nsosversion', '', 'nsproductname',
                'nsproductversion', 'nsnickname', 'nsbuildnumber', 'nsvendor',
                'nsinstalledlocation', 'nsdirectoryinforef', 'nsclassname',
            ),
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
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
