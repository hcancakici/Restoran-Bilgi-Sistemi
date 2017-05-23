<?php

namespace App\Http\Controllers;

use App\Malzeme;
use App\Personel;
use App\Siparis;
use App\Urun;
use Illuminate\Http\Request;

class DashController extends Controller
{
 
	public function index()
	{

        $urun = Urun::all()->count();

        $personel = Personel::all()->count();

        $kazanc = Siparis::all()->sum('tutar');

        $siparis = Siparis::all()->count();

        $malzemeler = Malzeme::all()->sortBy('miktar')->take(5);

	    $dataset = [

	        'urun' => $urun,
            'personel' => $personel,
            'kazanc' => $kazanc,
            'siparis' => $siparis,
            'malzemeler' => $malzemeler

        ];


        //dd($dataset);

		return view('index', ['dataset' => $dataset]);
	}

}