<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index()
    {
        $list = DB::table('abouts')->first();
        return view('back.about',compact('list'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'editor1' => 'required',
        ]);

        $about = DB::table('abouts')
              ->where('id', 1)
              ->update([
                  'title' => $request->input('title'),
                  'description' => $request->input('editor1')
                  ]);

        
        toastr()->success('Güncelleme işlemi başarılı!');
        return redirect()->route('about');
     
    }
}
