<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function project(){
      // One to many
      return $this->belongsTo('App\Project');
    }

    public function user(){
      // One to many
      return $this->belongsTo('App\User');
    }
}
