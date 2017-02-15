<?php 

//diplay errors on screen
ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('STYLE_ROOT', APP_ROOT . '/style');
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', ''); // Base URL of the page

$host = ''; //hostname
$dbname = '';	//mysql db
$user = '';	//username
$pass = '';	//password

//connect to database
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

require 'functions.php'; 