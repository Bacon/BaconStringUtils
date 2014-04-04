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
use PHPUnit_Framework_Error as ErrorException;
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
        $this->assertEquals(
            'hello-dont-uber-bacon-no-13',
            $this->slugifier->slugify('Hello, don\'t "Über"-Bacon No. 13###')
        );
    }

    public function testUnidecoderSetter()
    {
        $decoder = $this->getMock('BaconStringUtils\UniDecoder');
        $this->slugifier->setUniDecoder($decoder);
        $this->assertSame($decoder, $this->slugifier->uniDecoder());

        try {
            $this->slugifier->setUniDecoder(new \stdClass());
            $this->fail('Setting a wrong type was successful');
        } catch (ErrorException $e) {
            $this->assertContains('must be an instance of BaconStringUtils\UniDecoder', $e->getMessage());
        }
    }

    public function testDefaultUnidecoderSetter()
    {
        $decoder = $this->getMock('BaconStringUtils\UniDecoder');
        Slugifier::setDefaultUniDecoder($decoder);
        $this->assertSame($decoder, $this->slugifier->uniDecoder());

        try {
            Slugifier::setDefaultUniDecoder(new \stdClass());
            $this->fail('Setting a wrong type was successful');
        } catch (ErrorException $e) {
            $this->assertContains('must be an instance of BaconStringUtils\UniDecoder', $e->getMessage());
        }
    }
}
