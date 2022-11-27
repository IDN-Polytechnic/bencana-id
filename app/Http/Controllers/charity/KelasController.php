<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Major;
use App\Models\Mentor;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $major = Major::all();
        $kelas = Kelas::all();
        $mentor = Mentor::all();
        return view('charity.index', compact(['kelas', 'major', 'mentor']));
    }

    public function create()
    {
        return view('charity.control.create');
    }

    public function store(Request $request)
    {
         //create post
        Kelas::create([
            'title'     => $request->nama,
            'desc'      => $request->desc,
            'major_id'  => $request->major_id,
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

    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/charity/control123')->with('succes', 'Data telah dihapus.');
    }
}
