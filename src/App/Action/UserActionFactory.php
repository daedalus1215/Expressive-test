<?php
namespace App\Action;

/**
 * Description of UserActionFactory
 *
 * @author theAdmin
 */
class UserActionFactory 
{
    public function __invoke(\Interop\Container\ContainerInterface $container)
    {
        return new UserAction(
            $container->get(TemplateRendererInterface::class)
        );
    }
}
