<?php

namespace PHPocket\Core;

// Autoloader for core
spl_autoload_register(
    function($className)
    {
        // Validating namespace
        if (substr($className, 0, strlen(__NAMESPACE__)) !== __NAMESPACE__) {
            return;
        }

        // Including folder
        include __DIR__
            . '/src/'
            . substr(
                str_replace('\\', '/', $className),
                strlen(__NAMESPACE__) + 1
            )
            . '.php';
    }
);