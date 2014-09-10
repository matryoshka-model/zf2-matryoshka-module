<?php
return [
    'service_manager' => [
        'factories'  => [
            'Matryoshka\Model\Object\ObjectManager' => 'Matryoshka\Model\Object\Service\ObjectManagerFactory',
        ],
        'invokables' => [
            'Matryoshka\Model\ModelManager' => 'Matryoshka\Model\ModelManager',
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
