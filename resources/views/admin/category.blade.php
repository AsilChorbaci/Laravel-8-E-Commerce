@extends('layouts.admin')
@section('title', 'Category')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Categories</h1>
                    <div class="col-md-12 my-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <a href="{{ route('admin-add-category') }}"><button type="button" class="btn mb-2 btn-outline-success">Add Category</button></a>
                                <p class="card-text"></p>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Parent</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $list as $rs)
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->parent_id }}</td>
                                            <td>{{ $rs->title }}</td>
                                            <td><span class="badge badge-pill badge-warning">{{ $rs->status }}</span></td>
                                            <td><a href="{{ route('admin-edit-category', ['id' => $rs->id]) }}">Edit</a></td>
                                            <td><a href="{{ route('admin-delete-category', ['id' => $rs->id]) }}" onclick="return confirm('Category will be deleted')">Delete</a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        @include('admin._notifications')
    </main> <!-- main -->
@endsection
