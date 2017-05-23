<?php

namespace App\Http\Controllers;

use App\Malzeme;
use Illuminate\Http\Request;

class MalzemeController extends Controller
{
    public function index()
	{
		$malzemeler = \App\Malzeme::all()->sortBy('timestamp');
		return view('malzeme/index', ['malzemeler' => $malzemeler]);
	}

	public function update(Request $request)
    {

        //dd($request);

        $malzeme   = \App\Malzeme::find($request['id']);
        $malzeme->miktar += $request['miktar'];

        $malzeme->save();

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

	public function delete($id)
    {
        $malzeme = \App\Malzeme::find(id);

        $malzeme->delete();

        $malzemeler = \App\Malzeme::all()->sortBy('timestamp');

        return view('malzeme/index', ['malzemeler' => $malzemeler]);
    }

    public function edit($id)
    {
        $malzeme = \App\Malzeme::find($id);

        return view('malzeme/edit', ['malzeme' => $malzeme]);
    }

    public function duzenle(Request $request)
    {
        $malzeme = \App\Malzeme::find($request->id);

        $malzeme->ad = $request['ad'];
        $malzeme->miktar = $request['miktar'];

        $malzeme->save();

        $malzemeler = \App\Malzeme::all()->sortBy('timestamp');

        return view('malzeme/index', ['malzemeler' => $malzemeler]);
    }

    public function search(Request $request)
    {
        $value = $request['ad'];

        $malzemeler = Malzeme::where('ad', 'like', '%'.$value.'%')->get();

        return view('malzeme.index', ['malzemeler' => $malzemeler]);
    }

}
