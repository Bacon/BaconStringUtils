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
    'description' => 'Matlab',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'assignin', 'break', 'case', 'catch', 'cell', 'char', 'class',
                'dbclear', 'dbcont', 'dbdown', 'dbquit', 'dbstack', 'dbstatus',
                'dbstep', 'dbstop', 'dbtype', 'dbup', 'debug', 'double', 'else',
                'elseif', 'end', 'error', 'eval', 'evalin', 'feval',
                'fieldnames', 'for', 'function', 'getfield', 'global', 'if',
                'input', 'isa', 'iscell', 'ischar', 'isempty', 'isequal',
                'isfield', 'isnumeric', 'isstruct', 'keyboard', 'lasterr',
                'logical', 'length', 'long', 'menu', 'mexdebug', 'nargchk',
                'nargin', 'nargout', 'ones', 'otherwise', 'pause', 'persistent',
                'return', 'rmfield', 'script', 'setfield', 'sparse', 'speye',
                'struct', 'switch', 'try', 'varargin', 'varargout', 'while',
                'acsl', 'binpatch', 'cd', 'cedit', 'clc', 'clear', 'computer',
                'delete', 'diary', 'dir', 'disp', 'doc', 'dos', 'echo',
                'fileparts', 'format', 'fullfile', 'getenv', 'help', 'home',
                'hostid', 'info', 'inquire', 'load', 'lookfor', 'ls',
                'matlabro', 'memory', 'mlock', 'more', 'munlock', 'mislocked',
                'pack', 'path', 'pwd', 'quit', 'readme', 'save', 'size',
                'subscrib', 'type', 'unix', 'ver', 'version', 'vms', 'what',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'abs', 'acos', 'acosh', 'acot', 'acoth', 'acsc', 'acsch',
                'angle', 'asec', 'asech', 'asin', 'asinh', 'atan', 'atan2',
                'atanh', 'ceil', 'conj', 'cos', 'cosh', 'cot', 'coth', 'csc',
                'csch', 'exp', 'fix', 'floor', 'imag', 'log', 'log10', 'real',
                'rem', 'round', 'sec', 'sech', 'sign', 'sin', 'sinh', 'sqrt',
                'tan', 'tanh', 'auread', 'auwright', 'axes', 'axis', 'blt',
                'capture', 'cinvert', 'cla', 'clf', 'clg', 'close', 'colstyle',
                'dc2sc', 'dialog', 'drawnow', 'errordlg', 'figflag', 'figure',
                'findobj', 'gca', 'gcf', 'gco', 'get', 'getframe', 'ginput',
                'graymon', 'hardcopy', 'helpdlg', 'hold', 'image', 'imagesc',
                'imfinfo', 'imread', 'imwright', 'ishold', 'layout', 'meta',
                'movie', 'moviein', 'newplot', 'orient', 'patch', 'print',
                'questdlg', 'rbbox', 'refresh', 'reset', 'rotate', 'sc2dc',
                'set', 'shg', 'sound', 'soundsc', 'subplot', 'swapprev',
                'terminal', 'uicontrol', 'uigetfile', 'uiguide', 'uimenu',
                'uiputfile', 'uisetcolor', 'uisetfont', 'waitforbuttonpress',
                'warndlg', 'wavread', 'wavwright', 'whitebg', 'zoom', 'all',
                'any', 'arith', 'balance', 'bar', 'blanks', 'bone', 'brighten',
                'caxis', 'cdf2rdf', 'chol', 'clabel', 'cmdmatch', 'colon',
                'colorbar', 'colormap', 'comet', 'comet3', 'compass', 'cond',
                'contour', 'contour3', 'contourc', 'contrast', 'conv', 'conv2',
                'cool', 'copper', 'corrcoef', 'cov', 'cplxpair', 'cross',
                'csvread', 'csvwrite', 'cumprod', 'cumsum', 'cylinder',
                'deblank', 'dec2hex', 'deconv', 'del2', 'delstext', 'det',
                'diff', 'diffuse', 'dlmread', 'dlmwrite', 'dot', 'eig',
                'errorbar', 'exist', 'expm', 'expm1', 'expm2', 'expm3',
                'fclose', 'feather', 'feof', 'ferror', 'fft', 'fft2',
                'fftshift', 'fgetl', 'fgets', 'filesep', 'fill', 'fill3',
                'filter', 'filter2', 'find', 'findstr', 'finite', 'fixstext',
                'flag', 'fmin', 'fmins', 'fopen', 'foptions', 'fplot',
                'fprintf', 'fread', 'frewind', 'fscanf', 'fseek', 'ftell',
                'funm', 'fwrite', 'fzero', 'getcargs', 'getstext', 'gradient',
                'gray', 'grid', 'griddata', 'gtext', 'hess', 'hex2dec',
                'hex2num', 'hdf', 'hidden', 'hist', 'hk', 'hot', 'hsv',
                'hsv2rgb', 'icubic', 'ifft', 'ifft2', 'int2str', 'interp1',
                'interp2', 'interp3', 'interp4', 'interp5', 'interp6',
                'interpft', 'inv', 'isglobal', 'isinf', 'isletter', 'isnan',
                'isreal', 'isspace', 'isstr', 'jet', 'kron', 'legend', 'line',
                'loglog', 'logm', 'lower', 'lscan', 'lscov', 'lu', 'mat2str',
                'matlabroot', 'max', 'mean', 'median', 'mesh', 'meshc', 'meshz',
                'mexext', 'min', 'mkpp', 'move1sto', 'moveaxis', 'nextpow2',
                'nnls', 'norm', 'null', 'num2str', 'ode23', 'ode23p', 'ode45',
                'orth', 'paren', 'partialpath', 'pathsep', 'pcolor', 'pink',
                'pinv', 'planerot', 'plot', 'plot3', 'polar', 'poly', 'polyder',
                'polyeig', 'polyfit', 'polyline', 'polymark', 'polyval',
                'polyvalm', 'ppval', 'printsto', 'prism', 'prod', 'punct', 'qr',
                'qrdelete', 'qrinsert', 'quad', 'quad8', 'quad8stp', 'quadstp',
                'quiver', 'qz', 'rank', 'rcond', 'readstfm', 'relop', 'resi2',
                'residue', 'rgb2hsv', 'rgbplot', 'roots', 'rose', 'rref',
                'rsf2csf', 'schur', 'semilogx', 'semilogy', 'setstext',
                'setstr', 'shading', 'slash', 'slegend', 'slice', 'sort',
                'specular', 'sphere', 'spinmap', 'spline', 'spreview',
                'sprintf', 'sqrtm', 'sscanf', 'stairs', 'std', 'stem', 'stext',
                'stextbox', 'stfixps', 'stitle', 'stodemo', 'str2mat',
                'str2num', 'str2rng', 'strcmp', 'strings', 'strrep', 'strtok',
                'subspace', 'sum', 'surf', 'surface', 'surfc', 'surfl',
                'surfnorm', 'svd', 'sxlabel', 'sylabel', 'szlabel', 'table1',
                'table2', 'tempdir', 'tempname', 'text', 'title', 'trace',
                'trapz', 'unmkpp', 'unwrap', 'upper', 'view', 'viewmtx',
                'waterfall', 'white', 'wk1const', 'wk1read', 'wk1wrec',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '%',
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
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\+|\\-',
    'ignore_case' => true,
);
