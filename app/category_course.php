<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_course extends Model
{
	public function courses() {
        return $this->hasMany('App\Course', 'categoryID');
    }
}
