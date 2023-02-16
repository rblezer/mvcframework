<?php

	/*
	 *  App core Class
	 */

	class Core {
		protected $currentController = 'Pages';
		protected $CurrentMethod = 'index';
		protected $params = [];

		public function __construct()
		{
			// print_r($this->getUrl());
			$url = $this->getUrl();

			// Look in controllers
			if(file_exists('../app/controllers/'. ucwords($url[0].',php'))){
				// if exist set as controller
				$this->currentController = ucwords($url[0]);
				// unset zero index
				unset($url[0]);
			}
			// require the contoller
			require_once '../app/controllers/' . $this->currentController .'.php';

			//instantiate controller class

			$this->currentController= new $this->currentController;
		}

		public function getUrl()
		{
			if(isset($_GET['url'])) {
			$url = rtrim($_GET['url'],'/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
			}

		}
	}
