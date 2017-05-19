<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonelController extends Controller
{
    //
    public function index()
	{
        $personeller = \App\Personel::all()->sortBy('timestamp');

		return view('personel/index', ['personeller' => $personeller]);
	}

	public function add()
    {
        return view('personel/add');
    }

    public function store(Request $request)
    {
        $personel = new \App\Personel;

        $personel->tc = $request['tc'];
        $personel->ad = $request['isim'];
        $personel->soyad = $request['soyisim'];

        $personel->save();

        $personeller = \App\Personel::all()->sortBy('timestamp');

        return view('personel/index', ['personeller' => $personeller]);
    }

}
