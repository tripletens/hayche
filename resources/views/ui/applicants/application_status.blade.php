{{-- {{ var_dump($applications) }} --}}
<!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#" style="color:#c27ac0;">Home</a></li>
                                <li class="breadcrumb-item active">User Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Applications </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-responsive table-striped ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Company</th>
                                            <th>Post Applied</th>
                                            <th>Qualification </th>
                                            <th>Employer Message</th>
                                            <th>Application Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($applications) > 0 )
                                            @foreach ($applications as $key => $item)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item->employer_name }}
                                                    </td>
                                                    <td>{{ $item->post_title }}</td>
                                                    <td>{{ $item->qualification }}</td>
                                                    <td>{{ $item->employer_message }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>
                                                        @if ($item->status == '0' )
                                                            <p class="alert alert-danger">
                                                                Rejected
                                                            </p>
                                                        @elseif($item->status == '1')
                                                            <p class="alert alert-success">
                                                                Accepted
                                                            </p>
                                                        @else
                                                            <p class="alert alert-info">
                                                                In Progress
                                                            </p>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Company</th>
                                            <th>Post Applied</th>
                                            <th>Qualification </th>
                                            <th>Employer's Message</th>
                                            <th>Application Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
