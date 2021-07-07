<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $fields = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'telephon' => 'string',
            'date_N' => 'date',
            'adresse' => 'string',
            'github' => 'string',
            'linkedin' => 'string',
            'facebook' => 'string',
            'instagram' => 'string',
            'img' => 'string'
        ]);

        $personne = Personne::create([
            'nom' => $fields['nom'],
            'prenom' => $fields['prenom'],
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
        $token = $personne->createToken('moussatefToken@')->plainTextToken;
        $response = [
            'Personne' => $personne,
            'token' => $token
        ];
        return response($response, 201);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
