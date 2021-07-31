<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Post;
use App\Models\PostProfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::orderByDesc('created_at')
            ->get();
        // $like =  Personne::find($personne_id)->receivedLikes()->get();

        $posts = $posts->fresh('postProfil', 'comment', 'like', 'imgPost');
        // $test = $posts->fresh('personne');
        // $posts = Post::latest()->with(['like', 'comment'])->paginate(5);

        if ($posts) {
            $response = [
                "post" => $posts,
            ];
            return  ($response);
        } else
            return response('No posts found', 440);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostProfile($personne_id)
    {
        $posts =  Personne::find($personne_id)->post()
            ->orderByDesc('created_at')
            ->get();
        // $like =  Personne::find($personne_id)->receivedLikes()->get();

        $posts = $posts->fresh('postProfil', 'comment', 'like', 'imgPost');
        // $test = $posts->fresh('personne');
        return $posts;
    }

    public function uploadsImg($img, $post)
    {
        $fileUpload = new FileUploadController;
        $newnamePost =  $fileUpload->upload($img, 'public/postImage');
        $post->imgPost()->create(['path' => $newnamePost]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProfile(Request $request)
    {
        //Add new post
        $this->validate($request, [
            'titre' => 'required|string|max:60',
            'description' => 'required|string|max:500',
            'personne_id' => 'required',

        ]);
        $post = new Post;
        $post->titre = $request->titre;
        $post->description = $request->description;
        $post->personne_id = $request->personne_id;

        if ($post->save()) {
            $post->postProfil()->create();
            if (strcmp($request->img_one, "undefined") != 0) {
                $this->validate($request, [
                    'img_one' => ' nullable|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
                ]);
                $this->uploadsImg($request->img_one, $post);
            }
            if (strcmp($request->img_two, "undefined") != 0) {
                $this->validate($request, [
                    'img_two' => ' nullable|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
                ]);
                $this->uploadsImg($request->img_two, $post);
            }
            if (strcmp($request->img_three, "undefined") != 0) {
                $this->validate($request, [
                    'img_three' => ' nullable|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
                ]);
                $this->uploadsImg($request->img_three, $post);
            }
            if (strcmp($request->img_fore, "undefined") != 0) {
                $this->validate($request, [
                    'img_fore' => ' nullable|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
                ]);
                $this->uploadsImg($request->img_fore, $post);
            }
            return response($post->fresh('postProfil', 'comment', 'like', 'imgPost'), 200);
        } else
            return response('Post profile is not created', 409);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProblem(Request $request)
    {
        //Add new post
        $this->validate($request, [
            'titre' => 'required|string|max:60',
            'description' => 'required|string|max:500',
            'personne_id' => 'required',
            'categorie_id' => 'required',
        ]);
        $post = new Post;
        $post->titre = $request->titre;
        $post->description = $request->description;
        $post->personne_id = $request->personne_id;

        if ($post->save()) {
            if ($request->img_one) {
                $fileUpload = new FileUploadController;
                $newnamePost =  $fileUpload->upload($request->img_one, 'public/postImage');
                $post->imgPost()->create(['path' => $newnamePost]);
            }
            $post->postProblem()->create(['categorie_id' => $request->categorie_id]);
            return response($post->fresh('postProfil', 'comment', 'like', 'imgPost'), 200);
        } else
            return response('Post problem is not created', 409);
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
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $post = Post::find($id);
        $post->titre = $request->title;
        $post->description = $request->description;
        if ($post->save()) {
            return $post;
        } else
            return response('noting do ');
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
