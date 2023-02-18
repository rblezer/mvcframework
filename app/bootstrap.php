<?php

// loading libraries

	require_once "config/config.php";

	//autoloader Core libs
	spl_autoload_register(function ($className) {
		require_once 'libraries/'.$className.'.php';
	});
