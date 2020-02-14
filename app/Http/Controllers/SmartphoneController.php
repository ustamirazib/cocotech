<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function index(Request $request) {
        if($request->has('carismartphone')){
            $data_smartphone = \App\Smartphone::where('namaSmartphone','LIKE','%'.$request->carismartphone.'%')->get();
        }else {
            $data_smartphone = \App\Smartphone::orderBy('created_at', 'desc')->get();
        }
        return view('smartphone.smartphone', ['data_smartphone' => $data_smartphone]);
    }
    public function create(Request $request){
        $data_smartphone = \App\Smartphone::create($request->all());
        if($request->hasFile('gambarBarang')){
            $request->file('gambarBarang')->move('images/smartphone/', $request->file('gambarBarang')->getClientOriginalName());
            //masukan ke database
            $data_smartphone->gambarBarang = $request->file('gambarBarang')->getClientOriginalName();
            $data_smartphone->save();
        }
        return redirect('/dashboard');

    }
    public function detail($id){
        $data_smartphone = \App\Smartphone::findOrFail($id);
        return view('detail.detail-smartphone', ['data_smartphone' => $data_smartphone]);
    }
}
