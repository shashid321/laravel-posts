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

    // function find($val){
    //     select * from posts where id = $val;
    // }
    public function show($id){
        $post = Post::find($id);
        return view('post-detail', compact('post'));
    }

    public function edit($id){
        $post = Post::find($id);
        return view('edit-post', compact('post'));
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'name' => "required|unique:posts|max:8",
            'description' => "required"
        ]);

        // $post = Post::find($id);

        Post::find($id)->update($request->all());
        return redirect()->route('index');
    }

    public function destroy($id){
        Post::destroy($id);

        return redirect()->route('index');
    }
}
