<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commente;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            "post_id" => 'required',
            'comment' => 'required',
            'personne_id' => 'required'
        ]);

        $comment = new Commente;
        $comment->post_id = $request->post_id;
        $comment->personne_id = $request->personne_id;
        $comment->comment = $request->comment;

        if ($comment->save()) {
            return json_encode(['message' => "comment save"]);
        } else
            return json_encode(['message' => "comment not save"]);
    }
}
