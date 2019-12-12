<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Project;
use Session;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $project_id)
    {
        //Data valideren
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|min:5|max:2000'
        ));

        $project = Project::find($project_id);

        $comment = new Comment();
        $comment -> name = $request -> name;
        $comment -> email = $request -> email;
        $comment -> comment = $request -> comment;
        $comment -> approved = true;
        $comment -> project()->associate($project);

        $comment -> save();

        //Session::flash('success', 'Comment added');

        return redirect()->back();

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $project_id = $comment -> project -> id;
        $comment -> delete();

        //Session::flash('success', 'Comment deleted');

        return redirect() -> route('index', $project_id);
    }
}
