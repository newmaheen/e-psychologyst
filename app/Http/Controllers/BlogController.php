<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogView()
    {
        $posts = DB::table('doctors')
        ->select('doctors.name','blogs.name as blogTitle','blogs.description','blogs.posting_date')
        ->join('blogs','doctors.id','=','blogs.doctor_id')
        ->where('is_blog','=',1)
        ->get();

       return view('front-end.Blog.blog')->with('posts',$posts);

    }
   
}
