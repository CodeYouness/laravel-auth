@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$project->id}}</td>
                            <td>{{$project->author}}</td>
                            <td>{{$project->title}}</td>
                            <td>{{$project->date}}</td>
                            <td><a href="{{route('admin.projects.show', $project )}}" class="btn btn-primary btn-sm">Show</a>
                                <a href="{{route('admin.projects.edit', $project )}}" class="btn btn-success btn-sm">Edit</a>
                                {{-- <a href="{{route('admin.projects.delete', $project )}}" class="btn btn-warning btn-sm">Show</a> --}}
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
