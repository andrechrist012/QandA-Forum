<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\TrThread;
use App\Models\TrReply;
use Illuminate\Http\Request;

class QnAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $role = User::where('id', Auth::id())->value('role');
        $thread = TrThread::all();
        return view('index', compact('role', 'thread'));
    }

    public function masteruser(){
        $id = 1;
        $users = User::all();

        return view('masteruser', ['id' => $id, 'users' => $users]);
    }

    public function createThread(){
        $role = User::where('id', Auth::id())->value('role');
        return view('form', compact('role'));
    }

    public function create(Request $request){
        $role = User::where('id', Auth::id())->value('role');
        $date = date('Y-m-d');
        TrThread::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'userId' => Auth::id(),
            'dateIn' => $date
        ]);
        return redirect('/');
    }

    public function viewThread($id){
        $role = User::where('id', Auth::id())->value('role');
        $reply = TrReply::where('threadId', $id)->orderBy('dateIn', 'desc')->get();
        $thread = TrThread::find($id);
        return view('view_thread', compact('thread', 'reply', 'role'));
    }

    public function replyThread(Request $request, $id){
        $thread = TrThread::find($id);
        $date = date('Y-m-d');
        TrReply::create([
            'message' => $request->message,
            'userId' => Auth::id(),
            'threadId' => $thread->id,
            'dateIn' => $date
        ]);
        return redirect()->back();
    }

    public function deleteReply($id){
        $reply = TrReply::find($id);
        $reply->delete();
        return redirect()->back();
    }
}
