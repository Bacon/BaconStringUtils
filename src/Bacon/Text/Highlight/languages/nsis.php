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
    'description' => 'NSIS',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'OutFile', 'Name', 'Caption', 'SubCaption', 'BrandingText',
                'Icon', 'WindowIcon', 'BGGradient', 'SilentInstall',
                'SilentUnInstall', 'CRCCheck', 'MiscButtonText',
                'InstallButtonText', 'FileErrorText', 'InstallDir',
                'InstallDirRegKey', 'LicenseText', 'LicenseData',
                'ComponentText', 'InstType', 'EnabledBitmap', 'DisabledBitmap',
                'SpaceTexts', 'DirShow', 'DirText', 'AllowRootDirInstall',
                'InstallColors', 'InstProgressFlags', 'AutoCloseWindow',
                'ShowInstDetails', 'DetailsButtonText', 'CompletedText',
                'UninstallText', 'UninstallIcon', 'UninstallCaption',
                'UninstallSubCaption', 'ShowUninstDetails',
                'UninstallButtonText', 'SetOverwrite', 'SetCompress',
                'SetDatablockOptimize', 'SetDateSave', 'Section', 'SectionIn',
                'SectionEnd', 'SectionDivider', 'AddSize', 'Function',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'SetOutPath', 'File', 'Exec', 'ExecWait', 'ExecShell', 'Rename',
                'Delete', 'RMDir', 'WriteRegStr', 'WriteRegExpandStr',
                'WriteRegDWORD', 'WriteRegBin', 'WriteINIStr', 'ReadRegStr',
                'ReadRegDWORD', 'ReadINIStr', 'ReadEnvStr', 'ExpandEnvStrings',
                'DeleteRegValue', 'DeleteRegKey', 'EnumRegKey', 'EnumRegValue',
                'DeleteINISec', 'DeleteINIStr', 'CreateDirectory', 'CopyFiles',
                'SetFileAttributes', 'CreateShortCut', 'GetFullPathName',
                'SearchPath', 'GetTempFileName', 'CallInstDLL', 'RegDLL',
                'UnRegDLL', 'GetDLLVersion', 'GetDLLVersionLocal',
                'GetFileTime', 'GetFileTimeLocal', 'Goto', 'Call', 'Return',
                'IfErrors', 'ClearErrors', 'SetErrors', 'FindWindow',
                'SendMessage', 'IsWindow', 'IfFileExists', 'MessageBox',
                'StrCmp', 'IntCmp', 'IntCmpU', 'Abort', 'Quit',
                'GetFunctionAddress', 'GetLabelAddress', 'GetCurrentAddress',
                'FindFirst', 'FindNext', 'FindClose', 'FileOpen', 'FileClose',
                'FileRead', 'FileWrite', 'FileReadByte', 'FileWriteByte',
                'FileSeek', 'SetDetailsView', 'SetDetailsPrint', 'SetAutoClose',
                'DetailPrint', 'Sleep', 'BringToFront', 'HideWindow', 'StrCpy',
                'StrLen', 'Push', 'Pop', 'Exch', 'IntOp', 'IntFmt', 'RebootIf',
            ),
        ),
        array(
            'id' => 3,
            'list' => array(
                'SW_SHOWNORMAL', 'SW_SHOWMAXIMIZED', 'SW_SHOWMINIMIZED', 'HKCR',
                'HKEY_CLASSES_ROOT', 'HKLM', 'HKEY_LOCAL_MACHINE', 'HKCU',
                'HKEY_CURRENT_USER', 'HKU', 'HKEY_USERS', 'HKCC',
                'HKEY_CURRENT_CONFIG', 'HKDD', 'HKEY_DYN_DATA', 'HKPD',
                'HKEY_PERFORMANCE_DATA', 'MB_OK', 'MB_OKCANCEL',
                'MB_ABORTRETRYIGNORE', 'MB_RETRYCANCEL', 'MB_YESNO',
                'MB_YESNOCANCEL', 'MB_ICONEXCLAMATION', 'MB_ICONQUESTION',
                'MB_ICONSTOP', 'MB_TOPMOST', 'MB_SETFOREGROUND', 'MB_RIGHT',
                'IDABORT', 'IDCANCEL', 'IDIGNORE', 'IDNO', 'IDOK', 'IDRETRY',
                'IDYES', 'NORMAL', 'FILE_ATTRIBUTE_NORMAL', 'ARCHIVE',
                'FILE_ATTRIBUTE_ARCHIVE', 'HIDDEN', 'FILE_ATTRIBUTE_HIDDEN',
                'OFFLINE', 'FILE_ATTRIBUTE_OFFLINE', 'READONLY',
                'FILE_ATTRIBUTE_READONLY', 'SYSTEM', 'FILE_ATTRIBUTE_SYSTEM',
                'TEMPORARY', 'FILE_ATTRIBUTE_TEMPORARY', 'ALT', 'CONTROL',
            ),
        ),
        array(
            'id' => 4,
            'regex' => '(\\$\\{\\w+\\})',
        ),
        array(
            'id' => 3,
            'regex' => '\\$\\w+',
        ),
        array(
            'id' => 4,
            'regex' => '\\!\\w+',
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => ';|\\#',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\.|\\:|\\&|\\<|\\>|\\|\\=|\\/|\\*|\\%|\\+|\\-|\\~',
    'ignore_case' => false,
);
