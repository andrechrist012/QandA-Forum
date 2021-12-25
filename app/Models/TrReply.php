<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrReply extends Model
{
    use HasFactory;
    protected $table = "tr_replies";
    protected $fillable = ["id", "userId", "threadId", "message", "dateIn"];

    public function user(){
        return $this->belongsTo(MsUser::class);
    }

    public function thread(){
        return $this->belongsTo(TrThread::class);
    }
}
