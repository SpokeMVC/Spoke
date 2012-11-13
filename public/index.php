<?php

// @author: Matthew Gross
// @url: SpokeMVC.com and SpokePHP.com
// Begin

define('SPOKE_START',microtime(true));

// Make Web Request

$web = true;

// Paths

require '../path-run.php';

// Autoload

require root.'Spoke/autoload.php';

// Run!
$app->run();

// Unset Web
unset($web);