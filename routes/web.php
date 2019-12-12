<?php

// generic routes
Route::get('/', ['uses' => 'ProjectController@getProjectIndex', 'as' => 'index' ]);
Route::get('/who-am-i', function () {return view('other.who-am-i');})->name('who');
Route::get('/what-i-do', ['uses' => 'ProjectController@getIndex','as' => 'what-i-do']);
Route::post('/contact', [ 'uses' => 'FooterContactController@sendMessage', 'as' => 'contact.sendMessage']);

//project detaille pagina route
Route::get('/project/{id}', ['uses' => 'ProjectController@getProject','as' => 'project']);

//like project route
Route::post('like/{id}', ['uses' => 'LikesController@store', 'as' => 'likestore']);
//Route::put('project/{project_id}', [ 'uses' => 'ProjectController@getLikeProject', 'as' => 'projectlike']);

// project create route
Route::post('/projectcreate', ['uses' => 'ProjectController@postCreateProject','as' => 'projectcreate']);

// project update route
Route::post('/projectupdate', ['uses' => 'ProjectController@postUpdateProject','as' => 'projectupdate']);

// comment create route
Route::post('comments/{project_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

// comment delete route (admin delete)
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);

// admin routes
Route::group(['prefix' => 'admin'], function(){
  // url public/admin
  Route::get('', ['uses' => 'AdminController@getIndex','as' => 'admin.index']);
  // url public/edit
  Route::get('edit/{id}', ['uses' => 'AdminController@getEdit','as' => 'admin.edit']);
  // url public/create
  Route::get('create', ['uses' => 'AdminController@getCreate','as' => 'admin.create']);
  // url public/delete
  Route::get('delete/{id}', ['uses' => 'AdminController@getDelete','as' => 'admin.delete']);
});

// auh route & login route
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
