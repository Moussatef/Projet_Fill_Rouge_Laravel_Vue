<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $this->validate($request, [
            'personne_id' => 'required'
        ]);
        // $image = Personne::find($request->personne_id)->post()->imgPost;
        // SELECT i.* FROM personnes p INNER JOIN posts ps ON p.id=ps.personne_id INNER JOIN img_posts i on ps.id = i.post_id WHERE p.id =1
        
        $image = DB::table('personnes')
            ->join('posts', 'personnes.id', '=', 'posts.personne_id')
            ->join('img_posts', 'posts.id', '=', 'img_posts.post_id')
            ->where('personnes.id', '=', $request->personne_id)
            ->orderByDesc('img_posts.created_at')
            ->select('img_posts.*')
            ->limit(4)
            ->get();


        if ($image)
            return response($image, 200);
        else
            return response('no photo is here now', 404);
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
