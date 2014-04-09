<?php
/**
 * BaconStringUtils
 *
 * @link      http://github.com/Bacon/BaconStringUtils For the canonical source repository
 * @copyright 2011-2014 Ben Scholzen 'DASPRiD'
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

    public function testSlugifyingWithoutDecoder()
    {
        $this->assertEquals(
            'hello-dont-ber-bacon-no-13',
            $this->slugifier->slugify('Hello, don\'t "Über"-Bacon No. 13###')
        );
    }

    public function testSlugifying()
    {
        $this->assertEquals(
            'hello-longname-without-whitespaces-but-can-be-slugified',
            $this->slugifier->slugify('  hello | "" longname*without*whitespaces#but!can<be?slugified   --  + =')
        );
        $this->assertEquals(
            'line-break2',
            $this->slugifier->slugify("line\n break2")
        );
    }

    public function testSlugifyingWithDecoder()
    {
        $decoder = $this->getMock('BaconStringUtils\UniDecoder');
        $decoder->expects($this->any())
                ->method('decode')
                ->will($this->returnValue('Hello, don\'t "Uber"-Bacon No. 13###'));

        $this->slugifier->setUniDecoder($decoder);

        $this->assertEquals(
            'hello-dont-uber-bacon-no-13',
            $this->slugifier->slugify('Hello, don\'t "Über"-Bacon No. 13###')
        );
    }

    public function testUnidecoderSetter()
    {
        $this->assertNull($this->slugifier->getUniDecoder());
        $decoder = $this->getMock('BaconStringUtils\UniDecoder');
        $this->slugifier->setUniDecoder($decoder);
        $this->assertSame($decoder, $this->slugifier->getUniDecoder());

        try {
            $this->slugifier->setUniDecoder(new \stdClass());
            $this->fail('Setting a wrong type was successful');
        } catch (ErrorException $e) {
            $this->assertContains('must be an instance of BaconStringUtils\UniDecoder', $e->getMessage());
        }
    }
}
