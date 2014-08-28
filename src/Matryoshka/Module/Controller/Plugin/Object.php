<?php
/**
 * Created by visa
 * Date:  28/08/14 17.39
 * Class: Object.php
 */

namespace Matryoshka\Module\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\ServiceManager\ServiceLocatorInterface;

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
     * @param string $name
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