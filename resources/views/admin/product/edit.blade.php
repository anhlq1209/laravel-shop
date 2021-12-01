@extends('admin.main')

@section('footer')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    <script src="/template/js/my-script.js"></script>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <form action="/admin/product/update/{{ $product['id'] }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Edit</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Product name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $product['name'] }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Product description</label>
                                <textarea id="description" name="description" class="form-control" rows="10">{!! $product['description'] !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                <select id="inputStatus" name="category_id" class="form-control custom-select">
                                    <option disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}" {{ $product['category_id'] == $category['id'] ? 'selected' : ''; }}>{{ $category['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" id="price" name="price" class="form-control" value="{{ $product['price'] }}">
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
                    <input type="submit" value="Save" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection