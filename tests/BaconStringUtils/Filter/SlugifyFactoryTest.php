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

class SlugifyFactoryTest extends TestCase
{
    protected $factory;

    protected function setUp()
    {
        $this->factory = new SlugifyFactory();
    }

    public function testFactoryImplementsIterface()
    {
        $this->assertInstanceOf('Zend\ServiceManager\FactoryInterface', $this->factory);
    }

    public function testReturnsFilter()
    {
        $serviceLocator = $this->getServiceLocator();

        $this->assertInstanceOf('BaconStringUtils\Filter\Slugify', $this->factory->createService($serviceLocator));
    }

    public function testReturnsFilterWithSlugifier()
    {
        $serviceLocator = $this->getServiceLocator();
        $slugify = $this->factory->createService($serviceLocator);
        $slugifier = $slugify->getSlugifier();

        $this->assertInstanceOf('BaconStringUtils\Slugifier', $slugifier);
    }

    protected function getServiceLocator()
    {
        $slugifier = $this->getMock('BaconStringUtils\Slugifier');

        $serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');
        $serviceLocator->expects($this->any())
                ->method('get')
                ->with('BaconStringUtils\Slugifier')
                ->will($this->returnValue($slugifier));


        $pluginManager = $this->getMock('Zend\Filter\FilterPluginManager');
        $pluginManager->expects($this->any())->method('getServiceLocator')->will($this->returnValue($serviceLocator));

        return $pluginManager;
    }
}
