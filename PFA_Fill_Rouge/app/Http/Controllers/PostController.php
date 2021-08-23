<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Personne;
use App\Models\Post;
use App\Models\PostProblem;
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
        $posts =  PostResource::collection(Post::orderByDesc('created_at')->whereIn('id', PostProfil::pluck('post_id')->all())->where('public', 0)->paginate(10));

        if ($posts) {
            return  $posts;
        } else
            return response('No posts found', 440);
    }

    public function indexProblem()
    {

        $posts =  PostResource::collection(Post::orderByDesc('created_at')->whereIn('id', PostProblem::pluck('post_id')->all())->where('public', 0)->paginate(10));

        if ($posts) {
            return  $posts;
        } else
            return response('No posts found', 440);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostProfile()
    {
        $posts =  PostResource::collection(Personne::find(auth()->id())->post()
            ->whereIn('id', PostProfil::pluck('post_id')->all())
            ->orderByDesc('created_at')
            ->paginate(10));

        return $posts;
    }

    public function getPostProblem()
    {
        $posts =  PostResource::collection(Personne::find(auth()->id())->post()
            ->whereIn('id', PostProblem::pluck('post_id')->all())
            ->orderByDesc('created_at')
            ->paginate(10));

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


        ]);

        $post = new Post;
        $post->titre = $request->titre;
        $post->description = $request->description;
        $post->personne_id = auth()->id();

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
            $post = PostResource::collection(Post::where('id', '=', $post->id)->get());
            return $post;
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
            'description' => 'required|string',
            'categorie_id' => 'required',
        ]);
        $post = new Post;
        $post->titre = $request->titre;
        $post->description = $request->description;
        $post->personne_id = auth()->id();

        if ($post->save()) {
            $post->postProblem()->create(['categorie_id' => $request->categorie_id]);
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
            $post = PostResource::collection(Post::where('id', '=', $post->id)->get());
            return $post;
        } else
            return response('Post profile is not created', 409);
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
            'public' => 'required'
        ]);
        $post = Post::find($id);
        $post->titre = $request->title;
        $post->description = $request->description;
        if ($request->public == 0 || $request->public == 1)
            $post->public = $request->public;
        else
            $post->public = 0;
        if ($post->save()) {
            $post = PostResource::collection(Post::where('id', '=', $post->id)->paginate(10));
            return $post;
        } else
            return response('noting do ', 500);
    }

    public function getTotals($id)
    {

        $personne = Personne::find($id);

        $Nb_Posts = $personne->post->count();
        $Nb_Like = $personne->receivedLikes->count();
        $Nb_Comment = $personne->receivedComments->count();

        $response = [
            'nb_Posts' => $Nb_Posts,
            'nb_Like' => $Nb_Like,
            'nb_Comment' => $Nb_Comment
        ];

        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $post = Post::find($id)->delete();
        if ($post)
            return response(
                'delete successfuly',
                200
            );
        else  response("filde deleted", 400);
    }

    public function destroyProblem(Request $request, $id)
    {
        //
        $post = Post::find($id)->delete();
        if ($post)
            return response(
                'delete successfuly',200
            );
        else  response("filde deleted", 400);
    }
}
