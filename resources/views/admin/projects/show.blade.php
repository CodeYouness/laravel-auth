@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>{{$project->id}}</h1>
            <h1>{{$project->author}}</h1>
            <h1>{{$project->title}}</h1>
            <h1>{{$project->date}}</h1>
            <p>{{$project->content}}</p>
        </div>
    </div>
</div>
@endsection
