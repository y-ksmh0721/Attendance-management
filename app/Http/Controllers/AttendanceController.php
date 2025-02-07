<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
// use Illuminate\Http\AttendanceRequest;

class AttendanceController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        $attendance = $request->all();

        $newAtt = new Attendance();
        $newAtt->date = $request->date;
        $newAtt->morning_site = $request->morning_site;
        $newAtt->afternoon_site = $request->afternoon_site;
        $newAtt->overtime = $request->overtime;
        $newAtt->save();



        return view('store',compact('attendance'));
    }
}
