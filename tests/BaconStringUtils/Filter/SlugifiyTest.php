<?php
/**
 * BaconStringUtils
 *
 * @link      http://github.com/Bacon/BaconStringUtils For the canonical source repository
 * @copyright 2011-2013 Ben Scholzen 'DASPRiD'
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace BaconStringUtils\Filter;

use PHPUnit_Framework_TestCase as TestCase;

class SlugifiyTest extends TestCase
{
    public function testFilter()
    {
        $filter = new Slugify();
        $this->assertEquals('foo-bar', $filter->filter('Foo Bar'));
    }
}
