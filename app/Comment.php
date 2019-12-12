<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   	public function project() {
      // One to many
    	return $this->belongsTo('App\Project');
    }
}
