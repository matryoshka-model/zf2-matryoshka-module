<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace Matryoshka\Module\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Matryoshka\Model\Model as MatryoshkaModel;
use Matryoshka\Model\ModelManager;

/**
 * Class Model
 */
class Model extends AbstractPlugin
{
    /**
     * Models
     * @var ModelManager
     */
    protected $models;

    /**
     * Ctor
     * @param ModelManager $models
     */
    public function __construct(ModelManager $models)
    {
        $this->models = $models;
    }

    /**
     * Get Model Manager
     * @return ModelManager
     */
    public function getModelManager()
    {
        return $this->models;
    }

    /**
     * Get
     * @param string $name
     * @return MatryoshkaModel
     */
    public function get($name)
    {
        return $this->getModelManager()->get($name);
    }

    /**
     * Invoke
     * @return $this
     */
    public function __invoke()
    {
        return $this;
    }
}
