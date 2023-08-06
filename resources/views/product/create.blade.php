@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add Student') }}</div>

                <div class="card-body">

                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <form method="POST" action='{{ route("products.store") }}' enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Student Name</label>
                            <input class="form-control" type="text" name="title" placeholder="Student Name">
                            @error('title')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Student Class</label>
                            <input class="form-control" type="text" name="class" placeholder="Student Class">
                            @error('class')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Student Roll</label>
                            <input class="form-control" type="number" name="roll" placeholder="Student Roll">
                            @error('roll')
                            <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <a class="btn btn-danger mr-1" href='{{ route("products.index") }}' type="submit">Cancel</a>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection