<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrThread extends Model
{
    use HasFactory;
    protected $table = 'tr_threads';
    protected $fillable = ['userId', 'title', 'description', 'category', 'dateIn'];

    public function users()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function reply(){
        return $this->hasMany(TrReply::class);
    }
}
