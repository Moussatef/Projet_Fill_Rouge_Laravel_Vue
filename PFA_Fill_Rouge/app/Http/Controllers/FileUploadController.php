<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;

class FileUploadController extends Controller
{
    function upload($file, $path)
    {

        // dd($file->file('inp_img'));
        $imgName =  $file->getClientOriginalName();
        $newname = time() . '_' . $imgName;
        //  ;
        $upload = $file->storeAs($path, $newname);
        if ($upload) {
            return $newname;
        } else
            return response('is not save in backends ', 440);
    }
}
