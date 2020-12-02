<?php

// https://www.twitch.tv/jahtheripper
// https://www.youtube.com?watch=dzezf54zg6e864ef864grez684gre564gre56&watchSec=25
// https://localhost/projet-developpement-site-debutant/?search=jahtheripper&site=twitch.tv
//var_dump($_GET);
/*
$_GET = [
  'search' => 'jahtheripper',
  'site' => 'twitch.tv',
]
*/















// Soumission formulaire
var_dump($_POST);
/*
[
  'username' => 'jahtheripper',
  'pwd' => 'super !'
]
*/

// Fichier
var_dump($_FILES);

// Informations server (timezone, date, PHP version, l'adresse IP du visiteur, ...)
var_dump($_SERVER);

// Cookies
var_dump($_COOKIE);

// Session du visiteur
var_dump($_SESSION);

// GET & POST & COOKIE
var_dump($_REQUEST);

// Variables d'environement du serveur
var_dump($_ENV);

// Variables globales
var_dump($GLOBALS);


$GLOBALS['dbName'] = 'tutoriels_videos';
