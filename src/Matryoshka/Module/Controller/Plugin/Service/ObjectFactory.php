<?php

namespace Matryoshka\Module\Controller\Plugin\Service;

use Matryoshka\Module\Controller\Plugin\Object;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;

class ObjectFactory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     *
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

        $objects = $services->get('Matryoshka\Model\Object\ObjectManager');
        return new Object($objects);
    }
}
