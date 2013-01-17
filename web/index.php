<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));


$app->get('/hello/{name}', function ($name) use ($app) {
    return $app['twig']->render('template/hello.twig', array(
        'name' => $name,
    ));
});


$app->get('/{page}', function ($page) use ($app) {
    try
    {
        return $app['twig']->render('template/'.$page.'.twig', array());
    }
    catch(exception $e)
    {
        if(get_class($e) == "Twig_Error_Loader")
        {
            $app->abort('404', 'Twig pas trouvé');
        }
    }

});

$app->run();


?>
