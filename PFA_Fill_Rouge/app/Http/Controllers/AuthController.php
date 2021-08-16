<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Personne;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public static  function register(Request $request)
    {
        $fileUpload = new FileUploadController;

        $fields = $request->validate([
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'telephon' => 'nullable|string',
            'date_N' => 'date',
            'adresse' => 'nullable|string',
            'github' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'img' =>       'nullable|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG,GIF,SVG',
            'bio' => 'nullable|string',
            'campus_id' => 'required'
        ]);
        $newnameProfile = !empty($fields['img']) ?  $fileUpload->upload($fields['img'], 'public/image') : 'ycc.jpg';
        $newnameCover = !empty($fields['cover']) ?  $fileUpload->upload($fields['cover'], 'public/cover') : 'cover.jpg';

        $personne = Personne::create([
            'prenom' => $fields['prenom'],
            'nom' => $fields['nom'],
            'telephon' => $fields['telephon'],
            'date_N' => $fields['date_N'],
            'adresse' => $fields['adresse'],
            'email' => $fields['email'],
            'github' => $fields['github'],
            'linkedin' => $fields['linkedin'],
            'facebook' => $fields['facebook'],
            'instagram' => $fields['instagram'],
            'password' => bcrypt($fields['password']),
            'img' =>  $newnameProfile,
            'cover' =>  $newnameCover,
            'bio' =>  $fields['bio'],
            'campus_id' => $fields['campus_id'],
        ]);
        // $token = $personne->createToken('moussatefToken')->plainTextToken;

        return $personne;
    }
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // Check email
        $personne = Personne::where('email', $fields['email'])->first();

        // Check password
        if (!$personne || !Hash::check($fields['password'], $personne->password)) {
            return response([
                'message' => 'Emial or password is incorrect'
            ], 401);
        }

        if (!$personne->validation) {
            return response([
                'message' => "votre compte n'est pas valide !!!"
            ], 401);
        }

        $token = $personne->createToken('moussatefTokenUser@', ['role:user'])->plainTextToken;

        $response = [
            'apprenant_id' => $personne->apprenant->id,
            'id_personne' => $personne->id,
            'token' => $token
        ];

        return response($response, 201);
    }


    public function adminLogin(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // Check email
        $admin = Admin::where('email', $fields['email'])->first();

        // Check password
        if (!$admin || !Hash::check($fields['password'], $admin->password)) {
            return response([
                'message' => 'Email or password is incorrect'
            ], 401);
        }
        $token = $admin->createToken('moussatefTokenAdmin@', ['role:admin'])->plainTextToken;

        $response = [
            'admin_id' => $admin->id,
            'token' => $token
        ];

        return response($response, 200);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
