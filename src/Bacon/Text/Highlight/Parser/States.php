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
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

/**
 * @namespace
 */
namespace Bacon\Text\Highlight\Parser;

/**
 * Parser states.
 * 
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage Highlight
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class States
{
    const STANDARD         = 0;
    const STRING           = 1;
    const NUMBER           = 2;
    const SL_COMMENT       = 3;
    const ML_COMMENT       = 4;
    const ESC_CHAR         = 5;
    const DIRECTIVE        = 6;
    const DIRECTIVE_STRING = 7;
    const LINENUMBER       = 8;
    const SYMBOL           = 9;
    const KEYWORD          = 10;
    
    const IDENTIFIER_BEGIN    = 30;
    const IDENTIFIER_END      = 31;
    const EMBEDDED_CODE_BEGIN = 32;
    const EMBEDDED_CODE_END   = 33;
    
    const _EOL = 90;
    const _EOF = 91;
    const _WS  = 92;
}