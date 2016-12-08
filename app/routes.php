<?php

$app->get('/', function() use($app) {
    
    return $app['twig']->render('connexion.html.twig');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

