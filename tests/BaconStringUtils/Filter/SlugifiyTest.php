<?php
/**
 * BaconStringUtils
 *
 * @link      http://github.com/Bacon/BaconStringUtils For the canonical source repository
 * @copyright 2011-2014 Ben Scholzen 'DASPRiD'
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace BaconStringUtils\Filter;

use PHPUnit_Framework_TestCase as TestCase;

class SlugifiyTest extends TestCase
{
    protected $filter;


    protected function setUp()
    {
        $this->filter = new Slugify();
        $decoder = $this->getMock('\BaconStringUtils\UniDecoder');
        $decoder->expects($this->any())->method('decode')->will($this->returnValue('Foo Bar'));

        $this->filter->setUniDecoder($decoder);
    }

    public function testFilter()
    {
        $this->assertEquals('foo-bar', $this->filter->filter('Foo Bar'));
    }
}
