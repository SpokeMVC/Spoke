<?php

require 'paths.php';

if(isset($path['root'])) {

	define('root',$path['root']);

}

if(isset($path['public_dir'])) {

	if(!empty($path['public_dir'])) {
		define('public_dir',$path['public_dir']);
	}
	else {
		// The Public Directory was empty.
		// Die out in an error.
		die('Error: You did not set the public directory correctly in your paths file!');
	}

}