<?php
namespace Firelike\Alibris\Service\Factory;

use Firelike\Alibris\Service\AlibrisService;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;


class AlibrisServiceFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $service = new AlibrisService();

        $config = $sm->get('Config');
        if (isset($config['alibris_service'])) {
            if (isset($config['alibris_service']['service_url'])) {
                $service->setServiceUrl($config['alibris_service']['service_url']);
            }
            if (isset($config['alibris_service']['api_key'])) {
                $service->setApiKey($config['alibris_service']['api_key']);
            }
        }

        return $service;
    }

}