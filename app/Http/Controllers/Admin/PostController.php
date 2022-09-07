<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts= Post::all();

        return view('admin.post.index', compact('posts'));
    }

    public function create(){
        return view('admin.post.create');
    }

    public function store(Request $request){
        $validate= $request->validate([
          'title'=>['required','string'],
          'articles'=>['required','string'],
          'status'=>['required','string']
        ]);
        $post= new Post;
        $post->title=$validate['title'];
        $post->articles=$validate['articles'];
        $post->status=$request->status == true ? '1':'0';
        $post->save();

        return redirect('admin/posts')->with('message', 'Post added successfully');

    }

    public function edit($id){
        $post = Post::find($id);
        return view('admin.post.edit',compact('post'));
    }

    public function update( Request $request,$id){
        $validate= $request->validate([
            'title'=>['required','string'],
            'articles'=>['required','string'],
            'status'=>['required','string']
          ]);

          $post = Post::find($id);
          $post->title=$validate['title'];
          $post->articles=$validate['articles'];
          $post->status=$request->status == true ? '1':'0';
          $post->update();

        return redirect('admin/posts')->with('message', 'Post updated successfully');

    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/posts')->with('message', 'Post deleted successfully');

    }
}
