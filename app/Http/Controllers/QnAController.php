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

    public function Thread(){
        $Thread = DB::table('tr_threads')->get();
        return view('index')->with('threads', $Thread);
    }

    public function masteruser(){
        $id = 1;
        $users = User::all();

        return view('masteruser', ['id' => $id, 'users' => $users]);
    }

    public function viewThread($id){
        $role = User::where('id', Auth::id())->value('role');
        $reply = TrReply::where('threadId', $id)->get();
        $thread = TrThread::find($id);
        return view('view_thread', compact('thread', 'reply', 'role'));
    }

    public function replyThread(Request $request, $id){
        $thread = TrThread::find($id);
        TrReply::create([
            'message' => $request->message,
            'userId' => Auth::id(),
            'threadId' => $thread->id
        ]);
        return redirect()->back();
    }

    public function deleteReply($id){
        $reply = TrReply::find($id);
        $reply->delete();
        return redirect()->back();
    }
}
