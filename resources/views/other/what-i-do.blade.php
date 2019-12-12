@extends('layouts.app')

@section('content')


  <h1 class="myp">My projects_</h1>
  @foreach($projects as $project)
  <div class="projects">
    <div class="project">
      <div class="imgproject">
        <img src="{{URL::asset('/storage/project_images/'.$project->project_image)}}" alt="project" class="pro">
      </div>
      <div class="containerproject">
        <h3 class="titelproject">{{$project['titel']}}</h3>
        <p class="textproject">{{$project['beschrijving']}}</p>
        <h5 class="stackproject">USED STACK:</h5>
        <span class="tagproject">{{$project['gebruikteTaal']}}</span>
        <div class="countercontainer">
          <div class="likesdiv">
            <img src="{{URL::asset('/img/like.png')}}" alt="like" class="likeimg">
            <p class="countp">{{count($project->likes) }}</p>
          </div>

          <div class="commentsdiv">
            <img src="{{URL::asset('/img/comments.png')}}" alt="comment" class="commentimg">
            <p class="countp">{{ $project->comments()->count() }}</p>
          </div>
        </div>
      </div>

        <a class="infoproject" href="{{ route('project', ['id' => $project['id']]) }}">
          More info
        </a>
      </div>


  </div>


  @endforeach
<div class="bottomlinks">
  {{$projects->links()}}
</div>

@include('partials.footer')
@endsection
