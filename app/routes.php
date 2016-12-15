<?php

$app->get('/', function() use($app) {
    
    return $app['twig']->render('connexionGSB.html.twig');
});

$app->get('/home', function() use($app) {
    
    return $app['twig']->render('index.html.twig');
});