<?php

namespace SONSample;

use Zend\Mvc\MvcEvent;

class Module
{

    public function getAutoloaderConfig()
    {
        return array(
           
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

}