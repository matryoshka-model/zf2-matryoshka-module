<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace MatryoshkaTest\Module\Controller\Plugin\Service;

use Matryoshka\Model\ModelManager;
use Matryoshka\Model\Object\ObjectManager;
use Matryoshka\Module\Controller\Plugin\Service\ModelFactory;
use Matryoshka\Module\Controller\Plugin\Service\ObjectFactory;
use Zend\Mvc\Controller\PluginManager;
use Zend\ServiceManager\ServiceManager;

/**
 * Class ObjectFactoryTest
 */
class ObjectFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ServiceManager
     */
    protected $sm;

    /**
     * @var ObjectManager
     */
    protected $om;

    /**
     * @var PluginManager
     */
    protected $pm;

    /**
     * @var ObjectFactory
     */
    protected $factory;

    public function setUp()
    {
        $this->sm = new ServiceManager();
        $this->om = new ObjectManager();
        $this->pm = new PluginManager();
        $this->factory = new ObjectFactory();
    }

    public function testCreateService()
    {
        $this->sm->setService('Matryoshka\Model\Object\ObjectManager', $this->om);
        $this->pm->setServiceLocator($this->sm);
        $object = $this->factory->createService($this->pm);
        $this->assertInstanceOf('Matryoshka\Module\Controller\Plugin\Object', $object);
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
