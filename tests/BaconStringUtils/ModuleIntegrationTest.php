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
use Zend\Mvc\Service\ServiceManagerConfig;
use Zend\ServiceManager\ServiceManager;

class ModuleIntegrationTest extends TestCase
{
    public $moduleManager;
    public $serviceManager;

    public function setUp()
    {
        $this->serviceManager = new ServiceManager(new ServiceManagerConfig());
        $this->serviceManager->setService(
            'ApplicationConfig',
            array(
                'module_listener_options' => array(),
                'modules' => array('BaconStringUtils'),
            )
        );

        /** @var $moduleManager \Zend\ModuleManager\ModuleManager */
        $this->moduleManager = $this->serviceManager->get('ModuleManager');
        $this->moduleManager->loadModules();
    }

    public function testFilterProvider()
    {
        $filterFromAlias = $this->serviceManager->get('FilterManager')->get('slugify');
        $this->assertInstanceOf('BaconStringUtils\Filter\Slugify', $filterFromAlias);

        $filterFromFactory = $this->serviceManager->get('FilterManager')->get('BaconStringUtils\Filter\Slugify');
        $this->assertInstanceOf('BaconStringUtils\Filter\Slugify', $filterFromFactory);
    }

    public function testServiceProvider()
    {
        $unidecoderFromInvocables = $this->serviceManager->get('BaconStringUtils\UniDecoder');
        $this->assertInstanceOf('BaconStringUtils\UniDecoder', $unidecoderFromInvocables);

        $slugifierFromFactories = $this->serviceManager->get('BaconStringUtils\Slugifier');
        $this->assertInstanceOf('BaconStringUtils\Slugifier', $slugifierFromFactories);
    }
}
