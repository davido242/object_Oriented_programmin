<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function help()
	{
		return view('welcome_message');
	}

	public function sucess_page()
	{
		return view('list');
	}

	//--------------------------------------------------------------------

}
