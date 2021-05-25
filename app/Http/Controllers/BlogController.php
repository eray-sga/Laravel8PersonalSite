<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $bloglist = DB::table('blogs')->get();
        return view('back.blog',compact('bloglist'));
    }

    public function add()
    {
        return view('back.blog-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'editor1' => 'required',
        ]);

        $service = DB::table('blogs')->insert([
                'title' => $request->input('title'),
                'slug' => $request->input('slug'),
                'description' => $request->input('editor1')
        ]);

        toastr()->success('Ekleme işlemi başarılı!');
        return redirect()->route('blog');
                   
    }

    public function edit($id)
    {
        $blogedit = DB::table('blogs')->where('id',$id)->first();
        return view('back.blog-edit',compact('blogedit'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'editor1' => 'required',
        ]);

        $services = DB::table('blogs')
              ->where('id', $request->input('id'))
              ->update([
                'title' => $request->input('title'),
                'slug' => $request->input('slug'),
                'description' => $request->input('editor1')
                  ]);

        
        toastr()->success('Güncelleme işlemi başarılı!');
        return redirect()->route('blog');
     
    }

    public function delete(Request $request)
    {
        $blogdelete = DB::table('blogs')->where('id',$request->id)->delete();

        toastr()->success('Silme işlemi başarılı!');
        return redirect()->route('blog');
    }
}
