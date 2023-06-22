<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SantriController extends Controller
{
    public function index(){
        $santri = Santri::all();
        return view('santri.index',compact(['santri']));
    }

    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        Santri::create($request->except(['_token','submit']));
        return redirect('/santri');
    }
    
    public function edit($id)
    {
        $santri = Santri::find($id);
        return view('santri.edit',compact(['santri']));
    }

    public function update($id, Request $request)
    {
        $santri = Santri::find($id);
        $santri->update($request->except(['_token','submit']));
        return redirect('/santri');
    }

    public function destroy($id)
    {
        $santri = Santri::find($id);
        $santri->delete();
        return redirect('/santri');
    }
}
