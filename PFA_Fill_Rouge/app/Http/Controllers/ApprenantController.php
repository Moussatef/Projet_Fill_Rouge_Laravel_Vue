<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Models\Apprenant;
use App\Models\Personne;
use Illuminate\Support\Facades\DB;

class ApprenantController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //register Personne
        $personne = AuthController::register($request);

        $lastpersenne = DB::table('personnes')
            ->selectRaw('id')
            ->orderByRaw('id DESC')
            ->first();
        //register Apprenant
        $apprenant = Apprenant::create([
            'id_personne' => $lastpersenne->id
        ]);

        $res = array(
            'lastpersenne' => $lastpersenne,
            'personne' => $personne,
            'apprenant' => $apprenant
        );
        return response($res);
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
        return Apprenant::find($id)->personne()->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
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
            'img' => 'nullable|string',
            'id' => 'required|integer'

        ]);

        $personne = new PersonneController();

        return $personne->update($request, $fields['id']);
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
            'id_apprenant' => 'required|integer'
        ]);
        //
        $personne = new PersonneController();

        $personne->destroy($request);

        return Apprenant::destroy($fields['id_apprenant']);
    }
}
