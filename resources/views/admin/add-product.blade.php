@extends('layouts.admin')
@section('title', 'Add Product')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Add Product</h1>
                    <div class="card-deck">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Product Information Form</strong>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin-store-product') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Category</label>
                                        <div class="col-sm-6">
                                            <select id="inputState" name="category_id" class="form-control">
                                                @foreach($list as $rs)
                                                    <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Title</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="title" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Keywords</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="keywords" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Description</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="description" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Image</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="image" class="form-control" id="inputEmail3" placeholder="Add Category Keywords">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Price</label>
                                        <div class="col-sm-6">
                                            <input type="number" value="0" name="price" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Quantity</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="quantity" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Min Quantity</label>
                                        <div class="col-sm-6">
                                            <input type="number" value="5" name="minquantity" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Tax</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="tax" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Status</label>
                                        <div class="col-sm-6">
                                            <select id="inputState" name="status" class="form-control">
                                                <option value="True" selected>True</option>
                                                <option value="False">False</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Detail</label>
                                        <div class="col-sm-6">
                                            <textarea id="editor1" name="detail"></textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#editor1' ) )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- / .card-desk-->
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        @include('admin._notifications')
    </main> <!-- main -->
@endsection
