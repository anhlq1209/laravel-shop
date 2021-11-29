@extends('admin.main')

@section('head')
    <script src="../../template/js/my-script.js"></script>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <form action="/admin/product/store" method="post">
            @csrf
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
                                <textarea id="description" name="description" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                <select id="inputStatus" name="category_id" class="form-control custom-select">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" id="price" name="price" class="form-control">
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
                    <input type="submit" value="Add" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection