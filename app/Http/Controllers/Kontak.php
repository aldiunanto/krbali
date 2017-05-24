<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kontak extends Controller
{
    public function index()
	{
		$data = [
			'title'	=> 'Kontak'
		];

		return view('kontak.index', $data);
	}
}
