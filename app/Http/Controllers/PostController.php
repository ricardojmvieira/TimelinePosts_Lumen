<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }

    public function store(Request $request){
        try{
            $post = new Post();
            $post->text = $request->text;
            $post->time = $request->time;
            if($post->save()){
                return response()->json(['message' => 'Post created']);
            }
        }catch (\Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function destroy($id){
        try{
            $post = Post::findOrFail($id);
            if($post->delete()){
                return response()->json(['message' => 'Post deleted']);
            }
        }catch (\Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
