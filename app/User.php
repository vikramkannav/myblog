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
        'name','email','password','phone','city','state','country','zip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function posts(){
        return $this->hasMany(Post::class,'created_by');
    }

    public function getValidationRules()
    {
        return [
             'name' => 'required | min:2 | max:60',
             'city' => 'required | min:2 | max:60',
             'state' => 'required | min:2 | max:60',
             'country' => 'required | min:2 | max:60',
             'phone' => 'required | digits_between:9,11' ,
             'zip' => 'required | min:2 | max:60',
            ];
    }
}
