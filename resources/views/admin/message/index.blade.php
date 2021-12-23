@extends('admin.main')

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Messages</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 2%">
                                #
                            </th>
                            <th style="width: 10%">
                                Customer Name
                            </th>
                            <th style="width: 10%">
                                Customer Email
                            </th>
                            <th style="width: 48%">
                                Content
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td>
                                    {{ $message['id'] }}
                                </td>
                                <td>
                                    <a>{{ $message['customer_name'] }}</a>
                                </td>
                                <td>
                                    {{ $message['customer_email'] }}
                                </td>
                                <td class="project_progress">
                                    {{ $message['Content'] }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Reply
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