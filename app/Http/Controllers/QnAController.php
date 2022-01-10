<?php

namespace App\Http\Controllers;

use App\Models\MsUser;
use App\Models\TrThread;
use App\Models\TrReply;
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

    public function masteruser(){
        $id = 1;
        $users = MsUser::all();

        return view('masteruser', ['id' => $id, 'users' => $users]);
    }

    // public function update(MsUser $users){
    //     $users->update([
    //         'name'=>request('name'),
    //         'email'=>request('email'),
    //     ]);
    // }
    public function viewThread(){
        $id = 2;
        $reply = TrReply::all();
        return view('view_thread', compact('reply', 'id'));
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
