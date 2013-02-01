<?php
/**
 * Created by the fat ide JetBrains PhpStorm.
 * User: Franck GORIN
 * Date: 01/02/13 -- 21:40
 */

use Symfony\Component\HttpFoundation\Request;

//Controller Home
$app->match('/', function (Request $request) use ($app) {

    // récupère toutes les chansons depuis la base
    $songs = BaseSongQuery::create()
        ->orderBySongId()
        ->find();

    // récupère les 10 premières
    $top = array();
    for($i= 0; $i<10; $i++) {
        $top[]= $songs[$i];
    }

    // appelle la vue twig home (param: top et songs)
    return $app['twig']->render('template/home.twig', array('top10' => $top, 'allSongs' => $songs));

});

return $app;