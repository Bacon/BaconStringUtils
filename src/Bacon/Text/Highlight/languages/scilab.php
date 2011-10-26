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
    'description' => 'Scilab',
    'keywords' => array(
        array(
            'id' => 1,
            'list' => array(
                'abort', 'ans', 'backslash', 'bool2s', 'boolean', 'brackets',
                'break', 'call', 'case', 'clear', 'clearglobal', 'colon',
                'comma', 'comments', 'continue', 'date', 'debug',
                'definedfields', 'do', 'dot', 'else', 'elseif', 'empty', 'end',
                'equal', 'errcatch', 'errclear', 'error', 'etime', 'evstr',
                'exec', 'execstr', 'exists', 'exit', 'external', 'extraction',
                'feval', 'find', 'for', 'format', 'fort', 'funptr', 'getdate',
                'getenv', 'getfield', 'getpid', 'getversion', 'global',
                'gstacksize', 'hat', 'host', 'hypermat', 'hypermatrices',
                'iconvert', 'ieee', 'if', 'insertion', 'intppty', 'inttype',
                'inv_coeff', 'iserror', 'isglobal', 'lasterror', 'left', 'less',
                'list', 'lsslist', 'lstcat', 'matrices', 'matrix', 'mlist',
                'mode', 'mtlb_mode', 'names', 'null', 'overloading', 'parents',
                'pause', 'percent', 'plus', 'poly', 'power', 'predef', 'pwd',
                'quit', 'quote', 'rational', 'resume', 'return', 'rlist',
                'sciargs', 'select', 'semi', 'semicolon', 'setenv', 'setfield',
                'slash', 'stacksize', 'star', 'symbols', 'testmatrix', 'then',
                'tic', 'tilda', 'tlist', 'toc', 'type', 'typename', 'user',
                'varn', 'what', 'whatis', 'where', 'whereami', 'whereis',
            ),
        ),
        array(
            'id' => 2,
            'list' => array(
                'abs', 'acos', 'acosh', 'acoshm', 'acosm', 'addf', 'adj2sp',
                'amell', 'and', 'asin', 'asinh', 'asinhm', 'asinm', 'atan',
                'atanh', 'atanhm', 'atanm', 'bessel', 'beta', 'binomial',
                'bloc2exp', 'bloc2ss', 'bsplin3val', 'calerf', 'ceil',
                'cell2mat', 'cellstr', 'char', 'cmb_lin', 'conj', 'cos', 'cosh',
                'coshm', 'cosm', 'cotg', 'coth', 'cothm', 'cshep2d', 'cumprod',
                'cumsum', 'delip', 'diag', 'diff', 'dlgamma', 'double',
                'dsearch', 'erf', 'erfc', 'erfcx', 'eval', 'eval_cshep2d',
                'eye', 'fix', 'floor', 'frexp', 'full', 'gamma', 'gammaln',
                'gsort', 'imag', 'imult', 'ind2sub', 'int', 'int8', 'integrate',
                'interp', 'interp1', 'interp2d', 'interp3d', 'interpln',
                'intersect', 'intsplin', 'inttrap', 'isdef', 'isempty',
                'isequal', 'isinf', 'isnan', 'isreal', 'kron', 'ldivf',
                'legendre', 'lex_sort', 'linear_interpn', 'linspace', 'log',
                'log10', 'log1p', 'log2', 'logm', 'logspace', 'lsq_splin',
                'lstsize', 'max', 'maxi', 'min', 'mini', 'minus', 'modulo',
                'mps2linpro', 'mtlb_sparse', 'mulf', 'ndgrid', 'ndims',
                'nearfloat', 'nextpow2', 'nnz', 'norm', 'not',
                'number_properties', 'oldbessel', 'ones', 'or', 'pen2ea',
                'pertrans', 'prod', 'rand', 'rat', 'rdivf', 'real', 'round',
                'setdiff', 'sign', 'signm', 'sin', 'sinc', 'sinh', 'sinhm',
                'sinm', 'size', 'smooth', 'solve', 'sort', 'sp2adj', 'sparse',
                'spcompack', 'speye', 'spget', 'splin', 'splin2d', 'splin3d',
                'spones', 'sprand', 'spzeros', 'sqrt', 'sqrtm', 'squarewave',
                'ssprint', 'ssrand', 'sub2ind', 'subf', 'sum', 'sysconv',
                'sysdiag', 'syslin', 'tan', 'tanh', 'tanhm', 'tanm', 'toeplitz',
                'trfmod', 'trianfml', 'tril', 'trisolve', 'triu', 'typeof',
            ),
        ),
    ),
    'comments' => array(
        array(
            'block' => false,
            'delimiter' => array(
                'open' => '\\/\\/',
            ),
        ),
    ),
    'strings' => array(
        'delimiter' => '\"|\'',
    ),
    'operators' => '\\(|\\)|\\[|\\]|\\{|\\}|\\,|\\;|\\:|\\&|\\<|\\>|\\!|\\=|\\/|\\*|\\+|\\-|\\.|\\^',
    'ignore_case' => false,
);
