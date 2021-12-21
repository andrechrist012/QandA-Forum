<?php

namespace App\Http\Controllers;

use App\Models\TrThread;
use Illuminate\Http\Request;

class QnAController extends Controller
{
    //
    public function index(){
        $id = 1;
        return view('index', ['id' => $id]);
    }

    public function Thread(){
        $Thread = DB::table('tr_threads')->get();
        return view('index')->with('threads', $Thread);
    }
}
