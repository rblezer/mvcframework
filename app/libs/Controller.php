<?php

	/*
	 * Base Controller
	 *
	 * Loads Models & views
	 */

	class Controller
	{
		public function model($model)
		{
			// load the models
			require_once '../app/models/'.$model.'.php';

			// instantiate model
			return new $model();
		}

		public function view($view, $data = [])
		{
			// check for vieuw file
			if (file_exists('../app/views/'.$view.'.php')) {
				require_once '../app/views/'.$view.'.php';
			} else {
				//view does not exist
				echo sprintf("View: \"%s\" does not exist.", $view. '.php');
			}
		}
	}
