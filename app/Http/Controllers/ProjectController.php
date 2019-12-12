<?php

namespace App\Http\Controllers;

use App\Project;
use App\Like;
use App\Tag;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

// projects die op what i do pagina komen
    public function getIndex(){
      $projects = Project::orderBy('created_at', 'asc')->paginate(2);
      return view('other.what-i-do', ['projects' => $projects]);
    }

// projects die op de index pagina komen
    public function getProjectIndex(){
      $projects = Project::orderBy('created_at', 'asc')->paginate(1);
      return view('content.index', ['projects' => $projects]);
    }

// detaille pagina van een project adhv id
    public function getProject($id){
      $project = Project::where('id', $id)->with('likes')->first();
      //$project = DB::table('projects')->where('id', $id)->first();
      return view('other.project', ['project' => $project]);
    }

// alle likes ophalen van de database
    public function getLikeProject($id){
      $project = Project::where('id', $id)->first();
      $project->likes += 1;
      $project->save();
    }

// project creeren (admin.create pagina)
    public function postCreateProject(Request $request){
      $this->validate($request, [
        'titel' => 'required|max:50',
        'gebruikteTaal' => 'required|max:199',
        'beschrijving' => 'required|min:10',
        'tags' => 'required',
        'project_image' => 'image|nullable|max:1999'
      ]);

      // file upload functie
      $image = $request->file('project_image');
      $filenameWithExt = $image->getClientOriginalName();
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      $fileNameToStore  = $filename.'_'.time().'.'.$image->getClientOriginalExtension();
      $detinationPath = public_path('storage/project_images', $fileNameToStore);
      $image->move($detinationPath, $fileNameToStore);

      $project = new Project([
        'titel' => $request->input('titel'),
        'gebruikteTaal' => $request->input('gebruikteTaal'),
        'beschrijving' => $request->input('beschrijving'),
      ]);

        $project->project_image = $fileNameToStore;

        $project->save();
        $project->tags()->attach($request->input('tags'));

        return redirect()->route('admin.index')->with('createSucces');
    }

// project updaten (admin.update pagina)
    public function postUpdateProject(Request $request){

      $this->validate($request, [
        'titel' => 'required|max:50',
        'gebruikteTaal' => 'required|max:199',
        'beschrijving' => 'required|min:10'
      ]);

        // file edit functie
        if ($request->hasfile('project_image')) {
          $image = $request->file('project_image');
          $filenameWithExt = $image->getClientOriginalName();
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          $fileNameToStore  = $filename.'_'.time().'.'.$image->getClientOriginalExtension();
          $detinationPath = public_path('storage/project_images', $fileNameToStore);
          $image->move($detinationPath, $fileNameToStore);
        }


      //Haal aan te passen project op uit DB
      $project = Project::find($request->input('id'));

      // pas waarden aan
      $project->titel = $request->input('titel');
      $project->gebruikteTaal = $request->input('gebruikteTaal');
      $project->beschrijving = $request->input('beschrijving');
      if ($request->hasfile('project_image')) {
        $project->project_image = $fileNameToStore;
      }

      // save het item
      $project->save();

      //tags opslaan
      $project->tags()->sync($request->input('tags') === null ? '' : $request->input('tags'));

      //$project->tags()->detach();
      //$project->tags()->attach($request->input('tags'));

      return redirect()->route('admin.index');
    }
}
