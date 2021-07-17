<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostProfile($personne_id)
    {
        // $posts =  DB::table('posts')
        //     ->join('post_profils', 'posts.id', '=', 'post_profils.post_id')
        //     ->leftJoin('img_posts', 'posts.id', '=', 'img_posts.post_id')
        //     ->leftJoin('likes', 'posts.id', '=', 'likes.post_id')
        //     ->where('posts.personne_id', '=', $personne_id)
        //     ->groupBy('posts.id', 'img_posts.path')
        //     ->orderByDesc('posts.created_at')
        //     ->select('posts.*', 'img_posts.path', DB::raw('count(likes.id) as total_likes'))
        //     ->get();
        // ->groupBy('posts.id', 'img_posts.path', 'likes.id')
        // , 'likes.id', DB::raw('count(posts.id) as total_likes')


        $posts =  Personne::find($personne_id)->post()
        ->orderByDesc('created_at')
        ->get();
        // $like =  Personne::find($personne_id)->receivedLikes()->get();

        $posts = $posts->fresh('like', 'comment');
        return $posts ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
