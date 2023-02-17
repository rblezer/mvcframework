<?php

	class Pages extends Controller
	{
		public function __construct()
		{

		}

		public function index()
		{
			$data = ['title'=> 'Nxt-web'];
			$this->view('pages/index', $data);
		}

		public function about() {
			$data = ['title'=> 'The About page'];
			$this->view('pages/about' ,$data);
		}
	}
