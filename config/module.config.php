<?php
return [
    'service_manager' => [
        'factories' => [
            'Matryoshka\Model\ModelManager' => 'Matryoshka\Model\Service\ModelManagerFactory',
            'Matryoshka\Model\Object\ObjectManager' => 'Matryoshka\Model\Object\Service\ObjectManagerFactory',
            'Matryoshka\Model\Listener\ListenerManager'
                => 'Matryoshka\Model\Listener\Service\ListenerManagerFactory',
            'Matryoshka\Model\Object\PrototypeStrategy\ServiceLocatorStrategy'
                => 'Matryoshka\Model\Object\PrototypeStrategy\Service\ServiceLocatorStrategyFactory',
        ],
        'invokables' => [
            'Matryoshka\Model\ResultSet\ArrayObjectResultSet' => 'Matryoshka\Model\ResultSet\ArrayObjectResultSet',
            'Matryoshka\Model\ResultSet\HydratingResultSet' => 'Matryoshka\Model\ResultSet\HydratingResultSet',
        ],
        'shared' => [
            'Matryoshka\Model\ModelManager' => true,
            'Matryoshka\Model\Object\ObjectManager' => true,
            'Matryoshka\Model\Listener\ListenerManager' => true,
            'Matryoshka\Model\ResultSet\ArrayObjectResultSet' => false,
            'Matryoshka\Model\ResultSet\HydratingResultSet' => false,
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            'model' => 'Matryoshka\Module\Controller\Plugin\Service\ModelFactory',
            'object' => 'Matryoshka\Module\Controller\Plugin\Service\ObjectFactory',
        ],
    ],
];
