<?php
// This file generated by Propel 1.6.7 convert-conf target
// from XML runtime conf file /Users/ardietr/Documents/Htdocs/RadioHipster/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'etuwebdev_radiohipster' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=mysql1.alwaysdata.com;dbname=etuwebdev_radiohipster',
        'user' => 'etuwebdev_test',
        'password' => 'test',
      ),
    ),
    'default' => 'etuwebdev_radiohipster',
  ),
  'generator_version' => '1.6.7',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-RadioHipster-conf.php');
return $conf;