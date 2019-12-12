<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable = ['titel', 'gebruikteTaal', 'beschrijving', 'project_image'];

  public function likes(){
    // Many to many
    return $this->belongsToMany('App\User', 'likes', 'project_id', 'user_id');
  }

  public function tags(){
    // Many to many, withTimestaps => zodat altijd alles kan invullen
    return $this->belongsToMany('App\Tag', 'project_tag', 'project_id', 'tag_id')->withTimestamps();
  }

  public function comments() {
    // One to many
  return $this->hasMany('App\Comment');
}

  public function user() {
    // One to many
    return $this->belongsTo('App\User');
  }

  // Mutator
  public function setTitelAttribute($value){
      $this->attributes['titel'] = strtolower($value);
  }

  // Accessor
  public function getTitelAttribute($value){
      return ucfirst($value);
  }

}
