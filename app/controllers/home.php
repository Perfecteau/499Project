<?php

class Home extends Controller
{

	public function index()
	{	
		//Loading the home page
		$this->loadView('home/index');
	}

	public function about()
	{	
		//Loading the about us page
		$this->loadView('home/about');		
	}

	public function contact()
	{	
		//Loading the contact us page
		$this->loadView('home/contact');
	}

}
