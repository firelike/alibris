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

        return $service;
    }

}