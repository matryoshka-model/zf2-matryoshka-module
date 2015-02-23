<?php
return [
    'service_manager' => [
        'factories'  => [
            'Matryoshka\Model\ModelManager' => 'Matryoshka\Model\Service\ModelManagerFactory',
            'Matryoshka\Model\Object\ObjectManager' => 'Matryoshka\Model\Object\Service\ObjectManagerFactory',
            'Matryoshka\Model\ResultSet\PrototypeStrategy\ServiceLocatorStrategy'
                => 'Matryoshka\Model\ResultSet\PrototypeStrategy\Service\ServiceLocatorStrategyFactory',
        ],
        'invokables' => [
            'Matryoshka\Model\ResultSet\ArrayObjectResultSet' => 'Matryoshka\Model\ResultSet\ArrayObjectResultSet',
            'Matryoshka\Model\ResultSet\HydratingResultSet' => 'Matryoshka\Model\ResultSet\HydratingResultSet',
        ],
        'shared' => [
            'Matryoshka\Model\ModelManager' => true,
            'Matryoshka\Model\Object\ObjectManager' => true,
            'Matryoshka\Model\ResultSet\ArrayObjectResultSet' => false,
            'Matryoshka\Model\ResultSet\HydratingResultSet' => false,
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            'model'     => 'Matryoshka\Module\Controller\Plugin\Service\ModelFactory',
            'object'    => 'Matryoshka\Module\Controller\Plugin\Service\ObjectFactory',
        ],
    ],
];
