@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @method("POST")
                @csrf

                <div class="mb-3">
                    <h2>
                        Create new post
                    </h2>
                </div>

                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control mb-3">
                    @error("title")
                        <div class="alert alert-danger mb-3">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Image url:</label>
                    <input type="text" name="image" id="image" class="form-control mb-3">
                    @error("image")
                        <div class="alert alert-danger mb-3">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content">Content:</label>
                    <textarea type="text" name="content" id="content" class="form-control" rows="10" class="form-control mb-3"></textarea>
                    @error("content")
                        <div class="alert alert-danger mb-3">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <input type="submit" value="Create new post" class="btn btn-primary btn-lg">
                <input type="reset" value="Reset Fields" class="btn btn-warning btn-lg">
            </form>
        </div>
    </div>
</div>
@endsection
