<?php

namespace App\Http\Controllers;

use App\Models\Logistic;
use Illuminate\Http\Request;

class LogisticController extends Controller
{
    public function index()
    {
        $title = "Logistic";
        $logistic = Logistic::all();
        return view('logistic.index', compact(['logistic', 'title']));
    }

    public function create()
    {
        return view('logistic.create');
    }

    public function store(Request $request)
    {
        //insert proper name apapun ke database
        Logistic::create($request->all());

        //redirect to index
        return redirect()->route('logistic.index');
    }

    public function show(logistic $logistic)
    {
        
    }

    public function edit(logistic $logistic)
    {
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit', compact(['logistic']));
    }

    public function update(Request $request, logistic $logistic)
    {
        $this->validate($request, [
            'stock'   => 'required|min:3',
            'demand'   => 'required|min:3',
        ]);

        // Logistic::updated($request->all());
        
        $logistic->update([
            'posko'     => $request->posko_id,
            'item'      => $request->item_id,
            'stock'     => $request->stock,
            'demand'    => $request->demand,
            'unit'      => $request->unit_id
        ]);

        //redirect to index
        return redirect()->route('/logistic');
    }

    public function destroy(logistic $id)
    {
        Logistic::deleted('id', $id);

        // DB::table('logistic')->where('logistic_id',$id)->delete();
		
        // alihkan halaman ke halaman index
        return redirect('/logistic');
    }
}
