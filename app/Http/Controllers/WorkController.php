<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(){
        return view('works.index');
    }

    public function confirm(Request $request){
        $work = $request->all();
        return view('works.confirm');
    }

    public function complete(Request $request){

        return view('works.complete');
    }
}
