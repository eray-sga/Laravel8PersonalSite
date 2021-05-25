<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    public function index()
    {
        $skills = DB::table('skills')->get();
        return view('back.skill',compact('skills'));
    }

    public function add()
    {
        return view('back.skill-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'percent' => 'required|numeric',
        ]);

        $service = DB::table('skills')->insert([
                'title' => $request->input('title'),
                'percent' => $request->input('percent')
        ]);

        toastr()->success('Ekleme işlemi başarılı!');
        return redirect()->route('skill');
                   
    }

    public function edit($id)
    {
        $skupdate = DB::table('skills')->where('id',$id)->first();
        return view('back.skill-edit',compact('skupdate'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'percent' => 'required|numeric',
        ]);

        $skills = DB::table('skills')
              ->where('id', $request->input('id'))
              ->update([
                  'title' => $request->input('title'),
                  'percent' => $request->input('percent')
                  ]);

        
        toastr()->success('Güncelleme işlemi başarılı!');
        return redirect()->route('skill');
     
    }

    public function delete(Request $request)
    {
        $skilldelete = DB::table('skills')->where('id',$request->id)->delete();

        toastr()->success('Silme işlemi başarılı!');
        return redirect()->route('skill');
    }
}
