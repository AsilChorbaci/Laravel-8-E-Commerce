@extends('layouts.admin')
@section('title', 'Add Category')
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="page-title">Add Category</h1>
                    <div class="card-deck">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Horizontal form</strong>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin-store-category') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Parent</label>
                                        <div class="col-sm-6">
                                            <select id="inputState" name="parent_id" class="form-control">
                                                <option value="0" selected>Main Category</option>
                                                @foreach($list as $rs)
                                                    <option value="{{ $rs->id }}">{{ $rs->title  }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Title</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Add Category Title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Keywords</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="keywords" class="form-control" id="inputEmail3" placeholder="Add Category Keywords">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Slug</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="slug" class="form-control" id="inputEmail3" placeholder="Add Category Slug">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-1 col-form-label">Description</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="description" class="form-control" id="inputEmail3" placeholder="Add Category Description">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-1 col-form-label">Status</label>
                                        <div class="col-sm-6">
                                            <select id="inputState" name="status" class="form-control">
                                                <option selected>Choose Category Status</option>
                                                <option>1</option>
                                                <option>0</option>

                                            </select>
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
