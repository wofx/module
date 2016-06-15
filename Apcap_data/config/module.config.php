<?php
use Apcap_data\Entity\Pessoas;

return array(
    // Doctrine config
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    __DIR__ . '/../src/Apcap_data/Entity'
                )
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . 'Apcap_data\Entity' => __NAMESPACE__ . '_driver',
                    __NAMESPACE__ . 'Apcap_data\Repositories' => __NAMESPACE__ . '_driver'
                )
            )
        ),
        'authentication' => array(
            'orm_default' => array(
                'object_manager' => 'Doctrine\ORM\EntityManager',
                'identity_class' => 'Apcap_data\Entity\Pessoas',
                'identity_property' => 'email',
                'credential_property' => 'senha'
            )
        )
    )
);
// Fim Doctrine config
