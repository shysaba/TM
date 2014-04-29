<?php
 
// Inclusion du fichier autoload.php permettant de charger automatiquement les bibliothèques
require_once __DIR__.'/../vendor/autoload.php';
 
$app = new Silex\Application();

require __DIR__.'/../resources/config/dev.php';
require __DIR__.'/../src/app.php';
require __DIR__.'/../src/controllers.php';

 
$app->run();