<?php
/**
 * BaconStringUtils
 *
 * @link      http://github.com/Bacon/BaconStringUtils For the canonical source repository
 * @copyright 2011-2014 Ben Scholzen 'DASPRiD'
 * @author Witold Wasiczko <witold@wasiczko.pl>
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace BaconStringUtils;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Slugifier Factory
 */
class SlugifierFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $decoder = $serviceLocator->get('BaconStringUtils\UniDecoder');
        $slugifier = new Slugifier();
        $slugifier->setUniDecoder($decoder);

        return $slugifier;
    }
}
