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

class SlugifyTest extends TestCase
{
    protected $filter;

    protected function setUp()
    {
        $slugifer = $this->getMock('BaconStringUtils\Slugifier');
        $slugifer->expects($this->any())->method('slugify')->with('Foo Bar')->will($this->returnValue('foo-bar'));

        $this->filter = new Slugify();
        $this->filter->setSlugifier($slugifer);
    }

    public function testFilter()
    {
        $this->assertEquals('foo-bar', $this->filter->filter('Foo Bar'));
    }
}
