<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(request $request)
    {
        // echo "upload your file";
        $path = $request->file('file')->store('public');
        $fileName = explode('/', $path);
        // $fileName = $fileNameArray[1];
        return view('display', ['path' => $fileName]);
        // return "File uploaded successfully. Path: " . $path;
    }
}