<?php

return [
    'Router' => [
        'Controller' => [
            'ApplicationModule' => '\ApplicationModule\Controller\v1\Factory\ApplicationModuleControllerFactory',
            'v1' => [
                'Factory' => [
                    'ApplicationModule' => '\ApplicationModule\Controller\v1\Factory\ApplicationModuleControllerFactory'
                ]
            ]
        ]
    ]
];