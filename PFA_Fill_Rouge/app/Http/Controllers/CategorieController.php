<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Categorie[]|Collection
     */
    public function index()
    {
        return Categorie::orderBy("created_at", "DESC")->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @throws ValidationException
     */

    public function store(Request $request): Response
    {
        $this->validate($request, [
            "libelle" => "required"
        ]);
        $categorie = new Categorie();
        $categorie->libelle = $request->input('libelle');
        $categorie->save();
        return response($categorie);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "libelle" => "required"
        ]);
        $categorie = Categorie::find($id);
        $categorie->libelle = $request->input('libelle');
        $categorie->save();

        return response($categorie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);

        $categorie->delete();

        return response(["message" => "Categorie deleted"]);
    }
}
