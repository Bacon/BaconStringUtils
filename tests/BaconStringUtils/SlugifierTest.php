<?php
/**
 * BaconStringUtils
 *
 * @link      http://github.com/Bacon/BaconStringUtils For the canonical source repository
 * @copyright 2011-2013 Ben Scholzen 'DASPRiD'
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace BaconStringUtils;

use BaconStringUtils\Slugifier;
use PHPUnit_Framework_TestCase as TestCase;

class SlugifierTest extends TestCase
{
    /**
     * @var Slugifier
     */
    protected $slugifier;

    public function setUp()
    {
        $this->slugifier = new Slugifier();
    }

    public function testSlugifying()
    {
        $this->assertEquals('hello-dont-uber-bacon-no-13', $this->slugifier->slugify('Hello, don\'t "Über"-Bacon No. 13###'));
    }

    public function testUnidecoderSetter()
    {
        $decoder = $this->getMock('BaconStringUtils\UniDecoder');

        $this->slugifier->setUniDecoder($decoder);

        $this->assertSame($decoder, $this->slugifier->uniDecoder());

        set_error_handler(function($code, $message){
            throw new \InvalidArgumentException($message);
        });

        $fakeDecoder = new \stdClass();

        try {
            $this->slugifier->setUniDecoder($fakeDecoder);
            $this->fail("Setting a wrong type was successful");
        } catch (\Exception $e) {
            $this->assertInstanceOf('InvalidArgumentException', $e);
            $this->assertContains('must be an instance of BaconStringUtils\UniDecoder', $e->getMessage());
        }
    }

    public function testDefaultUnidecoderSetter()
    {
        $decoder = $this->getMock('BaconStringUtils\UniDecoder');

        $this->slugifier->setDefaultUniDecoder($decoder);

        $this->assertSame($decoder, $this->slugifier->uniDecoder());

        set_error_handler(function($code, $message){
            throw new \InvalidArgumentException($message);
        });

        $fakeDecoder = new \stdClass();

        try {
            $this->slugifier->setDefaultUniDecoder($fakeDecoder);
            $this->fail("Setting a wrong type was successful");
        } catch (\Exception $e) {
            $this->assertInstanceOf('InvalidArgumentException', $e);
            $this->assertContains('must be an instance of BaconStringUtils\UniDecoder', $e->getMessage());
        }
    }
}
