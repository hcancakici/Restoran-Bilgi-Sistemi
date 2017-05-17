<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonelController extends Controller
{
    //
    public function index()
	{
		return view('personel/index');
	} 
}
