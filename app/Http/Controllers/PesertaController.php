<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $peserta = Peserta::all();
        return view('charity.index', compact(['peserta']));
    }

    public function create()
    {
        return view('charity.create');
    }

    public function store(Request $request)
    {
         //create post
        Peserta::create([
            'name'     => $request->name,
            'email'      => $request->email,
            'nomor'  => $request->nomor,
            'kelas_id'  => $request->kelas_id
        ]);

        //redirect to index
        return redirect()->route('charity.control.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
