<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadData(Request $request)
    {   
        $request->validate([
            "file"=>"required",
        ]);

        

        $data = $request->file('file')->store('uploads');
        $path = storage_path('app/uploads/'. $data);
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        $request->session()->flash('file', $data);
        return redirect('upload');
    }
}
