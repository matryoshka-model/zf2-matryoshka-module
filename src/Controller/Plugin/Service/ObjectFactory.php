<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2015, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace Matryoshka\Module\Controller\Plugin\Service;

use Matryoshka\Module\Controller\Plugin\Object;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ObjectFactory
 */
class ObjectFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $plugins
     * @return Object
     * @throws ServiceNotCreatedException if ModelManager service is not found in application service locator
     */
    public function createService(ServiceLocatorInterface $plugins)
    {
        $services = $plugins->getServiceLocator();
        if (!$services instanceof ServiceLocatorInterface) {
            throw new ServiceNotCreatedException(sprintf(
                '%s requires that the application service manager has been injected; none found',
                __CLASS__
            ));
        }

        if (!$services->has('Matryoshka\Model\Object\ObjectManager')) {
            throw new ServiceNotCreatedException(sprintf(
                '%s requires that the application service manager contains a "%s" service; none found',
                __CLASS__,
                'Matryoshka\Model\Object\ObjectManager'
            ));
        }

        /** @var $objects \Matryoshka\Model\Object\ObjectManager */
        $objects = $services->get('Matryoshka\Model\Object\ObjectManager');
        return new Object($objects);
    }
}
