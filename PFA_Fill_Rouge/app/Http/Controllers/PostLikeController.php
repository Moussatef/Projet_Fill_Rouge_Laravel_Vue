<?php

namespace App\Http\Controllers;

use App\Http\Resources\LikeResource;
use App\Http\Resources\PostResource;
use App\Models\Like;
use App\Models\Personne;
use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    //

    public function index()
    {
        return LikeResource::collection(Like::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "post_id" => 'required',
            "personne_id" => 'required',
        ]);
        $post = Post::find($request->post_id);

        if ($post->checkLike(Personne::find($request->personne_id)))
            return response('already like this post', 409);

        $like = new  like;
        // ::create([
        //     "personne_id" => $request->personne_id,
        //     "post_id" => $request->post_id,
        // ]);
        $like->personne_id = $request->personne_id;
        $like->post_id = $request->post_id;
        if ($like->save()) {
            $post = PostResource::collection(Post::where('id', '=', $like->post_id)->get());
            return $post;
        } else
            return response('like is not save ', 540);
    }
    public function getLikeInfo($post_id)
    {
        $infoLike = Like::select('likes.*', 'personnes.nom', 'personnes.prenom')
            ->where('likes.post_id', '=', $post_id)
            ->join('personnes', 'personnes.id', '=', 'likes.personne_id')
            ->get();
        $response = [
            'like' => $infoLike
        ];
        return $response;
    }
    public function destroy(Request $request)
    {
        $this->validate($request, [
            "post_id" => 'required',
            "personne_id" => 'required',
        ]);
        Personne::find($request->personne_id)->like()->where('post_id', $request->post_id)->delete();
        $post = PostResource::collection(Post::where('id', '=', $request->post_id)->get());
        return  $post ;
    }
}
