<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Personne;
use Illuminate\Http\Request;


class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all personnes
        return Personne::all();
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
        return Personne::find($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_n($id)
    {
        $personne = Personne::find($id);


        $rusel = [
            "id" => $personne->id,
            "nom" => $personne->nom,
            "prenom" => $personne->prenom,
            "img" => $personne->img,
        ];
        return $rusel;
    }


    public function test($id)
    {
        $personne = Personne::find($id);


        $rusel = [
            'personne' => $personne,
            'likes ' => $personne->receivedLikes,
            'comment ' => $personne->receivedComments,


        ];
        return $rusel;
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
        // $this->validate($request, [
        //     'github' => 'nullable|string',
        //     'facebook' => 'nullable|string',
        //     'instagram' => 'nullable|string',
        //     'linkedin' => 'nullable|string',
        //     'adresse' => 'nullable|string',
        //     'email' => 'required|email'
        // ]);

        $personne = Personne::find($id);
        $personne->update($request->all());
        return $personne;
    }

    public function updateImg(Request $request, $id)
    {
        $fields = $request->validate([
            'img' =>  'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
        ]);
        $fileUpload = new FileUploadController;
        $newnameProfile = !empty($fields['img']) ?  $fileUpload->upload($fields['img'], 'public/image') : '';
        $newnameCover = !empty($fields['cover']) ?  $fileUpload->upload($fields['cover'], 'public/cover') : '';
        $personne = Personne::find($id);
        // $personne->update([
        //     'img' => $newnameProfile,
        //     'cover' => $newnameCover

        // ]);

        $personne->img = $newnameProfile;
        $personne->cover = $newnameCover;
        $personne->save();

        return $personne;
    }
    public function updateImgProfile(Request $request, $id)
    {
        $fields = $request->validate([
            'img' =>  'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
        ]);
        $fileUpload = new FileUploadController;
        $newnameProfile = !empty($fields['img']) ?  $fileUpload->upload($fields['img'], 'public/image') : '';
        $personne = Personne::find($id);
        // $personne->update([
        //     'img' => $newnameProfile,
        //     'cover' => $newnameCover

        // ]);

        $personne->img = $newnameProfile;
        $personne->save();

        return $personne;
    }
    public function updateImgCover(Request $request, $id)
    {
        $fields = $request->validate([
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
        ]);
        $fileUpload = new FileUploadController;
        $newnameCover = !empty($fields['cover']) ?  $fileUpload->upload($fields['cover'], 'public/cover') : '';
        $personne = Personne::find($id);
        // $personne->update([
        //     'img' => $newnameProfile,
        //     'cover' => $newnameCover

        // ]);

        $personne->cover = $newnameCover;
        $personne->save();

        return $personne;
    }

    public function updateInfo(Request $request)
    {

        $this->validate($request, [
            "id" => 'required',
            "github" => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'adresse' => 'nullable|string',
            'email' => 'required|email'
        ]);

        $personne = Personne::find($request->id)->update([
            "github" => $request->github,
            "facebook" => $request->facebook,
            "instagram" => $request->instagram,
            "linkedin" => $request->linkedin,
            "email" => $request->email
        ]);

        return $personne;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request  $request)
    {
        $fields = $request->validate([
            'id_personne' => 'required|integer',
        ]);
        //Delete personne from data base
        if (personne::destroy($fields['id_personne']))
            return "Perssone successfuly deleted";
        else
            "persson not found";
    }
}
