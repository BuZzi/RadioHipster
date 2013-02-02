<?php
/**
 * Created by the fat ide JetBrains PhpStorm.
 * User: Franck GORIN
 * Date: 01/02/13 -- 21:40
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//Controller Home
$app->match('/', function (Request $request) use ($app)
{
    // Get all songs in the database
    $songs = BaseSongQuery::create()
        ->orderBySongId()
        ->find();

    // Search form
    $form = $app['form.factory']->createBuilder('form')
        ->add('search', 'search')
        ->getForm();

    $form->bind($request);
    $data = $form->getData();

    // Get the first 10 songs
    $top = array();
    if(count($songs)<10){
        $topSize = count($songs);
    }else {
        $topSize = 10;
    }
    for($i= 0; $i<$topSize; $i++)
    {
        $top[]= $songs[$i];
    }

    // Call the Twig view "home" (param: top & songs)
    return $app['twig']->render('template/home.twig', array('top10' => $top, 'allSongs' => $songs));

})
->bind('home');

return $app;