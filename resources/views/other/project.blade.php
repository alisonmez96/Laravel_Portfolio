@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="jumbotron">
      <h1><b>Titel:</b>  {{ $project['titel'] }} </h1>

		<img src="{{URL::asset('/storage/project_images/'.$project->project_image)}}" alt="project" width="300" height="300">
      <hr>
      <p><b> gebruikteTaal:</b> {{ $project['gebruikteTaal'] }} </p>
      </br>
      <p><b> Beschrijving:</b> {{ $project['beschrijving'] }} </p>
      <hr>
		</br>

		@foreach($project->tags as $tag)
			<p ><b>Tags:</b>{{$tag->name}}</p>
			@endforeach


		<hr>

 <div class="row">
	<div class="col-md-8 offset-2">

	</div>
@if(Gate::check('isUser'))
	<div class="col-md-8 offset-2">

		<p>{{count($project->likes) }} likes
		@if( count($project->likes) != 0)
		@endif
		</p>

		@if (!$project->likes->find(Auth::id()))
			<form method="POST" action="{{ route('likestore', $project->id) }}">
				<button type="submit"  class="btn btn-primary">Like</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
        @csrf
			</form>
		@else
			<button type="submit" class="btn btn-default" disabled>Like</button>
		@endif

	</div>
@endif

	</div>
</div>

	  <div class="container">
<div class="row">
	<div class="col-md-8 offset-2">
		<br>
		<hr>
		<h3><strong>{{ $project->comments()->count() }} comments </strong></h3>
			@foreach($project->comments as $comment)
				<div class="comment">
					<div class="author">
						<p><strong>{{ $comment->name }}</strong></p>
						<p class="time">{{ date('d M Y, H:i', strtotime($comment -> created_at)) }}</p>
					</div>
					<div class="comment-info">
						{{ $comment->comment }}
					</div>
					<br>
				</div>
			@endforeach
		<hr>
		<br>
	</div>
</div>

@if(Gate::check('isUser'))
<div class="row">
	<div class="col-md-8 offset-2" id="comment-form">

		<h1>What do you think?</h1>
		<form method="POST" action="{{ route('comments.store', $project->id) }}">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label name="email">Name:</label>
						<input id="name" name="name" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label name="email">Email:</label>
						<input id="email" name="email" class="form-control">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label name="comment">Comment:</label>
						<textarea id="comment" name="comment" rows="4" class="form-control"></textarea>
					</div>
					<input type="submit" value="Add comment" class="btn btn-success btn-block">
				</div>
			</div>
      @csrf
		</form>
	</div>
</div>
@endif

@endsection
	  </div>
  </div>
