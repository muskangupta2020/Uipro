<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function children()
    {
        return $this->hasMany('App\SubCategory', 'user_sponser_id' ,'sponser_id');
    }
    public function parent() {
        return $this->belongsTo('App\User', 'user_sponser_id');
    }
}
