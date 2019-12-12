@extends('layouts.app')

@section('content')

<div class="container">
@include('partials.error')
  <form method="POST" action="{{route('projectupdate')}}" enctype="multipart/form-data">
    <div class="form-group">
      <label for="titel">Titel</label>
      <input class="form-control" type="text" name="titel" id="matitelle" value="{{$project->titel}}">
    </div>

    <div class="form-group">
      <label for="gebruikteTaal">gebruikteTaal</label>
      <input type="text" class="form-control" id="gebruikteTaal" value="{{$project->gebruikteTaal}}" name="gebruikteTaal">
    </div>

    <div class="form-group">
      <label for="beschrijving">Beschrijving</label>
      <input type="text" class="form-control" id="beschrijving" value="{{$project->beschrijving}}" name="beschrijving">
    </div>


    <div class="form-group">
      <label for="project_image"></label>
      <input type="file" id="project_image" name="project_image" value="{{$project->project_image}}"><p>{{$project->project_image}}</p>
    </div>

    @foreach($tags as $tag)
    <div class="checkbox">
      <label>
        <input type="checkbox" name="tags[]" value="{{ $tag->id }}" {{$project->tags->contains($tag->id) ? 'checked' : ''}}>
        {{$tag->name}}
      </label>
    </div>
    @endforeach

    @csrf

    <input type="hidden" name="id" value="{{ $project->id }}">
    <button type="submit" class="btn btn-success btn-block">Save</button>
  </form>
</div>

@endsection
