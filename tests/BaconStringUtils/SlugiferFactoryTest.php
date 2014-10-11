<?php
/**
 * BaconStringUtils
 *
 * @link      http://github.com/Bacon/BaconStringUtils For the canonical source repository
 * @copyright 2011-2014 Ben Scholzen 'DASPRiD'
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace BaconStringUtils;

use PHPUnit_Framework_TestCase as TestCase;

class SlugiferFactoryTest extends TestCase
{
    /**
     * @var SlugifierFactory
     */
    protected $factory;

    protected function setUp()
    {
        $this->factory = new SlugifierFactory();
    }

    public function testFactoryImplementsInterface()
    {
        $this->assertInstanceOf('Zend\ServiceManager\FactoryInterface', $this->factory);
    }

    public function testReturnsSlugifierAndUniDecoder()
    {
        $serviceLocator = $this->getServiceLocator();
        $slugifier = $this->factory->createService($serviceLocator);

        $this->assertInstanceOf('BaconStringUtils\Slugifier', $slugifier);
        $this->assertInstanceOf('BaconStringUtils\UniDecoder', $slugifier->getUniDecoder());
    }

    protected function getServiceLocator()
    {
        $decoderMock = $this->getMock('BaconStringUtils\UniDecoder');
        $serviceLocator = $this->getMock('\Zend\ServiceManager\ServiceLocatorInterface');
        $serviceLocator->expects($this->any())
                ->method('get')
                ->with('BaconStringUtils\UniDecoder')
                ->will($this->returnValue($decoderMock));

        return $serviceLocator;
    }
}
