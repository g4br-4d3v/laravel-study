<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $filename = 'picture';
        
        $request->file($filename)->storeAs('images', 'screenshot.png');
    }
}
