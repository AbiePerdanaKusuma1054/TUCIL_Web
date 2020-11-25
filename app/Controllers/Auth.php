<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		$data =  [
			'title' => 'L O G I N | Web Project'
		];
		return view('auth/login', $data);
	}

	public function register()
	{
		$data =  [
			'title' => 'R E G I S T E R | Web Project'
		];
		return view('auth/register', $data);
	}

	public function index()
	{
		$data =  [
			'title' => 'M O V I E S | Web Project'
		];
		return view('auth/index', $data);
	}

	public function about()
	{
		$data =  [
			'title' => 'About Me | MOVIES.COM'
		];
		return view('auth/about', $data);
	}

	public function admin()
	{
		$data =  [
			'title' => 'ADMIN | MOVIES.COM'
		];
		return view('auth/admin', $data);
	}
}
