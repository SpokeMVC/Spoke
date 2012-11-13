<?php

if(isset($webreq) && isset(SPOKE_START) {

	if($webreq == true) {
		define('core',__DIR__.'/../Spoke/Core/');
		define('silex',__DIR__.'/../Spoke/Silex-Core/');
		// Load Silex
		require core.'everything.php';
		require silex.'autoload.php';
		require __DIR__.'/../Application/'

		$app = new Silex\Application();
		// Routes File
		require __DIR__.'/../Application/routes.php';
	}
}