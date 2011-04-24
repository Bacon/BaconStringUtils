<?php
/**
 * Aine.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @category   Aine
 * @package    Aine_Text
 * @subpackage UniDecode
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

/**
 * Unicode to ASCII decoder.
 * 
 * Ported from the Python UniDecode implementation.
 * 
 * @category   Aine
 * @package    Aine_Text
 * @subpackage UniDecode
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class Aine_Text_UniDecode
{
    /**
     * Transliteration tables.
     * 
     * @var array
     */
    protected static $_tables = array();
    
    /**
     * Decode an unicode value.
     * 
     * @param  string $string
     * @param  string $charset
     * @return string
     */
    public function decode($string, $charset = 'utf-8')
    {
        $return = '';
        $string = iconv($charset, 'utf-16', $string);
        
        foreach(unpack('v*', $string) as $codepoint) {
            if ($codepoint < 0x80) {
                // Basic ASCII
                $return .= chr($codepoint);
                continue;
            }
            
            if ($codepoint > 0xeffff) {
                // Characters in Private Use Area and above are ignored
                continue;
            }
            
            $section  = $codepoint >> 8;  // Chop off the last two hex digits
            $position = $codepoint % 256; // Last two hex digits
            
            if (!isset(self::$_tables[$section])) {
                self::$_tables[$section] = include sprintf('%s/UniDecode/x%03x.php', dirname(__FILE__), $section);
            }
            
            if (isset(self::$_tables[$section][$position])) {
                $return .= self::$_tables[$section][$position];
            }
        }
        
        return $return;
    }
}