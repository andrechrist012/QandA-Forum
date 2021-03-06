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
        $thread = TrThread::orderBy('dateIn', 'desc')->get();
        return view('index', compact('role', 'thread'));
    }

    public function search(Request $request){
        $searchValue = $request->search;
        $role = User::where('id', Auth::id())->value('role');
        $thread = TrThread::where('title','like',"%".$searchValue."%")->orderBy('dateIn', 'desc')->get();
        return view('index', compact('role', 'thread'));
    }

    public function masteruser(){
        $role = User::where('id', Auth::id())->value('role');
        $users = User::where('role', 'M')->get();
        return view('masteruser', compact('role', 'users'));
    }

    public function removeUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/tableUser');
    }


    public function createThread(){
        $role = User::where('id', Auth::id())->value('role');
        return view('form', compact('role'));
    }

    public function create(Request $request){
        $role = User::where('id', Auth::id())->value('role');
        $date = date('Y-m-d');
        $request->validate([
    		'title' => 'required',
            'category' => 'required',
            'description' => 'required',
    	]);
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

    public function updateThread($id){
        $role = User::where('id', Auth::id())->value('role');
        $thread = TrThread::find($id);
        return view('form_update', compact('thread', 'role'));
    }

    public function update(Request $request, $id)
    {
        $thread = TrThread::find($id);
        $date = date('Y-m-d');
        $request->validate([
    		'title' => 'required',
            'category' => 'required',
            'description' => 'required',
    	]);
        $thread->update([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'dateIn' => $date
        ]);
        
        return redirect('/');
    }

    public function removeThread($id){
        $thread = TrThread::find($id);
        $thread->delete();
        return redirect()->home();
    }

    public function deleteReply($id){
        $reply = TrReply::find($id);
        $reply->delete();
        return redirect()->back();
    }
}
