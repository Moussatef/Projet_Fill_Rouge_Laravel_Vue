<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    static  function register(Request $request)
    {
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
            'img' => 'nullable|string'
        ]);

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
            'img' => $fields['img']
        ]);




        $token = $personne->createToken('moussatefToken')->plainTextToken;
        $response = [
            'Personne' => $personne,
            'token' => $token
        ];
        return response($response, 201);
    }



    public function registerU(Request $request)
    {

        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('moussatefTokenUser')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }


    public function loginU(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'error in sign up'
            ], 401);
        }

        $token = $user->createToken('moussatefTokenUser')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
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
                'message' => 'error in sign up'
            ], 401);
        }

        $token = $personne->createToken('moussatefTokenUser@')->plainTextToken;

        $response = [
            'personne' => $personne,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
