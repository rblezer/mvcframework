<?php

	// App root

	define('APProot', dirname(__DIR__));
	define('URLroot', (! empty($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].'/');
	define('SITENAME', 'Nxtweb');
