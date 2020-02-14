<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $data_laptop = \App\Laptop::all();
        $data_smartphone = \App\Smartphone::all();
        return view("admin.dashboard", ['data_laptop' => $data_laptop], ['data_smartphone' => $data_smartphone]);
    }
    public function deleteLaptop($id)
    {
        \App\Laptop::where('id', $id)->delete();
        return redirect('/dashboard');
    }

    public function deleteSmartphone($id){
        \App\Smartphone::where('id', $id)->delete();
        return redirect('/dashboard');
    }
    public function kotakSaran() {
        $saran = \App\Suggestion::all();
        return view('admin.kotak_saran', ['saran' => $saran]);
    }
}
