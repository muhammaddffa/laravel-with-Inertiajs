<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function viewFormUploud()
    {
        return inertia('FileUpload');
    }
    
    function store(Request $request)
    { 
        $request -> file('avatar')->store('anime', 'public');
    }
}
