<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace Matryoshka\Module\Controller\Plugin;

use Matryoshka\Model\ModelManager;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class Object
 */
class Object extends AbstractPlugin
{
    /**
     * Models
     * @var ServiceLocatorInterface
     */
    protected $objectManager;

    /**
     * @param ServiceLocatorInterface $objectManager
     */
    public function __construct(ServiceLocatorInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Get Model Manager
     * @return ModelManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

    /**
     * Get
     * @param $name
     * @return object
     */
    public function get($name)
    {
        return $this->getObjectManager()->get($name);
    }

    /**
     * Invoke
     * @return self
     */
    public function __invoke()
    {
        return $this;
    }
}
