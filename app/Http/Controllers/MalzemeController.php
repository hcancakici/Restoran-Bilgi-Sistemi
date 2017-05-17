<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Malzeme;

class MalzemeController extends Controller
{
    public function index()
	{
		$malzemeler = \App\Malzeme::all()->toArray();
		return view('malzeme/index', ['malzemeler' => $malzemeler]);
	} 

	public function add() {
		return view('malzeme/add');
	}


}
