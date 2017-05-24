<?php

namespace App\Http\Controllers;

use App\Masa;
use Illuminate\Http\Request;

class MasaController extends Controller
{
    //
    public function index()
	{
	    $masalar = Masa::all();

		return view('masa/index', ['masalar' => $masalar]);
	}

	public function delete($id)
    {
        $masa = Masa::find($id);

        $masa->delete();

        $masalar = Masa::all();

        return view('masa.index', ['masalar' => $masalar]);
    }

	public function add()
    {
        $masa = new \App\Masa();

        $masalar = Masa::all();

        $masa->no = $masalar->last()->no + 1;

        $masa->save();

        return view('masa.index', ['masalar' => $masalar]);
    }

}
