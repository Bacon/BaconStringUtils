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
 * @subpackage Slugifier
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

/**
 * @namespace
 */
namespace Bacon\Text;

use Bacon\Text\UniDecode;

/**
 * Slugifier.
 * 
 * @category   Bacon
 * @package    Bacon_Text
 * @subpackage Slugifier
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class Slugifier
{
    /**
     * Default UniDecoder instance.
     * 
     * @var UniDecode
     */
    protected static $defaultUniDecoder;
    
    /**
     * UniDecoder instance.
     * 
     * @var UniDecode
     */
    protected $uniDecoder;
    
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
     * @return UniDecode 
     */
    public function uniDecoder()
    {
        if ($this->uniDecoder === null) {
            if (self::$defaultUniDecoder === null) {
                self::$defaultUniDecoder = new UniDecode();
            }
            
            $this->uniDecoder = self::$defaultUniDecoder;
        }
        
        return $this->uniDecoder;
    }
    
    /**
     * Set the uni decoder.
     *
     * @param  UniDecode $decoder
     * @return void
     */
    public function setUniDecoder(UniDecode $decoder)
    {
        $this->uniDecoder = $decoder;
    }

    /**
     * Set the default uni decoder.
     *
     * @param  UniDecode $decoder
     * @return void
     */
    public static function setDefaultUniDecoder(UniDecode $decoder)
    {
        self::$defaultUniDecoder = $decoder;
    }
}
