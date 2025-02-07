<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\AttendanceRequest;

class AttendanceController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        $attendance = $request->all();
        
        return view('store',compact('attendance'));
    }
}
