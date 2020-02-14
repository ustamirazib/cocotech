<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function master(){
      return view('app.master');
    }
    public function saranUsers(Request $request){
        $saran = \App\Suggestion::create($request->all());
        return redirect('/');
    }
}
