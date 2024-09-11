@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Category List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Sl</th>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($categories as $sl => $category)
                            <tr>
                                <td>{{ $sl + 1 }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td><img src="{{ asset('uploads/category') }}/{{ $category->category_image }}" width="50">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('category.edit') }}" class="btn btn-info shadow btn-xs sharp del_btn"><i class="fa-solid fa-pencil"></i></a>
                                        &nbsp; &nbsp;
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp del_btn"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="category_name" class="form label">Category Name</label>
                            <input type="text" name="category_name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="category_image" class="form label">Category Image</label>
                            <input type="file" name="category_image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                    @if (session('cate_add'))
                        <div class="alert alert-success">{{ session('cate_add') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
