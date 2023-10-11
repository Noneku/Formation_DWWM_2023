<?php

namespace ContainerL05Iv2z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_SnappyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'monolog.logger.snappy' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['monolog.logger.snappy'] = $instance = new \Symfony\Bridge\Monolog\Logger('snappy');

        $instance->pushProcessor(($container->privates['debug.log_processor'] ?? self::getDebug_LogProcessorService($container)));
        $instance->pushHandler(($container->privates['monolog.handler.console'] ?? self::getMonolog_Handler_ConsoleService($container)));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? self::getMonolog_Handler_MainService($container)));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }
}
