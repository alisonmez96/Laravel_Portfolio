@extends('layouts.app')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>Foro</th>
            <th>Titel</th>
            <th>gebruikteTaal</th>
            <th>beschrijving</th>
            <th>Likes</th>
            <th>Comentaar</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)

            <tr>
                <td><img src="{{URL::asset('/storage/project_images/'.$project->project_image)}}" alt="project" width="50" height="50"></td>
                <td>{{$project->titel}}</td>
                <td>{{$project->gebruikteTaal}}</td>
                <td>{{$project->beschrijving}}</td>
                <td>{{count($project->likes)}}</td>
                <td>{{$project->comments()->count()}}</td>


                <td><a class="btn btn-info" href="{{ route('admin.edit', ['id' => $project->id]) }}" role="button">Edit</a></td>
                <td><a class="btn btn-danger" href="{{ route('admin.delete', ['id' => $project->id]) }}" role="button">Delete</a></td>

            </tr>

        @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary btn-lg" href="{{ route('admin.create') }}" role="button">Create</a>


@endsection