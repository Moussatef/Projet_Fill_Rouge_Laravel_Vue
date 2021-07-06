<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function githubProfil($id)
    {
        $info = array(
            'name' => 'Moussatef Othman',
            'age' => $id,
            'media' => ['Facebook : moussetaf', 'GitHub : Moussatef ', 'Whatsapp : 0637274172'],

        );

        return view('pages.githubProfil')->with($info);
    }
    public function about()
    {
        return view('pages.about');
    }
}
