<?php

namespace App\Http\Controllers;

use App\Malzeme;
use App\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    //

    public function index()
	{
	    $urunler = \App\Urun::all()->sortBy('timestamp');
		return view('urun/index', ['urunler' => $urunler]);
	}

    public function store(Request $request)
    {
        $urun = new \App\Urun;

        $urun->ad = $request['ad'];
        $urun->fiyat = $request['fiyat'];

        $malz = $request['malzemeler'];


        $urun->save();


        $urun->malzeme()->attach($malz);



        $urun->save();

        $urunler = \App\Urun::all()->sortBy('timestamp');

        return view('urun/index', ['urunler' => $urunler]);
    }

    public function edit($id)
    {
        $urun = Urun::find($id);

        $malzemeler = Malzeme::all();

        return view('urun.edit', ['urun' => $urun, 'malzemeler' => $malzemeler]);
    }

    public function update(Request $request)
    {
        $urun = Urun::find($request['id']);

        $urun->ad = $request['ad'];

        $urun->fiyat = $request['fiyat'];

        $urun->save();

        $malz = $request['malzemeler'];

        $urun->malzeme()->attach($malz);

        $urun->save();

        $urunler = \App\Urun::all()->sortBy('timestamp');

        return view('urun/index', ['urunler' => $urunler]);
    }

    public function search(Request $request)
    {
        $value = $request['ad'];

        $urunler = Urun::where('ad', 'like', '%'.$value.'%')->get();

        return view('urun.index', ['urunler' => $urunler]);
    }

    public function delete($id)
    {
        $urun = Urun::find($id);

        $urun->delete();

        $urunler = Urun::all()->sortBy('timestamp');

        return view('urun.index', ['urunler' => $urunler]);
    }

    public function add() {
        $malzemeler = \App\Malzeme::all();

        return view('urun/add', ['malzemeler' => $malzemeler]);
    }
}
