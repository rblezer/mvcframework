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
			$this->getUrl();
		}

		public function getUrl()
		{
				// index.php?url=test&model=testmodel
				echo $_GET['url'];
				echo $_GET['model'];

		}
	}
