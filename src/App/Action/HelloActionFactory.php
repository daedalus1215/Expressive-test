<?php
/**
 * Created by PhpStorm.
 * User: ladams
 * Date: 2/25/2017
 * Time: 3:29 PM
 */

namespace App\Action;


use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class HelloActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new HelloAction(
            $container->get(TemplateRendererInterface::class)
        );
    }
}