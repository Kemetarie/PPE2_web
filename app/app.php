<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers.
$app->register(new \Silex\Provider\DoctrineServiceProvider());
$app->register(new \Silex\Provider\TwigServiceProvider(),array('twig.path'=>__DIR__.'/../views'));
$app->register(new \Silex\Provider\RoutingServiceProvider());




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

