<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Project;
use Auth;
use Session;


class LikesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

// create like
    public function store(Request $request, $project_id)
    {
        $project = Project::find($project_id);

        $like = new Like();
        $user = Auth::id();
        $like->user_id = $user;
        $like->timestamps = false;
        $like->project()->associate($project);
        $like->save();

        return redirect()->back();
    }
}
