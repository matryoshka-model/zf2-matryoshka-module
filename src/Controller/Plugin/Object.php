<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2015, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace Matryoshka\Module\Controller\Plugin;

use Matryoshka\Model\Object\ObjectManager;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class Object
 */
class Object extends AbstractPlugin
{
    /**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * @param ObjectManager $objectManager
     */
    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Get Object Manager
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

    /**
     * Get an object instance by name
     *
     * @param $name
     * @param array $options
     * @return object
     */
    public function get($name, $options = [])
    {
        return $this->getObjectManager()->get($name, $options = []);
    }

    /**
     * Invoke
     *
     * @return $this
     */
    public function __invoke()
    {
        return $this;
    }
}
