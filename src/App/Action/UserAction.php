<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Action;

/**
 * Description of UserAction
 *
 * @author theAdmin
 */
class UserAction 
{

    /**
     *
     * @var \Zend\Expressive\Template\TemplateRendererInterface $renderer
     */
    private $renderer;
    /**
     * 
     * @param \Zend\Expressive\Template\TemplateRendererInterface $renderer
     */
    public function __construct(\Zend\Expressive\Template\TemplateRendererInterface $renderer) 
    {
        $this->renderer = $renderer;
    }
}
