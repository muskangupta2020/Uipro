<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Auth;

class User extends Authenticatable
{
    use Notifiable;
    public function children()
    {
        return $this->hasMany('App\User', 'user_sponser_id' ,'sponser_id');
    }
    public function parent() {
        return $this->belongsTo('App\User', 'user_sponser_id');
    }
    public function childrens()
    {
        return $this->hasMany('App\User', 'user_sponser_id' ,Auth::user()->sponser_id);
    }
    public function parents() {
        return $this->belongsTo('App\User', Auth::user()->sponser_id);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'user_id','name', 'email', 'password', 'placement_id', 'sign_up_plan', 'states', 'street_address', 'sponser_id', 'phone_no', 'position', 'e_pin', 'city', 'zipcode','login_status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
