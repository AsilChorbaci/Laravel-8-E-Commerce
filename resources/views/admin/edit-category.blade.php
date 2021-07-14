@extends('layouts.admin')
@section('title', 'Edit Category')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Edit Category</h1>
                    <div class="card-deck">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Horizontal form</strong>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin-update-category', ['id' => $data->id]) }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Category</label>
                                        <div class="col-sm-6">
                                            <select id="inputState" name="parent_id" class="form-control">
                                                <option value="0">Main Category</option>
                                                @foreach($list as $rs)
                                                    <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Title</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="title" class="form-control" id="inputEmail3" value="{{ $data->title }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Keywords</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="keywords" class="form-control" id="inputEmail3" value="{{ $data->keywords }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Slug</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="slug" class="form-control" id="inputEmail3" value="{{ $data->slug }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Description</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="description" class="form-control" id="inputEmail3" value="{{ $data->description }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Status</label>
                                        <div class="col-sm-6">
                                            <select id="inputState" name="status" class="form-control">
                                                <option selected>{{ $data->status }}</option>
                                                <option>{{ ($data->status == 1) ? 0 : 1 }}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <button type="submit" class="btn btn-primary">Edit</button>
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
