<?php

namespace App\Http\Controllers;

use App\Personel;
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

    public function search(Request $request)
    {
        $value = $request['ad'];

        $personeller = Personel::where('ad', 'like', '%'.$value.'%')->get();

        return view('personel.index', ['personeller' => $personeller]);
    }

    public function update(Request $request)
    {
        $personel = \App\Personel::find($request->id);

        $personel->ad = $request['ad'];
        $personel->soyad = $request['soyad'];
        $personel->tc = $request['tc'];
        //$personel->maas = $request['maas'];


        $personel->save();

        $personeller = \App\Personel::all()->sortBy('timestamp');

        return view('personel/index', ['personeller' => $personeller]);
    }

    public function edit($id)
    {
        $personel = Personel::find($id);

        return view('personel.edit', ['personel' => $personel]);
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

    public function delete($id)
    {
        $personel = \App\Personel::find($id);

        $personel->delete();

        $personeller = \App\Personel::all()->sortBy('timestamp');

        return view('personel.index', ['personeller' => $personeller]);
    }

}
