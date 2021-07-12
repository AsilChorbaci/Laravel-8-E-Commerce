@extends('layouts.admin')
@section('title', 'Image Gallery')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Add Image</h1>
                    <div class="card-deck">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">{{ $data->title }}</strong>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin-store-image', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Title</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="title" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Image</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="image" class="form-control" id="inputEmail3" placeholder="Add Category Keywords">
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- / .card-desk-->

                    <h1 class="page-title">Images</h1>
                    <div class="col-md-12 my-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <p class="card-text"></p>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $images as $rs)
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->title }}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                                                @endif
                                            </td>
                                            <td><a href="{{ route('admin-delete-image', ['id' => $rs->id, 'product_id' => $data->id]) }}" onclick="return confirm('Category will be deleted')">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        @include('admin._notifications')
    </main> <!-- main -->
@endsection
