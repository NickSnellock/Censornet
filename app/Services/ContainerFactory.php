<?php
namespace NickSnellock\Services;

use DI\Container;
use DI\ContainerBuilder;

class ContainerFactory
{
    public static Container $container;

    public static function build(array $mocks = []): Container
    {
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);
        $containerBuilder->useAnnotations(true);

        $containerBuilder->addDefinitions(__DIR__ . '/../config/di-config.php');
        if ($mocks) {
            $containerBuilder->addDefinitions($mocks);
        }

        self::$container = $containerBuilder->build();

        return self::$container;
    }
}