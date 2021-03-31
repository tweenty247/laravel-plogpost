<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(5);
        return view('post.index', ['posts'=>$posts]);
    }

    public function addpost(){
        return view('post.addpost');
    }
    
    public function store(Request $request){

        $this->validate($request, [
            'body'=> 'required|min:2',
        ]);
        // auth()->user()->post()->create([

        // ]);

        $request->user()->posts()->create([
            'body'=>$request->body
        ]);
        return redirect('posts');
    }
}
