<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $blog = Blog::orderBy("id", 'asc')->limit(4)->get();

        return view("home", compact("blog"));
    }

    public function detailBlog($slug){
        $blog = Blog::where("slug", $slug)->firstOrFail();
        
        return view("blog.detail", compact("blog"));
    }

}
