<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalzemeController extends Controller
{
    public function index()
	{
		$malzemeler = \App\Malzeme::all()->sortBy('timestamp');
		return view('malzeme/index', ['malzemeler' => $malzemeler]);
	}

	public function store(Request $request)
    {
        $malzeme = new \App\Malzeme;

        $malzeme->ad = $request['ad'];
        $malzeme->miktar = $request['miktar'];

        $malzeme->save();

        $malzemeler = \App\Malzeme::all()->sortBy('timestamp');

        return view('malzeme/index', ['malzemeler' => $malzemeler]);
    }

	public function add() {
		return view('malzeme/add');
	}


}
