<?php

namespace App\Http\Controllers;

use App\Masa;
use App\Personel;
use App\Siparis;
use App\Urun;
use Illuminate\Http\Request;

class SiparisController extends Controller
{


	public function index()
	{
	    $siparisler = Siparis::all()->sortBy('timestamp');

		return view('siparis/index', ['siparisler' => $siparisler]);
	}

	public function add($id)
    {
        $personeller = Personel::all();

        $urunler = Urun::all();

        $masa_no = Masa::find($id)->no;

        return view('siparis.add', ['urunler' => $urunler, 'personeller' => $personeller, 'masa_no' => $masa_no]);
    }

    public function delete($id)
    {
        $siparis = \App\Siparis::find($id);

        $siparis->delete();

        $siparisler = \App\Siparis::all()->sortBy('timestamp');

        return view('siparis.index', ['siparisler' => $siparisler]);
    }

    public function store(Request $request)
    {

        //dd($request['masa_no']);

        $siparis = new \App\Siparis;




        $siparis->masa_id = $request['masa_no'];

        $siparis->personel_id = $request['personel'];

        $uruns = $request['urunler'];

        //dd($uruns);
        $toplam = 0;
        foreach($uruns as $urun){
            $fiyat = Urun::find($urun)->fiyat;

            $toplam += $fiyat;
        }

        $siparis->tutar = $toplam;

        $siparis->save();



        $siparis->urun()->attach($uruns);




        $siparis->save();

        $siparisler = Siparis::all()->sortBy('timestamp');

        return view('siparis.index', ['siparisler' => $siparisler]);
    }

    public function show($id)
    {
        $siparis = Siparis::find($id);

        dd($siparis->personel()->get()[0]['ad']);

        //dd($siparis->urun()->get()[0]['ad']);

        return view('siparis.show');
    }
 
}
