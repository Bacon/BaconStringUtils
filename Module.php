<?php
/**
 * Bacon.
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to mail@dasprids.de so I can send you a copy immediately.
 *
 * @category   Bacon
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */

namespace Bacon;

use Zend\Module\Manager,
    Zend\Config\Config,
    Zend\Loader\AutoloaderFactory;

/**
 * Module entry point.
 * 
 * @category   Bacon
 * @package    Bacon
 * @copyright  Copyright (c) 2011 Ben Scholzen <mail@dasprids.de>
 * @license    New BSD License
 */
class Module
{
    /**
     * Initiate the module.
     * 
     * @param  Manager $moduleManager 
     * @return void
     */
    public function init(Manager $moduleManager)
    {
        $this->initAutoloader();
    }

    /**
     * Initiate the autoloder.
     * 
     * @return void
     */
    protected function initAutoloader()
    {
        AutoloaderFactory::factory(array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        ));
    }
}