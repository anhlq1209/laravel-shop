@extends('admin.main')

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Order</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 2%">
                                #
                            </th>
                            <th style="width: 48%">
                                User Id
                            </th>
                            <th style="width: 10%">
                                Total
                            </th>
                            <th style="width: 10%">
                                Note
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bills as $bill)
                            <tr>
                                <td>
                                    {{ $bill['id'] }}
                                </td>
                                <td>
                                    <a>{{ $bill['user_id'] }}</a>
                                </td>
                                <td>
                                    {{ $bill['total'] }}
                                </td>
                                <td class="project_progress">
                                    {{ $bill['note'] }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-success btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Accept
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Cancel
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