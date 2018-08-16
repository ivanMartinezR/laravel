<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded=[];//para evitar assignment exception

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
