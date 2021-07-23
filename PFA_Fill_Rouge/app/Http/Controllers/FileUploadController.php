<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;

class FileUploadController extends Controller
{
    function upload($file)
    {
        $path = 'uploads/';
        // dd($request->file('_file'));
        $newname = Helper::renameFile($path, $file->getClientOriginalName());
        $upload = $file->move(public_path($path), $newname);
        if ($upload) {
            return $newname;
        }
    }
}
