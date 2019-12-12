@extends('layouts.app')

@section('content')

<div class="container">
  @include('partials.error')
  <form method="POST" action="{{ route('projectcreate') }}" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Titel</label>
      <input type="text" class="form-control" placeholder="titel..." id="titel" name="titel">
    </div>

    <div class="form-group">
      <label for="gebruikteTaal">gebruikteTaal</label>
      <input type="text" class="form-control" placeholder="gebruikteTaal" id="gebruikteTaal" name="gebruikteTaal">
    </div>

    <div class="form-group">
      <label for="content">Beschrijving</label>
      <textarea type="text" class="form-control" placeholder="Beschrijving" id="beschrijving" name="beschrijving"></textarea>
    </div>

    @foreach($tags as $tag)
      <div class="checkbox">
        <label> <input type="checkbox" name="tags[]" value="{{$tag->id}}"{{($tag->id) }}>{{$tag->name}}</label>
      </div>
    @endforeach

      <div class="form-group">
        <label for="project_image"></label>
        <input type="file" id="project_image" name="project_image">
      </div>

    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
