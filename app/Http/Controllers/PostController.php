<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create (Request $request) 
    {
        $titlename = $request -> get('title');
        $descriptionname = $request -> get('description');
     
        $prod = new Post();
        $prod->title = $titlename;
        $prod->description = $descriptionname;
        $prod->save();
        return redirect('list');
    }

    public function list(Request $request)
    {
        $data = Post::all();
        return view('list',['data'=>$data]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('show')->with('posts', $post);
    }   

    public function updatedelete(Request $req){
        $id = $req->get('id');
        $titlename = $req->get('title');
        $descriptionname = $req->get('description');
        if($req->get('update') == '수정'){
            return view('updateview',['id'=>$id, 'title'=>$titlename,'description'=>$descriptionname]);
        }
        else{
            $prod = Post::find($id);
            $prod->delete();
        }
        return redirect('/');

    }

    public function update(Request $req){
        $id = $req->get('id');
        $titlename = $req->get('title');
        $descriptionname = $req->get('description');
        $prod = Post::find($id);
        $prod->title = $titlename;
        $prod->description = $descriptionname;
        $prod->save();
        return redirect('/');
    }
}

?>
