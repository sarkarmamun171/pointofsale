@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-8"></div>
            <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add New Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="mb-3">
                                    <label for="category_name" class="form label">Category Name</label>
                                    <input type="text" name="category_name"  class="form-control" >


                                </div>
                                <div class="mb-3">
                                    <label for="category_img" class="form label">Category Image</label>
                                    <input type="file" name="category_img" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
            </div>
    </div>
@endsection
