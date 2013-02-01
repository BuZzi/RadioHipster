<?php
/**
 * Created by the fat ide JetBrains PhpStorm.
 * User: Franck GORIN
 * Date: 01/02/13 -- 21:40
 */

use Symfony\Component\HttpFoundation\Request;

//Controller Home
$app->match('/', function (Request $request) use ($app) {

    // Get all songs in the database
    $songs = BaseSongQuery::create()
        ->orderBySongId()
        ->find();

    // Get the first 10 songs
    $top = array();
    for($i= 0; $i<10; $i++) {
        $top[]= $songs[$i];
    }

    // Call the Twig view "home" (param: top & songs)
    return $app['twig']->render('template/home.twig', array('top10' => $top, 'allSongs' => $songs));

});

return $app;