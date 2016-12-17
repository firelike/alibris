<?php
return array(
    'service_manager' => array(
        'factories' => array(
            Firelike\Alibris\Service\AlibrisService::class => Firelike\Alibris\Service\Factory\AlibrisServiceFactory::class,
        )
    )
);

