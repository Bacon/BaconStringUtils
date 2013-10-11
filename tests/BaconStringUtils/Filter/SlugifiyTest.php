<?php
/**
 * @author Stefano Torresi (http://stefanotorresi.it)
 * @license See the file LICENSE.txt for copying permission.
 * ************************************************
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
