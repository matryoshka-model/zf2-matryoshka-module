<?php
/**
 * ZF2 matryoshka module
 *
 * @link        https://github.com/matryoshka-model/zf2-matryoshka-module
 * @copyright   Copyright (c) 2015, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace Matryoshka\Module\Controller\Plugin;

use Matryoshka\Model\ModelInterface;
use Matryoshka\Model\ModelManager;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class Model
 */
class Model extends AbstractPlugin
{
    /**
     * @var ModelManager
     */
    protected $models;

    /**
     * Ctor
     *
     * @param ModelManager $models
     */
    public function __construct(ModelManager $models)
    {
        $this->models = $models;
    }

    /**
     * Get Model Manager
     *
     * @return ModelManager
     */
    public function getModelManager()
    {
        return $this->models;
    }

    /**
     * Get a model by name
     *
     * @param string $name
     * @param array $options
     * @return ModelInterface
     */
    public function get($name, $options = [])
    {
        return $this->getModelManager()->get($name, $options);
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
