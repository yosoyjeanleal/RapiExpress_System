<?php return array(
    'root' => array(
        'name' => 'personal/rapiexpress',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'b17f65ab6f410053d95f7e8928c4ffe0fe200ce8',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'personal/rapiexpress' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'b17f65ab6f410053d95f7e8928c4ffe0fe200ce8',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.3.6',
            'version' => '5.3.6.0',
            'reference' => 'f849680d16a9695c9a6c9c062d6cff55ddcf071e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.3.6',
            ),
        ),
    ),
);
