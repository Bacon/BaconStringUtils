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
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

/**
 * @see Aine_Text_UniDecode
 */
require_once 'Aine/Text/UniDecode.php';

/**
 * @category   Aine
 * @package    Aine_Text
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class Aine_Text_UniDecodeTest extends PHPUnit_Framework_TestCase
{
    protected $_decoder;
    
    public function setUp()
    {
        $this->_decoder = new Aine_Text_UniDecode();
    }

    public function testAscii()
    {
        for ($i = 0; $i < 128; $i++) {
            $char = $this->_uniChar($i);
            
            $this->assertEquals($char, $this->_decoder->decode($char));
        }
    }
    
    public function testBmp()
    {
        // Just check that it doesn't throw an exception
        for ($i = 0; $i < 0x10000; $i++) {
            $this->_decoder->decode($this->_uniChar($i));
        }
    }

    public function testCircledLatin()
    {
        // 1 sequence of a-z
        for ($i = 0; $i < 26; $i++) {
            $a = $this->_uniChar(ord('a') + $i);
            $b = $this->_decoder->decode($this->_uniChar(0x24d0 + $i));
            
            $this->assertEquals($a, $b);
        }
    }

    public function testMathematicalLatin()
    {
        // 13 consecutive sequences of A-Z, a-z with some codepoints
        // undefined. We just count the undefined ones and don't check
        // positions.
        $empty = 0;
        
        for ($i = 0x1d400; $i < 0x1d6a4; $i++) {
            if ($i % 52 < 26) {
                $a = $this->_uniChar(ord('A') + $i % 26);
            } else {
                $a = $this->_uniChar(ord('a') + $i % 26);
            }
            
            $b = $this->_decoder->decode($this->_uniChar($i));

            if ($b === '') {
                $empty++;
            } else {
                $this->assertEquals($a, $b);
            }
        }
        
        $this->assertEquals(24, $empty);
    }
        
    public function testMathematicalDigits()
    {
        // 5 consecutive sequences of 0-9
        for ($i = 0x1d7ce; $i < 0x1d800; $i++) {
            $a = $this->_uniChar(ord('0') + ($i - 0x1d7ce) % 10);
            $b = $this->_decoder->decode($this->_uniChar($i));
            
            $this->assertEquals($a, $b);
        }
    }
    
    public function testSpecific()
    {
        $tests = array(
            array(
                'Hello, World!',
                'Hello, World!'
            ),
            array(
                "'\"\r\n",
                "'\"\r\n"
            ),
            array(
                'ČŽŠčžš',
                'CZSczs'
            ),
            array(
                'ア',
                'a'
            ),
            array(
                'α',
                'a'
            ),
            array(
                'а',
                'a'
            ),
            array(
                'ch' . $this->_uniChar(0xe2) . 'teau',
                'chateau'
            ),
            array(
                'vi' . $this->_uniChar(0xf1) . 'edos',
                'vinedos'
            ),
            array(
                $this->_uniChar(0x5317) . $this->_uniChar(0x4eb0),
                'Bei Jing '
            ),
            array(
                'Efﬁcient',
                'Efficient'
            ),
            array(
                'příliš žluťoučký kůň pěl ďábelské ódy',
                'prilis zlutoucky kun pel dabelske ody'
            ),
            array(
                'PŘÍLIŠ ŽLUŤOUČKÝ KŮŇ PĚL ĎÁBELSKÉ ÓDY',
                'PRILIS ZLUTOUCKY KUN PEL DABELSKE ODY'
            ),
            // Table that doesn't exist
            array(
                $this->_uniChar(0xa500),
                ''
            ),
            // Table that has less than 256 entriees
            array(
                $this->_uniChar(0x1eff),
                ''
            ),
        );
        
        foreach ($tests as $test) {
            $this->assertEquals($test[1], $this->_decoder->decode($test[0]));
        }
    }

    public function testSpecificWide()
    {
        $tests = array(
            // Non-BMP character
            array(
                $this->_uniChar(0x0001d5a0),
                'A'
            ),
            // Mathematical
            array(
                $this->_uniChar(0x0001d5c4) . $this->_uniChar(0x0001d5c6) . '/' . $this->_uniChar(0x0001d5c1),
                'km/h'
            ),
        );
        
        foreach ($tests as $test) {
            $this->assertEquals($test[1], $this->_decoder->decode($test[0]));
        }
    }

    /**
     * Convert a unicode codepoint to an utf-8 character.
     *
     * @param  integer $code
     * @return string
     */
    protected function _uniChar($code)
    {
        if ($code <= 0x7f) {
            $char = chr($code);
        } else if ($code <= 0x7ff) {
            $char = chr(0xc0 | $code >> 6)
                  . chr(0x80 | $code & 0x3f);
        } else if ($code <= 0xffff) {
            $char =  chr(0xe0 | $code >> 12)
                  . chr(0x80 | $code >> 6 & 0x3f)
                  . chr(0x80 | $code & 0x3f);
        } else if ($code <= 0x10ffff) {
            $char =  chr(0xf0 | $code >> 18)
                  . chr(0x80 | $code >> 12 & 0x3f)
                  . chr(0x80 | $code >> 6 & 0x3f)
                  . chr(0x80 | $code & 0x3f);
        } else {
            return null;
        }

        return $char;
    }
}