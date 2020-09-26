<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Statics;
use App\Teammate;
use App\About;
use App\Contact;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $statics = Statics::first();
        return view('index',compact('statics'));
    }

    public function statics()
    {
        $statics = Statics::first();
        return view('admin.statics',compact('statics'));
    }

    public function teammate()
    {
        $teammates = Teammate::All();
        return view('teammate',compact('teammates'));
    }

    public function gallery()
    {
        $galleries = Gallery::All();
        return view('gallery',compact('galleries'));
    }
    public function about()
    {
        $about = About::first();
        return view('about',compact('about'));
    }
    public function contact(){
        $contact = Contact::first();
        return view('contact',compact('contact'));
    }

    public function blog(){
        $posts = Post::paginate(5);
        return view('blog',compact('posts'));
    }
}
