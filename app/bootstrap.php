<?php

use Silex\Provider\FormServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Application\UrlGeneratorTrait;
use Knp\Console\Application;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

// Call the twig service
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

// Call services for forms
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new FormServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());

// Call the Propel service
$app->register(new Propel\Silex\PropelServiceProvider(), array(
    'propel.config_file' => __DIR__ . '/../config/RadioHipster-conf.php',
    'propel.model_path'  => __DIR__ . '/../src',
));

// Call the Console service
$app->register(new Knp\Provider\ConsoleServiceProvider(), array(
    'console.name'              => 'RadioHipster',
    'console.version'           => '1.0.0',
    'console.project_directory' => __DIR__.'/..'
));

return $app;