<?php

use Silex\Provider\FormServiceProvider;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));


// Appel des services pour les formulaires
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new FormServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());


$app->register(new Propel\Silex\PropelServiceProvider(), array(
    'propel.config_file' => __DIR__ . '/../config/RadioHipster-conf.php',
    'propel.model_path'  => __DIR__ . '/../src',
));

$app->get('/', function() { return 'test' ;});

return $app;