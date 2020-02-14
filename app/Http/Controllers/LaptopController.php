<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            //Mencari data di table laptop
            $data_laptop = \App\Laptop::where('namaLaptop','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_laptop = \App\Laptop::orderBy('created_at', 'desc')->get();
        }
        return view('laptop.laptop', ['data_laptop' => $data_laptop]);
    }
    public function create(Request $request){
        // dd($request->all());
        
        $data_laptop = \App\Laptop::create($request->all());
        if($request->hasFile('gambarBarang')){
            $this->validate($request, [
                'gambarBarang' => 'required|image|mimes:jpeg,jpg,png|max:2500'
            ]);
            $request->file('gambarBarang')->move('images/', $request->file('gambarBarang')->getClientOriginalName());
            //masukan ke db
            $data_laptop->gambarBarang = $request->file('gambarBarang')->getClientOriginalName();
            $data_laptop->save();

        }
        return redirect('/dashboard');
    }
    public function detail($id){
        $data_laptop = \App\Laptop::findOrFail($id);
        return view('detail.detail-laptop', ['data_laptop' => $data_laptop]);
    }
}
