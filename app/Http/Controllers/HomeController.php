<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function index()
    {
        $about = DB::table('abouts')->first();
        $service = DB::table('services')->get();
        $skills = DB::table('skills')->get();
        $blog = DB::table('blogs')->get();
        return view('front.home',compact('about','service','skills'));
    }

    public function blog()
    {
        $blog = DB::table('blogs')->get();
        return view('front.blog',compact('blog'));
    }

    public function blogDetail(Request $request)
    {
        $blog = DB::table('blogs')->where('slug',$request->slug)->first();
        return view('front.blog-detail',compact('blog'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function contactpost(Request $request)
    {
        $rules = [
            'name'  => 'required|min:3',
            'email' => 'required|email',
            'message'   => 'required|min:10'
        ];


        $this->validate($request, $rules);

        Mail::send([],[],function($message) use($request){
            $message->from('iletisim@blogsitesi.com','Blog Sitesi'); //bizden gidecek
            $message->to('eraykalkan6@gmail.com');
            $message->setBody(' Mesajı gönderen: '.$request->name.'<br />
            Mesajı gönderen mail: '.$request->email.'<br />
            Mesaj: '.$request->message.'<br /><br />
            Mesaj gönderilme tarihi: '.now().'
','text/html');
            $message->subject($request->name. ' iletişimden mesaj gönderdi.');
        });
        

        return redirect()->route('contact')->with('success','Mesajınız iletildi. Teşekkür ederim.');
    }
}
