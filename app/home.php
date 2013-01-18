<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->match('/home', function (Request $request) use ($app) {
	
	$oDbPlaylist = new BasePlaylistPeer();
	
	
	//Récupération du tableaux de la playlist
	$aPlaylist = $oDbPlaylist->doSelect();
	
	//Récupérations du top 10
	
	//Récupération des dernières chansons jouées
	
	// display the form
	return $app['twig']->render('template/home.twig', array('playlist' => $aPlaylist);
}