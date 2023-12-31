@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Students') }}</div>

                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif

                    <p><a class="btn btn-primary" href='{{ route("products.create") }}'><i class="fa fa-plus"></i> Add Student</a></p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    Student Name
                                </th>
                                <th>
                                    Student Class
                                </th>
                                <th>
                                    Student Roll
                                </th>
                                <th>
                                    Created
                                </th>
                                <th width="5%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                            <tr>
                                <td>
                                    {{ $product->title }}
                                </td>

                                <td>
                                    {{ $product->class }}
                                </td>

                                <td>
                                    {{ $product->roll }}
                                </td>

                                <td>
                                    {{ optional($product->created_at)->diffForHumans() }}
                                </td>

                                <td>
                                    <a class="btn btn-primary d-block mb-2" href='{{ route("products.edit", $product->id) }}'><i class="fa fa-pencil"></i> Edit</a>

                                    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <div class="form-group">
                                            <i class="fa fa-times"></i>
                                            <input type="submit" class="btn btn-danger d-block" value="Delete">
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" align="center">No records found!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection