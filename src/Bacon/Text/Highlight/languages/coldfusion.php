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
    'description' => 'ColdFusion MX',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                '3Dcfabort', 'cfapplet', 'cfapplication', 'cfargument',
                'cfassociate', 'cfbreak', 'cfcache', 'cfcase', 'cfcatch',
                'cfchart', 'cfchartdata', 'cfchartseries', 'cfcol',
                'cfcollection', '', 'cfcomponent', 'cfcontent', 'cfcookie',
                'cfdefaultcase', 'cfdirectory', 'cfdump', 'cfelse', 'cfelseif',
                'cferror', 'cfexecute', 'cfexit', 'cffile', 'cfflush', 'cfform',
                'cfftp', 'cffunction', 'cfgrid', 'cfgridcolumn', 'cfgridrow',
                'cfgridupdate', 'cfheader', 'cfhtmlhead', 'cfhttp',
                'cfhttpparam=', 'cfif', 'cfimport', 'cfinclude', 'cfindex',
                'cfinput', 'cfinsert', 'cfinvoke', 'cfinvokeargument', 'cfldap',
                'cflocation', 'cflock', 'cflog', 'cflogin', 'cfloginuser',
                'cflogout', 'cfloop', 'cfmail', '', 'cfmailparam', 'cfmailpart',
                'cfmodule', 'cfobject', 'cfobjectcache', 'cfoutput', 'cfparam',
                'cfpop', 'cfprocessingdirective', 'cfprocparam', 'cfprocresult',
                'cfproperty', 'cfquery', 'cfqueryparam', 'cfregistry',
                'cfreport', 'cfrethrow', 'cfreturn', 'cfsavecontent',
                'cfschedule', 'cfscript', 'cfsearch', 'cfselect', 'cfset',
                'cfsetting', 'cfsilent', 'cfslider', 'cfstoredproc', 'cfswitch',
                'cftable', 'cftextinput', 'cfthrow', 'cftrace', 'cftransaction',
            ),
        ),
        array(
            'id' => 1,
            'regex' => '<!?\\/?\\w+>?|/?>',
        ),
        array(
            'id' => 2,
            'regex' => '([-\\w]+)=\"',
        ),
        array(
            'id' => 3,
            'regex' => '\\&\\#?\\w+;',
        ),
        array(
            'id' => 4,
            'regex' => '\\#\\w+',
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
            'nested' => true,
            'delimiter' => array(
                'open' => '\\<\\!\\-\\-\\-',
                'close' => '\\-\\-\\-\\>',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\!|\\=|\\/|\\*|\\%|\\+|\\-|\\.',
    'ignore_case' => true,
);
