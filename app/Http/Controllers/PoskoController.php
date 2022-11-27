<?php

namespace App\Http\Controllers;

use App\Models\Posko;
use Illuminate\Http\Request;

class PoskoController extends Controller
{
    public function index()
    {
        $title = "Posko";
        $posko = Posko::all();
        return view('posko.index', compact(['posko', 'title']));
    }

    public function create()
    {
        return view('posko.create');
    }

    public function store(Request $request)
    {
        //insert proper name apapun ke database
        Posko::create($request->all());
        
        //redirect to index
        return redirect()->route('posko.index');
    }

    public function show(Posko $posko)
    {
        
    }

    public function edit(Posko $posko)
    {
        return view('edit', compact(['Posko']));
    }

    public function update(Request $request, Posko $posko)
    {
        $this->validate($request, [
            'name'          => 'required|min:3',
            'link_gps'      => 'required|min:3',
            'kordinator'    => 'required|min:3',
            'contact_pos'   => 'required|min:3',
            'user_id'       => 'required|min:3',
            'delegation_id' => 'required|min:3',
            'pengungsi'     => 'required|min:3',
            'notes'         => 'required|min:3',
            'status_id'     => 'required|min:3',
            

        ]);

        // Logistic::updated($request->all());
        
        $posko->update([
            'name'          => $request->name,
            'link'          => $request->link_gps,
            'kordinator'    => $request->kordinator,
            'contact_pos'   => $request->contact_pos,
            'user'          => $request->user_id,
            'delegation'    => $request->delegation_id,
            'pengungsi'     => $request->pengungsi,
            'notes'         => $request->notes,
            'status'        => $request->status_id,\
        ]);

        //redirect to index
        return redirect()->route('/posko');
    }

    public function destroy(Posko $posko)
    {
        Posko::deleted('id', $id);

        // DB::table('logistic')->where('logistic_id',$id)->delete();
		
        // alihkan halaman ke halaman index
        return redirect('/posko');
    }
}
