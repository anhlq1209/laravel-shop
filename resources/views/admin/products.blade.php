@extends('admin.main')

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <a class="btn btn-success btn-sm" href="#">
                        <i class="fas fa-plus"></i>
                        New product
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 2%">
                                #
                            </th>
                            <th style="width: 48%">
                                Product name
                            </th>
                            <th style="width: 10%">
                                Category
                            </th>
                            <th style="width: 10%">
                                Price
                            </th>
                            <th style="width: 10%" class="text-center">
                                Likes
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    {{ $product['id'] }}
                                </td>
                                <td>
                                    <a>{{ $product['name'] }}</a>
                                </td>
                                <td>
                                    {{ $product['category_id'] }}
                                </td>
                                <td class="project_progress">
                                    {{ $product['price'] }}
                                </td>
                                <td class="project-state">
                                    {{ $product['count_likes'] }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection