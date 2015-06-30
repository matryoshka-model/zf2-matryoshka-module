<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2015, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace MatryoshkaModuleTest\Module\Controller\Plugin\Service;

use Matryoshka\Model\ModelManager;
use Matryoshka\Module\Controller\Plugin\Service\ModelFactory;
use Zend\Mvc\Controller\PluginManager;
use Zend\ServiceManager\ServiceManager;

/**
 * Class ModelFactoryTest
 */
class ModelFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ServiceManager
     */
    protected $sm;

    /**
     * @var ModelManager
     */
    protected $mm;

    /**
     * @var PluginManager
     */
    protected $pm;

    /**
     * @var ModelFactory
     */
    protected $factory;

    public function setUp()
    {
        $this->sm = new ServiceManager();
        $this->mm = new ModelManager();
        $this->pm = new PluginManager();
        $this->factory = new ModelFactory();
    }

    public function testCreateService()
    {
        $this->sm->setService('Matryoshka\Model\ModelManager', $this->mm);
        $this->pm->setServiceLocator($this->sm);
        $model = $this->factory->createService($this->pm);
        $this->assertInstanceOf('Matryoshka\Module\Controller\Plugin\Model', $model);
    }

    /**
     * @expectedException \Zend\ServiceManager\Exception\ServiceNotCreatedException
     */
    public function testCreateServiceWithoutModelManager()
    {
        $this->pm->setServiceLocator($this->sm);
        $this->factory->createService($this->pm);
    }

    /**
     * @expectedException \Zend\ServiceManager\Exception\ServiceNotCreatedException
     */
    public function testCreateServiceWithoutApplicationServiceManager()
    {
        $this->factory->createService($this->pm);
    }
}
