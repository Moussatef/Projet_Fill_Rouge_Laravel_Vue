<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Personne;
use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    //

    public function store(Request $request)
    {
        $this->validate($request, [
            "post_id" => 'required',
            "personne_id" => 'required',
        ]);
        $post = Post::find($request->post_id);

        if ($post->checkLike(Personne::find($request->personne_id)))
            return response('already like this post', 409);
        like::create([
            "personne_id" => $request->personne_id,
            "post_id" => $request->post_id,
        ]);

        return [
            "post_id" => $request->post_id,
            "personne_id" => $request->personne_id,
        ];
    }
    public function destroy(Request $request)
    {
        $this->validate($request, [
            "post_id" => 'required',
            "personne_id" => 'required',
        ]);
        return Personne::find($request->personne_id)->like()->where('post_id', $request->post_id)->delete();

    }
}
