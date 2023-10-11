<?php

namespace ContainerL05Iv2z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q0El6KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q0El6_K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q0El6_K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'chambre' => ['privates', 'App\\Entity\\Chambre', 'getChambreService', true],
        ], [
            'chambre' => 'App\\Entity\\Chambre',
        ]);
    }
}
