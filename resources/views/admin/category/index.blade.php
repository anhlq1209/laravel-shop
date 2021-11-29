@extends('admin.main')

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Categories</h3>

                <div class="card-tools">
                    <a class="btn btn-success btn-sm" href="/category/create">
                        <i class="fas fa-plus"></i>
                        New category
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
                            <th style="width: 20%">
                                Project Name
                            </th>
                            
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    {{ $category['id'] }}
                                </td>
                                <td>
                                    <a>{{ $category['name'] }}</a>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="/admin/category/edit/{{ $category['id'] }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="/admin/category/destroy/{{ $category['id'] }}">
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