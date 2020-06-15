<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
	protected $guarded = ['id'];
    public function category() {
        return $this->belongsTo('App\category_course', 'categoryID');
    }
    public function contents() {
        return $this->hasMany('App\content', 'courseID');
    } 
}
