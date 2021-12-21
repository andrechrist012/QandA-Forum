<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QnAController extends Controller
{
    //
    public function index(){
        $id = 1;
        return view('nav', ['id' => $id]);
    }
}
