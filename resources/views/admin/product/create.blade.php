@extends('admin.main')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="/template/css/my-style.css">
@endsection

@section('footer')
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
    <script src="/template/js/my-script.js"></script>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Product</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Product name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Product description</label>
                            <textarea id="description" name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select id="category_id" name="category_id" class="form-control custom-select">
                                <option selected disabled>Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="images form-group">
                            <div class="pic">
                                add
                            </div>
                            </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" id="price" name="price" class="form-control">
                        </div>
                    </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="/admin/products" class="btn btn-secondary">Cancel</a>
                <input id="add" type="submit" value="Add" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection