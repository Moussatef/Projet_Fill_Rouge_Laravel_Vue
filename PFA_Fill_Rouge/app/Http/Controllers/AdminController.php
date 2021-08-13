<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApprenantResource;
use App\Http\Resources\PostResource;
use App\Models\Apprenant;
use App\Models\Commente;
use App\Models\Like;
use App\Models\Personne;
use App\Models\Post;
use App\Models\Responsable;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getApprenantInfo()
    {
        $apprenant = ApprenantResource::collection(Apprenant::all());
        return $apprenant;
    }
    public function validateApprenant(Request $request){
        $this->validate($request,[
            "personne_id"  => "required"
        ]);

        $personne = Personne::find($request->personne_id);

        $personne->validation = 'true';

        $personne->save();

        $apprenant = ApprenantResource::collection(Apprenant::where('personne_id' ,'=', $personne->id)->get());
        return $apprenant;

    }

    public function statistic()
    {
        $total_Apprenant = Apprenant::count();
        $total_Responsable = Responsable::count();
        $total_posts = Post::count();
        $total_Like = Like::count();
        $total_comments = Commente::count();



        $response = [
            'total_Apprenant' => $total_Apprenant,
            'total_Responsable' => $total_Responsable,
            'total_posts' => $total_posts,
            'total_Like' => $total_Like,
            'total_comments' => $total_comments

        ];

        return $response;
    }
    public function getAllPosts(){
        return PostResource::collection(Post::all());
    }

    public function destroy(Request  $request)
    {
        $this->validate($request, [
            'id_personne' => 'required|integer',
        ]);
        //
        $personne = new PersonneController();

        $stmt =  $personne->destroy($request);
        $res = [];
        if ($stmt) {
            $res = ApprenantResource::collection(Apprenant::all());
            return response(json_encode($res));
        } else {
            $res = ['message' => 'personne is not found'];
            return response(json_encode($res));
        }
    }
}
