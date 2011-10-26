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
    'description' => 'Apache Config',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'AccessConfig', 'AccessFileName', 'Action', 'AddAlt',
                'AddAltByEncoding', 'AddAltByType', 'AddCharset',
                'AddDefaultCharset', 'AddDescription', 'AddEncoding',
                'AddHandler', 'AddIcon', 'AddIconByEncoding', 'AddIconByType',
                'AddLanguage', 'AddModule', 'AddModuleInfo', 'AddType',
                'AgentLog', 'Alias', 'AliasMatch', 'Allow', 'AllowCONNECT',
                'AllowOverride', 'Anonymous', 'Anonymous_Authoritative',
                'Anonymous_LogEmail', 'Anonymous_MustGiveEmail',
                'Anonymous_NoUserID', 'Anonymous_VerifyEmail',
                'AuthAuthoritative', 'AuthDBAuthoritative', 'AuthDBGroupFile',
                'AuthDBMAuthoritative', 'AuthDBMGroupFile', 'AuthDBMGroupFile',
                'AuthDBMUserFile', 'AuthDBUserFile', 'AuthDigestFile',
                'AuthGroupFile', 'AuthName', 'AuthType', 'AuthUserFile',
                'BindAddress', 'BrowserMatch', 'BrowserMatchNoCase',
                'BS2000Account', 'CacheDefaultExpire', 'CacheDirLength',
                'CacheDirLevels', 'CacheForceCompletion', 'CacheGcInterval',
                'CacheLastModifiedFactor', 'CacheMaxExpire',
                'CacheNegotiatedDocs', 'CacheRoot', 'CacheSize',
                'CheckSpelling', 'ClearModuleList', 'ContentDigest',
                'CookieExpires', 'CookieLogCookieLog', 'CookieTracking',
                'CoreDumpDirectory', 'CustomLog', 'DefaultIcon',
                'DefaultLanguage', 'DefaultType', 'Deny', 'DirectoryIndex',
                'DocumentRoot', 'ErrorDocument', 'ErrorLog', 'Example',
                'ExpiresActive', 'ExpiresByType', 'ExpiresDefault',
                'ExtendedStatus', 'FancyIndexing', 'ForceType', 'Group',
                'Header', 'HeaderName', 'HostNameLookups', 'IdentityCheck',
                'ImapBase', 'ImapDefault', 'ImapMenu', 'Include', 'IndexIgnore',
                'IndexOptions', 'IndexOrderDefault', 'ISAPIAppendLogToErrors',
                'ISAPIAppendLogToQuery', 'ISAPILogNotSupported',
                'ISAPIReadAheadBuffer', 'KeepAlive', 'KeepAliveTimeout',
                'LanguagePriority', 'LimitRequestBody', 'LimitRequestFields',
                'LimitRequestFieldsize', 'LimitRequestLine', 'Listen',
                'ListenBacklog', 'LoadFile', 'LoadModule', 'LockFile',
                'LogFormat', 'LogLevel', 'MaxClients', 'MaxKeepAliveRequests',
                'MaxRequestsPerChild', 'MaxSpareServers', 'MetaDir',
                'MetaFiles', 'MetaSuffix', 'MimeMagicFile', 'MinSpareServers',
                'MMapFile', 'NameVirtualHost', 'NoCache', 'Options', 'Order',
                'PassEnv', 'PidFile', 'Port', 'ProxyBlock', 'ProxyDomain',
                'ProxyPass', 'ProxyPassReverse', 'ProxyReceiveBufferSize',
                'ProxyRemote', 'ProxyRequests', 'ProxyVia', 'ReadmeName',
                'Redirect', 'RedirectMatch', 'RedirectPermanent',
                'RedirectTemp', 'RefererIgnore', 'RefererLog', 'RemoveEncoding',
                'RemoveHandler', 'RemoveType', 'Require', 'ResourceConfig',
                'RewriteBase', 'RewriteCond', 'RewriteEngine', 'RewriteLock',
                'RewriteLog', 'RewriteLogLevel', 'RewriteMap', 'RewriteOptions',
                'RewriteRule', 'RLimitCPU', 'RLimitMEM', 'RLimitNPROC',
                'Satisfy', 'ScoreBoardFile', 'Script', 'ScriptAlias',
                'ScriptAliasMatch', 'ScriptInterpreterSource', 'ScriptLog',
                'ScriptLogBuffer', 'ScriptLogLength', 'SendBufferSize',
                'ServerAdmin', 'ServerAlias', 'ServerName', 'ServerPath',
                'ServerRoot', 'ServerSignature', 'ServerTokens', 'ServerType',
                'SetEnv', 'SetEnvIf', 'SetEnvIfNoCase', 'SetHandler',
                'StartServers', 'ThreadsPerChild', 'TimeOut', 'TransferLog',
                'TypesConfig', 'UnsetEnv', 'UseCanonicalName', 'User',
                'UserDir', 'VirtualDocumentRoot', 'VirtualDocumentRootIP',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'alert', 'All', 'any', 'Ascending', 'AuthConfig', 'Basic',
                'block', 'cgi-script', 'CONNECT', 'COPY', 'crit', 'Date',
                'debug', 'DELETE', 'Descending', 'Description', 'Digest', 'dns',
                'double', 'EMail', 'emerg', 'error', 'ExecCGI', 'FileInfo',
                'FollowSymLinks', 'formatted', 'from', 'Full', 'GET', 'Host',
                'imap-file', 'Includes', 'IncludesNOEXEC', 'Indexes', 'inetd',
                'info', 'isapi-isa', 'Limit', 'LOCK', 'map', 'max', 'Minimal',
                'MKCOL', 'MOVE', 'MultiViews', 'Name', 'nocontent', 'None',
                'notice', 'Off', 'On', 'OS', 'PATCH', 'POST', 'ProductOnly',
                'PROPFIND', 'PROPPATCH', 'PUT', 'referer', 'Remote_Addr',
                'Remote_Host', 'Remote_User', 'Request_Method',
                'Request_Protocol', 'Request_URI', 'semiformatted',
                'send-as-is', 'server-parsed', 'server-status', 'Size',
                'standalone', 'SymLinksIfOwnerMatch', 'TRACE', 'type-map',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => false,
);
