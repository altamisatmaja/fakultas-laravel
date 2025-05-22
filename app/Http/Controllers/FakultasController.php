<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index(){
        return view('fakultas.index');
    }

    // TODO: get data from form

    public function store(Request $request){
        // dd($request->all());
        // dd($request->input('nama'));
        $nama = $request->input('nama');
        $nim = $request->input('nim');

        return view('fakultas.index', compact('nama','nim'))->with('success', 'Data berhasil disimpan');
    }
}
