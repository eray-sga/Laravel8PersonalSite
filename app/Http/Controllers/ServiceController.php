<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $slist = DB::table('services')->get();
        return view('back.service',compact('slist'));
    }

    public function add()
    {
        return view('back.service-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'editor1' => 'required',
        ]);

        $service = DB::table('services')->insert([
                'icon' => $request->input('icon'),
                'title' => $request->input('title'),
                'description' => $request->input('editor1')
        ]);

        toastr()->success('Ekleme işlemi başarılı!');
        return redirect()->route('service');
                   
    }

    public function edit($id)
    {
        $supdate = DB::table('services')->where('id',$id)->first();
        return view('back.service-edit',compact('supdate'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'editor1' => 'required',
        ]);

        $services = DB::table('services')
              ->where('id', $request->input('id'))
              ->update([
                  'icon' => $request->input('icon'),
                  'title' => $request->input('title'),
                  'description' => $request->input('editor1')
                  ]);

        
        toastr()->success('Güncelleme işlemi başarılı!');
        return redirect()->route('service');
     
    }

    public function delete(Request $request)
    {
        $servicedelete = DB::table('services')->where('id',$request->id)->delete();

        toastr()->success('Silme işlemi başarılı!');
        return redirect()->route('service');
    }
}
