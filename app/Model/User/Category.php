<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = []; 

    public function posts() {

    	return $this->belongsToMany('App\Model\User\Post', 'Category_posts')->orderBy('created_at', 'DESC')->paginate('3');

    }

    public function getRouteKeyName() {

    	return 'slug';
    }
}
