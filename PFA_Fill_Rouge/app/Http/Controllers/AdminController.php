<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApprenantResource;
use App\Http\Resources\PostResource;
use App\Models\Admin;
use App\Models\Apprenant;
use App\Models\Commente;
use App\Models\Like;
use App\Models\Personne;
use App\Models\Post;
use App\Models\Responsable;
use App\Models\Campus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function getAdminInfo()
    {
        return Auth::user();
    }
    public function updateAdminInfo(Request $request)
    {
        $this->validate($request, [
            "admin_name"  => "required",
            "email" => "required|email",
        ]);

        $admin = Admin::find(1);

        $admin->admin_name = $request->input('admin_name');
        $admin->email = $request->input('email');

        $admin->save();

        return $admin;
    }
    public function updateAdminPassword(Request $request)
    {
        $this->validate($request, [
            "old_password" => "required",
            "new_password" => "required"
        ]);

        $admin = Admin::find(1);
        if (!Hash::check($request->input('old_password'), $admin->password))
            return response(["message" => "old password is incorrect"], 401);

        $admin->password = bcrypt($request->input('new_password'));

        $admin->save();

        return $admin;
    }
    public function getApprenantInfo()
    {
        $apprenant = ApprenantResource::collection(Apprenant::all());
        return $apprenant;
    }
    public function validateApprenant(Request $request)
    {
        $this->validate($request, [
            "personne_id"  => "required"
        ]);

        $personne = Personne::find($request->personne_id);

        $personne->validation = true;

        $personne->save();

        $apprenant = ApprenantResource::collection(Apprenant::where('personne_id', '=', $personne->id)->get());
        return $apprenant;
    }

    public function statistic()
    {
        $total_Apprenant = Apprenant::count();
        $total_Responsable = Responsable::count();
        $total_posts = Post::count();
        $total_Like = Like::count();
        $total_comments = Commente::count();
        $total_compus = Campus::count();



        $response = [
            'total_Apprenant' => $total_Apprenant,
            'total_Responsable' => $total_Responsable,
            'total_posts' => $total_posts,
            'total_Like' => $total_Like,
            'total_comments' => $total_comments,
            'total_compus' => $total_compus,

        ];

        return $response;
    }
    public function getAllPosts()
    {
        return PostResource::collection(Post::paginate(10));
    }

    public function block_apprenant($id)
    {
        $personne = Personne::find($id);
        $personne->validation = 0;
        $personne->save();
        return response($personne);
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
