<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
	protected $guarded = ['id'];
    public function curriculum() {
        return $this->belongsTo('App\course', 'courseID');
    }
}
