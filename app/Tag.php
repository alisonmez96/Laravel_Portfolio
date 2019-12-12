<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model{

    protected $fillable = ['name'];

    public function projects(){
      // Many to many
      return $this->belongsToMany('App\Project', 'project_tag', 'tag_id', 'project_id')->withTimestamps();
    }
}
