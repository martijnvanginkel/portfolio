<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public function diets()
    {
        return $this->belongsToMany('App\Diet');
    }

    public function allergies()
    {
        return $this->belongsToMany('App\Allergy');
    }

    public function recipes()
    {
        return $this->belongsToMany('App\Recipe');
    }

    public function histories()
    {
        return $this->belongsToMany('App\Recipe', 'history_user', 'user_id', 'history_id');
    }
    
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


}
