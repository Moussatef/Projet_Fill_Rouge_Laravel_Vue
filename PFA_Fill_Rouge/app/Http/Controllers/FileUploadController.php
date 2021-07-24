<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;

class FileUploadController extends Controller
{
    function upload(Request $request)
    {
        $this->validate($request,[
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $path = 'uploads/';
        // dd($request->file('inp_img'));
        $image = $request->file('img');
        $imgName =  $image->getClientOriginalName();
        $newname = time().'_'.$imgName;
        $upload = $image->move(public_path($path), $newname);
        if ($upload) {
            return $newname;
        }else
        return response('is not save in backends ' , 440);
    }
}
