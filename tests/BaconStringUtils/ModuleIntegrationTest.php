<?php

namespace BaconStringUtils;

use PHPUnit_Framework_TestCase as TestCase;
use Zend\ModuleManager\ModuleManager;
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
        $filter = $this->serviceManager->get('FilterManager')->get('slugify');

        $this->assertInstanceOf('BaconStringUtils\Filter\Slugify', $filter);
    }
}
