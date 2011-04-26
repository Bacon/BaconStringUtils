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
 * @subpackage Slugifier
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

/**
 * @see Aine_Text_UniDecode
 */
require_once 'Aine/Text/UniDecode.php';

/**
 * Slugifier.
 * 
 * @category   Aine
 * @package    Aine_Text
 * @subpackage Slugifier
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class Aine_Text_Slugifier
{
    /**
     * Default UniDecoder instance.
     * 
     * @var Aine_Text_UniDecode
     */
    protected static $_defaultUniDecoder;
    
    /**
     * UniDecoder instance.
     * 
     * @var Aine_Text_UniDecode
     */
    protected $_uniDecoder;
    
    /**
     * Slugify a string.
     * 
     * @param  string $string
     * @return string
     */
    public function slugify($string)
    {
        $string = $this->getUniDecoder()->decode($string);
        $string = strtolower($string);
        $string = str_replace("'", '', $string);
        $string = preg_replace('([^a-zA-Z0-9_-]+)', '-', $string);
        $string = preg_replace('(-{2,})', '-', $string);
        $string = trim($string, '-');
        
        return $string;
    }
    
    /**
     * Get the uni decoder.
     * 
     * @return Aine_Text_UniDecode 
     */
    public function getUniDecoder()
    {
        if ($this->_uniDecoder === null) {
            if (self::$_defaultUniDecoder === null) {
                self::$_defaultUniDecoder = new Aine_Text_UniDecode();
            }
            
            $this->_uniDecoder = self::$_defaultUniDecoder;
        }
        
        return $this->_uniDecoder;
    }
    
    /**
     * Set the uni decoder.
     *
     * @param  Aine_Text_UniDecode $decoder
     * @return void
     */
    public function setUniDecoder(Aine_Text_UniDecode $decoder)
    {
        $this->_uniDecoder = $decoder;
    }

    /**
     * Set the default uni decoder.
     *
     * @param  Aine_Text_UniDecode $decoder
     * @return void
     */
    public static function setDefaultUniDecoder(Aine_Text_UniDecode $decoder)
    {
        self::$_defaultUniDecoder = $decoder;
    }
}
