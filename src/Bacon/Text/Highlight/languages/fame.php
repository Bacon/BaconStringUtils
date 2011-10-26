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
    'description' => 'FAME',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abort', 'accelerator', 'access', 'alias', 'almon', 'append',
                'area', 'arguments', 'arimaconstant', 'arrow', 'assist',
                'astime', 'axis', 'background', 'band', 'base', 'basis',
                'batch', 'behavioral', 'boolean', 'bottom', 'box', 'bring',
                'brown', 'button', 'cache', 'calendar', 'caption', 'case',
                'cell', 'century', 'channel', 'character', 'chset', 'class',
                'color', 'column', 'commas', 'confirm', 'constrain', 'contents',
                'convert', 'criterion', 'date', 'decimal', 'depic', 'depict',
                'description', 'device', 'dimension', 'disable', 'division',
                'echo', 'eject', 'error', 'expand', 'explode', 'fetch', 'field',
                'finish', 'fon', 'force', 'forecast', 'forms', 'fraction',
                'frame', 'frdb', 'frequency', 'future', 'generate', 'glue',
                'grid', 'history', 'holdout', 'holiday', 'ignore', 'image',
                'indent', 'index', 'influence', 'infobar', 'intercept',
                'interrupt', 'item', 'justify', 'keep', 'kind', 'label',
                'language', 'left', 'leftmargin', 'legend', 'length', 'limit',
                'lines', 'link', 'lprefix', 'map', 'margins', 'mark', 'match',
                'memory', 'method', 'missingvalues', 'name', 'negative',
                'number', 'object', 'observed', 'offset', 'order', 'overwrite',
                'pack', 'page', 'partial', 'past', 'pause', 'pgcell', 'pierce',
                'placement', 'plot', 'position', 'positive', 'prefix', 'range',
                'remarks', 'render', 'reorder', 'replace', 'report', 'response',
                'restore', 'review', 'right', 'robiterlimit', 'scalar',
                'scatter', 'seasonal', 'see', 'series', 'shiller', 'show',
                'size', 'speed', 'squeeze', 'store', 'stringlength', 'style',
                'suffix', 'suspend', 'symbolize', 'tag', 'technique', 'text',
                'thickness', 'threed', 'tick', 'time', 'title', 'top', 'trace',
                'transform', 'trigger', 'trimvalue', 'tune', 'turn', 'type',
                'ucharacter', 'underline', 'unit', 'verify', 'view', 'wedge',
                'weights', 'width', 'window', 'xyset', 'year', 'zerovalues',
                'abs', 'acf', 'aggr', 'agr', 'all', 'alpha', 'amort', 'annpct',
                'any', 'ar', 'arima', 'arma', 'atan', 'ave', 'biwk', 'boolfmt',
                'caseorder', 'cave', 'channels', 'channeltype', 'checkaccess',
                'cmax', 'cmin', 'conname', 'corr', 'cos', 'cprod', 'created',
                'crosslist', 'csum', 'ctot', 'datefmt', 'dateof', 'dateorder',
                'day', 'db', 'dbcreated', 'dbupdated', 'diff', 'dty', 'eof',
                'errortext', 'eval', 'exists', 'exp', 'extract', 'file',
                'filespec', 'first', 'firstcase', 'firstdate', 'firstvalue',
                'font', 'fperiod', 'fyear', 'getenv', 'getid', 'growth', 'hour',
                'id', 'iniscan', 'interp', 'irr', 'largest', 'last', 'lastcase',
                'lastdate', 'lasterror', 'lastvalue', 'lave', 'lengthcase',
                'lengthdate', 'list', 'listaccess', 'lmax', 'lmedian', 'lmin',
                'location', 'log', 'log10', '', 'lookup', 'lower', 'lprod',
                'lstddev', 'lsum', 'ltrim', 'lvar', 'ma', 'magic', 'make',
                'makedate', 'mave', 'mavec', 'max', 'maxcase', 'maxdate',
                'mcorr', 'mean', 'median', 'merge', 'min', 'mincase', 'mindate',
                'minute', 'mirror', 'missing', 'mmax', 'mmedian', '', 'mmin',
                'month', 'mprod', 'mstddev', 'msum', 'mvar', '', 'nameloc',
                'nl', 'normal', 'now', 'npv', 'numfmt', 'overlay', 'pacf',
                'pad', 'payback', 'pct', 'pending', 'period', 'pixels',
                'points', 'precfmt', 'prod', 'realname', 'remeval', 'repeat',
                'reverse', 'robloc', 'robvar', 'round', 'rtrim', 'sannpct',
                'sarima', 'scan', 'screeninfo', 'script', 'second',
                'selectnames', 'shift', 'shiftmtn', 'shiftyr', 'sign', 'sin',
                'sl', 'slice', 'smallest', 'sortdata', 'sortindex', '',
                'sortname', 'source', 'special', 'sqrt', 'stddev', 'string',
                'stuff', 'substring', 'sum', 'system', 'systemerror', 'thisday',
                'today', 'trim', 'trunc', 'uniform', 'unique', 'updated',
                'upper', 'var', 'weekday', 'wildlist', 'wildnames',
                'winframeinfo', 'wininfo', 'writeacct', 'ytd', 'ytydiff',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\/\\/|\\-|-',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\%|\\+|\\-',
    'ignore_case' => true,
);
