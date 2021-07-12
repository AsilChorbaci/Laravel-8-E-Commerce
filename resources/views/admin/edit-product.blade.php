@extends('layouts.admin')
@section('title', 'Edit Product')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Edit Product</h1>
                    <div class="card-deck">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Product Information Form</strong>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin-update-product', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Category</label>
                                        <div class="col-sm-6">
                                            <select id="inputState" name="category_id" class="form-control">
                                                @foreach($list as $rs)
                                                    <option value="{{ $rs->id }}">{{ $rs->title  }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Title</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="title" value="{{ $data->title }}" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Keywords</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="keywords"  value="{{ $data->keywords }}" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Description</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="description" value="{{ $data->description }}" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Image</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="image" value="{{$data->image}}" class="form-control" id="inputEmail3" placeholder="Add Category Keywords">
                                            @if($data->image)
                                                <img src="{{ Storage::url($data->image) }}" height="100" alt="">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Price</label>
                                        <div class="col-sm-6">
                                            <input type="number" value="{{ $data->price }}" name="price" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Quantity</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="quantity" value="{{ $data->quantity }}" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Min Quantity</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="minquantity" value="{{ $data->minquantity }}" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Tax</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="tax" value="{{ $data->tax }}" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Status</label>
                                        <div class="col-sm-6">
                                            <select id="inputState" name="status" class="form-control">
                                                <option value="True" selected>{{ $data->status }}</option>
                                                <option value="{{ $data->status === "True" ? "False" : "True" }}">{{ $data->status === "True" ? "False" : "True" }}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Detail</label>
                                        <div class="col-sm-6">
                                            <textarea id="editor1" name="detail">{{ $data->detail }}</textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#editor1' ) )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                    </div>

{{--                                    <div class="form-group row">--}}
{{--                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Detail</label>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <input type="detail" name="detail" value="{{ $data->tax }}" class="form-control" id="inputEmail3">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="form-group mb-2">
                                        <button type="submit" class="btn btn-primary">Save</button>
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
