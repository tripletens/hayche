<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'firstname','surname','email', 'password','companyname','cv',
        'picture', 'about', 'address', 'education', 'skills', 'gender',
        'dob', 'personal_phone', 'whatsapp_phone', 'skype', 'country',
        'more_info', 'status','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function applications(){
        return $this->hasMany('App\Applications','user_id','id');
    }
    public function reviews()
    {
        return $this->hasMany('App\Reviews','user_id','id');
    }
}
