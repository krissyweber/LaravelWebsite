<?php

namespace App\Http\Controllers;


use index;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function detailPost(){
        return view('detail');
    }
    public function index(){
       
        $post = Post::get();
        
        return view('welcome', ['post'=>$post]);
    }
}
