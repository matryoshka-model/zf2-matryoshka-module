<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace MatryoshkaTest\Module\Controller\Plugin;

use Matryoshka\Model\ModelManager;
use Matryoshka\Module\Controller\Plugin\Model;
use Matryoshka\Module\Controller\Plugin\Object;
use MatryoshkaTest\Model\TestAsset\ConcreteAbstractModel;
use Zend\ServiceManager\ServiceManager;

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
        $sm = new ServiceManager();
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
