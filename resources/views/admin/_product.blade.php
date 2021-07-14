@extends('layouts.admin')
@section('title', 'Products')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Products</h1>
                    <div class="col-md-12 my-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <a href="{{ route('admin-create-product') }}"><button type="button" class="btn mb-2 btn-outline-success">Add Product</button></a>
                                <p class="card-text"></p>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Gallery</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $list as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>
                                        <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                                        <td>{{ $rs->title }}</td>
                                        <td>{{ $rs->quantity }}</td>
                                        <td>{{ $rs->price }}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                                            @endif
                                        </td>
                                        <td><a href="{{ route('admin-create-image', ['product_id' => $rs->id]) }}">Gallery</a></td>
                                        <td><span class="badge badge-pill badge-warning">{{ $rs->status }}</span></td>
                                        <td><a href="{{ route('admin-edit-product', ['id' => $rs->id]) }}">Edit</a></td>
                                        <td><a href="{{ route('admin-delete-product', ['id' => $rs->id]) }}" onclick="return confirm('Category will be deleted')">Delete</a></td>
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
