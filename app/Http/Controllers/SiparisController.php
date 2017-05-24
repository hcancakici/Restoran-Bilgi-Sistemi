<?php

namespace App\Http\Controllers;

use App\Masa;
use App\Personel;
use App\Siparis;
use App\Urun;
use Illuminate\Http\Request;

class SiparisController extends Controller
{

    public function dataSet()
    {
        $siparisler = Siparis::find(1);
        $siparisler->personel()->ad;
    }

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

    public function store(Request $request)
    {

        //dd($request['masa_no']);

        $siparis = new \App\Siparis;




        $siparis->masa_id = $request['masa_no'];

        $siparis->personel_id = $request['personel'];

        $uruns = $request['urunler'];

        foreach($uruns as $urun){
            $fiyat = Urun::find($urun)->fiyat;

            $toplam = 0;
            $toplam += $fiyat;
        }

        $siparis->tutar = $toplam;

        $siparis->save();



        $siparis->urun()->attach($uruns);




        $siparis->save();

        $siparisler = Siparis::all()->sortBy('timestamp');

        return view('siparis.index', ['siparisler' => $siparisler]);
    }
 
}
