<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class PostController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        
        
       
        
        $posts= Post::all();
        $posts=Post::paginate(5);

        return view('admin.post.index', compact('posts', 'posts'));
    }



    public function approved($id){
         $data=post::find($id);
         $data->status='Approved';
         $data->save();
         if(auth()->user()->role_as == '1'){
            return redirect()->back();
         }else{
           
           return redirect()->back()->with('error', 'You are not admin');
         }
          

    }
    public function pending($id){
        $data=post::find($id);
        $data->status='Pending';
        $data->save();

        if(auth()->user()->role_as == '1'){
            return redirect()->back();
         }else{
           
           return redirect()->back()->with('error', 'You are not admin');
         }

   }

    public function create(){
        return view('admin.post.create');
    }

    public function store(Request $request){
        $validate= $request->validate([
          'title'=>['required','string'],
          'articles'=>['required','string'],
          

        ]);
        $post= new Post;
        $post->title=$validate['title'];
        $post->articles=$validate['articles'];
        $post->status='IN PROGRESS';
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('admin/posts')->with('message', 'Post added successfully');

    }

    public function edit($id){
        $post = Post::find($id);
        //check for correct user
        if(auth()->user()->role_as == '1'){
            return view('admin.post.edit',compact('post'));
        }
        if(auth()->user()->id !==$post->user_id){
            return redirect('admin/posts')->with('error', 'Unauthorized page');
        }
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
        if(auth()->user()->id !==$post->user_id){
            return redirect('admin/posts')->with('error', 'Unauthorized page');
        }
        $post->delete();
        return redirect('admin/posts')->with('message', 'Post deleted successfully');

    }
}
