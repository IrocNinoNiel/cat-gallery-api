<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CatController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function show(){
        $cat = Cat::all();

        return response()->json([
            'success' => true,
            'message' => 'Cat Lists',
            'data' => $cat
        ]);
    }
}
