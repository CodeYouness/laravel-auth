@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>{{$project->id}} : {{$project->author}}</h1>
            <h3>{{$project->title}}</h3>
            <h3>{{$project->date}}</h3>
            <p>{{$project->content}}</p>
        </div>
    </div>
</div>
@endsection
