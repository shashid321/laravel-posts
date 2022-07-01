<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        // $posts = Post::where('category', 'mat')->get();

        return view('home', ['posts' => $posts]);
    }

    public function create(){
        return view('add_post');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => "required|unique:posts|max:8",
            'description' => "required"
        ]);

        // Reg
        // password
 
        // $post = new Post();
        // $post->name = $request->username;
        // $post->description = Hash($request->password);
        // $post->save();
        
        // $input = $request->all();
        // $input['password'] = hash($request->password);
        // Post::create($input);

        // $post = new Post([
        //     'name' => $request->name,
        //     'description' => $request->description,
        // ]);

        $post = Post::create($request->all());

        return redirect()->route('index');
    }

    public function show($id){
        $post = Post::find($id);
        // dd($post); 
        return view('post-detail', compact('post'));
    }
}
