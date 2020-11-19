<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		if ($this->request->getMethod() == 'post') {

			$rules = [
				'username' => 'required',
				'password' => 'required'
			];

			$validate = $this->validate($rules);
			if ($validate) {
				return view('auth/index');
			} else {
				return redirect()->back()->withInput()->with('validation', $this->validator);
			}
		}

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
		return view('auth/index');
	}

	public function about()
	{
		$data =  [
			'title' => 'About Me | MOVIES.COM'
		];
		return view('auth/about', $data);
	}

	public function contact()
	{
		$data =  [
			'title' => 'Contact Us | MOVIES.COM',
			'alamat' => [
				[
					'tipe' => 'Rumah',
					'alamat' => 'Jl.Abs No,5C',
					'kota' => 'Lampung'
				],
				[
					'tipe' => 'Kantor',
					'alamat' => 'JL.Gada NO.21',
					'kota' => 'lampung'
				]
			]
		];
		return view('auth/contact', $data);
	}
}
