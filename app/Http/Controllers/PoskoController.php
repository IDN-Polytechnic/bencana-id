<?php

namespace App\Http\Controllers;

use App\Models\Posko;
use Illuminate\Http\Request;

class PoskoController extends Controller
{
    public function index()
    {
        $posko = Posko::all();
        return view('posko.posko', compact(['posko']));
    }

    public function create()
    {
        return view('posko.poskocreate');
    }

    public function store(Request $request)
    {
        Posko::create($request->all());
        

        //redirect to index
        return redirect()->route('posko.posko');
    }

    public function show(Posko $posko)
    {
        
    }

    public function edit(Posko $posko)
    {
        //
    }

    public function update(Request $request, Posko $posko)
    {
        //
    }

    public function destroy(Posko $posko)
    {
        //
    }
}
