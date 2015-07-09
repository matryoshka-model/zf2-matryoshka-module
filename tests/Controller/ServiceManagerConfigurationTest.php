<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2015, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace MatryoshkaModuleTest\Module;

use Matryoshka\Module;
use Zend\ServiceManager\Config;
use Zend\ServiceManager\ServiceManager;
/**
 * Class ModelTest
 */
class ServiceManagerConfigurationTest extends \PHPUnit_Framework_TestCase
{
    protected $serviceManager;

    public function setUp()
    {
        $module = new Module();
        $this->serviceManager = new ServiceManager(new Config($module->getConfig()['service_manager']));
        $this->serviceManager->setService('Config', []);
    }

    public function testModelManager()
    {
        $modelManager = $this->serviceManager->get('Matryoshka\Model\ModelManager');

        // Test registerd service
        $this->assertInstanceOf('Matryoshka\Model\ModelManager', $modelManager);

        // Test shared by default
        $this->assertSame($modelManager, $this->serviceManager->get('Matryoshka\Model\ModelManager'));
    }

    public function testObjectManager()
    {
        $objectManager = $this->serviceManager->get('Matryoshka\Model\Object\ObjectManager');

        // Test registerd service
        $this->assertInstanceOf('Matryoshka\Model\Object\ObjectManager', $objectManager);

        // Test shared by default
        $this->assertSame($objectManager, $this->serviceManager->get('Matryoshka\Model\Object\ObjectManager'));
    }

    public function testListenerManager()
    {
        $listenerManager = $this->serviceManager->get('Matryoshka\Model\Listener\ListenerManager');

        // Test registerd service
        $this->assertInstanceOf('Matryoshka\Model\Listener\ListenerManager', $listenerManager);

        // Test shared by default
        $this->assertSame($listenerManager, $this->serviceManager->get('Matryoshka\Model\Listener\ListenerManager'));
    }

    public function testServiceLocatorStrategy()
    {
        $prototypeStrategy = $this->serviceManager->get('Matryoshka\Model\Object\PrototypeStrategy\ServiceLocatorStrategy');

        // Test registerd service
        $this->assertInstanceOf('Matryoshka\Model\Object\PrototypeStrategy\ServiceLocatorStrategy', $prototypeStrategy);

        // Test shared by default
        $this->assertSame($prototypeStrategy, $this->serviceManager->get('Matryoshka\Model\Object\PrototypeStrategy\ServiceLocatorStrategy'));
    }
}