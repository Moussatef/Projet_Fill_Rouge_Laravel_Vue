<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        $personne->cover = $newnameCover;
        $personne->save();
        return $personne;
    }

    public function updateInfo(Request $request)
    {
        $this->validate($request, [
            "id" => 'required',
            "nom" => 'required|string',
            'prenom' => 'required|string',
            'telephon' => 'nullable|string',
            'date_N' => 'required|string',
            'bio' => 'nullable|string',
        ]);

        $personne = Personne::find($request->id);

        $personne->nom = $request->nom;
        $personne->prenom = $request->prenom;
        $personne->telephon = $request->telephon;
        $personne->date_N = $request->date_N;
        $personne->bio = $request->bio;

        if ($personne->save())
            return $personne;
        else
            return response('Error', 420);
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            "id" => 'required',
            "password" => 'required|string|confirmed|min:6',
            'old_password' => 'required|string',
        ]);

        $personne = Personne::find($request->id);

        if (Hash::check($request->old_password, $personne->password)) {
            $personne->password = bcrypt($request->password);
            if ($personne->save())
                return $personne;
            else
                return response('error', 500);
        } else
            return response('error', 401);
    }

    public function updateInfoSoc(Request $request)
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

        $personne = Personne::find($request->id);


        $personne->adresse = $request->adresse;
        $personne->github = $request->github;
        $personne->facebook = $request->facebook;
        $personne->instagram = $request->instagram;
        $personne->linkedin = $request->linkedin;
        $personne->email = $request->email;

        $personne->save();


        return $personne;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete personne from data base
        $personne = Personne::find($id);

        $personne->delete();

        return "Perssone successfuly deleted";
    }
}
