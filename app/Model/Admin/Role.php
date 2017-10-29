<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Admin\Permission;

class Role extends Model
{
    public function permissions() {


    	return $this->belongsToMany('App\Model\Admin\Permission');

    }
}
