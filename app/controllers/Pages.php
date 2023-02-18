<?php

	class Pages extends Controller
	{
		/**
		 * @var mixed
		 */
		private $postModel;

		public function __construct()
		{
			$this->postModel = $this->model('Post');
		}

		public function index()
		{
			$data = ['title' => 'Nxt-web'];
			$this->view('pages/index', $data);
		}

		public function about()
		{
			$data = ['title' => 'The About page'];
			$this->view('pages/about', $data);
		}
	}
