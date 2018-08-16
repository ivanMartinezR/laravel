<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function messages(){
<<<<<<< HEAD
        return $this->hasMany(Message::class)->orderBy('created_at','desc');
=======
        return $this->hasMany()(Message::class);
>>>>>>> 09dc42edc533234ff5427dcf35d566e0a5488e78
    }
}
