<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;

class IdeasController extends Controller
{
	public function index()
	{
		return Idea::orderBy('id', 'DESC')->get();
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);

		Idea::create($request->all());

		return;
	}

}
