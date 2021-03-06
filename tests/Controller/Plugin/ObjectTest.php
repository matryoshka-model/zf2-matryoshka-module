<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2015, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace MatryoshkaModuleTest\Module\Controller\Plugin;

use Matryoshka\Model\Object\ObjectManager;
use Matryoshka\Module\Controller\Plugin\Object;

/**
 * Class ObjectTest
 */
class ObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Matryoshka\Module\Controller\Plugin\Object
     */
    protected $object;


    public function setUp()
    {
        $sm = new ObjectManager();
        $sm->setService('test', new \stdClass());
        $this->object = new Object($sm);
    }

    public function testPluginInvoke()
    {
        $this->assertInstanceOf('Matryoshka\Module\Controller\Plugin\Object', $this->object->__invoke());
    }

    public function testGetModelManager()
    {
        $this->assertInstanceOf('Zend\ServiceManager\ServiceLocatorInterface', $this->object->getObjectManager());
    }

    public function testGet()
    {
        $exModel = $this->object->get('test');
        $this->assertInstanceOf('stdClass', $exModel);
    }
}
