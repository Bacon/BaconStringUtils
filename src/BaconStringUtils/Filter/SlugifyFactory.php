<?php
/**
 * BaconStringUtils
 *
 * @link      http://github.com/Bacon/BaconStringUtils For the canonical source repository
 * @copyright 2011-2014 Ben Scholzen 'DASPRiD'
 * @author    Witold Wasiczko <witold@wasiczko.pl>
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace BaconStringUtils\Filter;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Slugify Factory
 */
class SlugifyFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $slugifier = $serviceLocator->getServiceLocator()->get('BaconStringUtils\Slugifier');

        $slugify = new Slugify();
        $slugify->setSlugifier($slugifier);

        return $slugify;
    }
}
