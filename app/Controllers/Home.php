<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	public function mate2()
	{
		return view('mate2');
	}
}
