@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @method("POST")
                @csrf

                <div class="mb-3">
                    <label for="title"></label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="author"></label>
                    <input type="text" name="author" id="author" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title"></label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title"></label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title"></label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
