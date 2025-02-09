<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    public function index(Request $request){
        $works = Work::orderByDesc('created_at')->get();

        return view('works.index', ['works' => $works]);
    }

    public function confirm(Request $request){
        $work = (object) $request->only(['site_name']);

        return view('works.confirm', ['work' => $work]);
    }

    public function complete(Request $request){
        $work = (object) $request->only(['site_name']);

        //DBへ保存処理
        $works = new Work();
        $works->name = $work->site_name;
        $works->save();

        return view('works.complete',compact('work'));
    }

    //リストページ
    public function toggleStatus($id){
        $work = Work::findOrFail($id);

        $work->status = ($work->status === 'active') ? 'inactive' : 'active';
        $work->save();

        return redirect()->back()->with('success','ステータスを変更しました。');
    }

}
