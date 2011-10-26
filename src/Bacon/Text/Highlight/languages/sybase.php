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
    'description' => 'Sybase SQL',
    'keywords' => array(
        array(
            'id' => 2,
            'list' => array(
                'sp_activeroles', 'sp_addalias', 'sp_addauditrecord',
                'sp_addaudittable', 'sp_addextendedproc', 'sp_addexternlogin',
                'sp_addgroup', 'sp_addlanguage', 'sp_addlogin', 'sp_addmessage',
                'sp_addobjectdef', 'sp_addremotelogin', 'sp_add_resource_limit',
                'sp_addsegment', 'sp_addserver', 'sp_addthreshold',
                'sp_add_time_range', 'sp_addtype', 'sp_addumpdevice',
                'sp_adduser', 'sp_altermessage', 'sp_autoconnect',
                'sp_bindcache', 'sp_bindefault', 'sp_bindmsg', 'sp_bindrule',
                'sp_cacheconfig', 'sp_cachestrategy', 'sp_changedbowner',
                'sp_changegroup', 'sp_checknames', 'sp_checkreswords',
                'sp_checksource', 'sp_chgattribute', 'sp_clearstats',
                'sp_commonkey', 'sp_countmetadata', 'sp_cursorinfo',
                'sp_column_privileges', 'sp_columns', 'sp_configure',
                'sp_databases', 'sp_datatype_info', 'sp_dbcc_alterws',
                'sp_dbcc_configreport', 'sp_dbcc_createws', 'sp_dbcc_deletedb',
                'sp_dbcc_deletehistory', 'sp_dbcc_differentialreport',
                'sp_dbcc_evaluatedb', 'sp_dbcc_faultreport',
                'sp_dbcc_fullreport', 'sp_dbcc_runcheck',
                'sp_dbcc_statisticsreport', 'sp_dbcc_summaryreport',
                'sp_dbcc_updateconfig', 'sp_dboption', 'sp_defaultloc',
                'sp_depends', 'sp_diskdefault', 'sp_displayaudit',
                'sp_displaylevel', 'sp_displaylogin', 'sp_displayroles',
                'sp_dropalias', 'sp_dropdevice', 'sp_dropexeclass',
                'sp_dropextendedproc', 'sp_dropexternlogin',
                'sp_dropglockpromote', 'sp_dropgroup', 'sp_dropkey',
                'sp_droplanguage', 'sp_droplogin', 'sp_dropmessage',
                'sp_dropobjectdef', 'sp_dropremotelogin',
                'sp_drop_resource_limit', 'sp_dropsegment', 'sp_dropserver',
                'sp_dropthreshold', 'sp_drop_time_range', 'sp_droptype',
                'sp_dropuser', 'sp_estspace', 'sp_extendsegment',
                'sp_familylock', 'sp_forceonline_db', 'sp_forceonline_page',
                'sp_foreignkey', 'sp_freedll', 'sp_getmessage', 'sp_grantlogin',
                'sp_help', 'sp_helpartition', 'sp_helpcache', 'sp_helpconfig',
                'sp_helpconstraint', 'sp_helpdb', 'sp_helpdevice',
                'sp_helpextendedproc', 'sp_helpexternlogin', 'sp_helpgroup',
                'sp_helpindex', 'sp_helpjoins', 'sp_helpkey', 'sp_helplanguage',
                'sp_helplog', 'sp_helpobjectdef', 'sp_helpremotelogin',
                'sp_help_resource_limit', 'sp_helprotect', 'sp_helpsegment',
                'sp_helpserver', 'sp_helpsort', 'sp_helptext',
                'sp_helpthreshold', 'sp_helpuser', 'sp_hidetext',
                'sp_indsuspect', 'sp_listsuspect_db', 'sp_listsuspect_page',
                'sp_lock', 'sp_locklogin', 'sp_logdevice', 'sp_loginconfig',
                'sp_logininfo', 'sp_logiosize', 'sp_modifylogin',
                'sp_modify_resource_limit', 'sp_modify_time_range',
                'sp_modifythreshold', 'sp_monitor', 'sp_monitorconfig',
                'sp_passthru', 'sp_password', 'sp_placeobject',
                'sp_plan_dbccdb', 'sp_primarykey', 'sp_processmail',
                'sp_procqmode', 'sp_procxmode', 'sp_recompile',
                'sp_remoteoption', 'sp_remotesql', 'sp_rename', 'sp_renamedb',
                'sp_reportstats', 'sp_revokelogin', 'sp_role',
                'sp_serveroption', 'sp_setlangalias', 'sp_setpglockpromote',
                'sp_setpglockpromote', 'sp_setsuspect_granularity',
                'sp_setsuspect_threshold', 'sp_spaceused', 'sp_syntax',
                'sp_sysmon', 'sp_sysmon', 'sp_sysmon', 'sp_unbindcache',
                'sp_unbindcache_all', 'sp_unbindefault', 'sp_unbindmsg',
                'sp_unbindrule', 'sp_volchanged', 'sp_who', 'sp_fkeys',
                'sp_server_info', 'sp_special_columns', 'sp_sproc_columns',
                'sp_statistics', 'sp_stored_procedures', 'sp_table_privileges',
                'sp_tables', 'xp_cmdshell', 'xp_deletemail', 'xp_enumgroups',
                'xp_findnextmsg', 'xp_logevent', 'xp_readmail', 'xp_sendmail',
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
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
