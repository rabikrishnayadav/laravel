<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    // method for upload file
    function fileUpload(Request $req){

        $result = $req->file('file')->store('apiDocs');
        return ['result' => $result];
    }
}
