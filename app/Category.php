<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];
    protected $table = 'category';


    public function posts()
    {
        return $this->hasMany('App\post');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
