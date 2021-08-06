<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Commente;
use App\Models\Personne;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            "post_id" => 'required',
            'comment' => 'required',
            'personne_id' => 'required'
        ]);
        $comment = new Commente;
        $comment->post_id = $request->post_id;
        $comment->personne_id = $request->personne_id;
        $comment->comment = $request->comment;
        if ($comment->save()) {
            $post = PostResource::collection(Post::where('id', '=', $request->post_id)->get());
            return $post;
        } else
            return json_encode(['message' => "comment not save"]);
    }

    public function destroy(Request $request) {
        $this->validate($request, [
            "post_id" => 'required',
            'comment_id' => 'required',
            "personne_id" => 'required'
        ]);
        $comment =  Personne::find($request->personne_id)->comment()->where('id', $request->comment_id)->delete();

        if($comment){
            $post = PostResource::collection(Post::where('id', '=', $request->post_id)->get());
            return $post;
        }


    }
}
