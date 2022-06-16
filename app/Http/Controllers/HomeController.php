<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.homepage.index');
    }

    public function download(){
        // $content = storage_path('downloads/Curriculam_Vitae-SE_Ashikur.pdf');
        $content = Storage::files('app/public/downloads/Curriculam_Vitae-SE_Ashikur.pdf');
        dd($content);
        $fileName = "Curriculam_Vitae-SE_Ashikur.pdf";
        return response()->download($content,$fileName);
    }
}
