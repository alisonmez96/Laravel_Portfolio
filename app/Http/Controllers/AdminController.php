<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Tag;
use Gate;

class AdminController extends Controller

{
    public function getEdit($id){
      $project = Project::find($id);
      $tags = Tag::all();

      if(!Gate::allows('isAdmin')){
        abort(404);
      }

      return view('admin.edit', ['project' => $project, 'projectId' => $id, 'tags' => $tags]);
    }

    public function getCreate(){

      if(!Gate::allows('isAdmin')){
        abort(404);
      }

        $tags = Tag::all();
        return view('admin.create' , ['tags' => $tags]);

    }

    public function getIndex(){

      $projects = Project::orderBy('created_at', 'asc')->get();

      if(!Gate::allows('isAdmin')){
        abort(404);
      }

      return view('admin.index', ['projects' => $projects]);
    }

    public function getDelete($id){

      $project = Project::find($id);
      $project->likes()->delete();
      $project->tags()->detach();
      $project->delete();

      return redirect()->action('AdminController@getIndex');
    }
}
