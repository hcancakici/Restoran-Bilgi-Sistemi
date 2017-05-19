<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrunController extends Controller
{
    //

    public function index()
	{
	    $urunler = \App\Urun::all()->sortBy('timestamp');
		return view('urun/index', ['uruneler' => $urunler]);
	}

    public function store(Request $request)
    {
        $urun = new \App\Urun;

        $urun->ad = $request['ad'];
        $urun->fiyat = $request['miktar'];

        $urun->save();

        $urunler = \App\Urun::all()->sortBy('timestamp');

        return view('urun/index', ['urunler' => $urunler]);
    }

    public function add() {
        $malzemeler = \App\Urun::all();
        return view('urun/add', ['malzemeler' => $malzemeler]);
    }
}
