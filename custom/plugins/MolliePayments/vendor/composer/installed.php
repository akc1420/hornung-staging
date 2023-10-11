<?php return array(
    'root' => array(
        'pretty_version' => 'v4.0.0',
        'version' => '4.0.0.0',
        'type' => 'shopware-platform-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'kiener/mollie-payments-plugin',
        'dev' => false,
    ),
    'versions' => array(
        'composer/ca-bundle' => array(
            'pretty_version' => '1.3.6',
            'version' => '1.3.6.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/./ca-bundle',
            'aliases' => array(),
            'reference' => '90d087e988ff194065333d16bc5cf649872d9cdb',
            'dev_requirement' => false,
        ),
        'kiener/mollie-payments-plugin' => array(
            'pretty_version' => 'v4.0.0',
            'version' => '4.0.0.0',
            'type' => 'shopware-platform-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'mollie/mollie-api-php' => array(
            'pretty_version' => 'v2.40.1',
            'version' => '2.40.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../mollie/mollie-api-php',
            'aliases' => array(),
            'reference' => 'b99ad3662b4141efa9ee8eb83a04c2d3c100f83c',
            'dev_requirement' => false,
        ),
    ),
);