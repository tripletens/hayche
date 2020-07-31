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
                                <li class="breadcrumb-item active"> Account Information</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12" style="margin:0 auto;">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">All Payments </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Qualification </th>
                                                <th>Amount</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($payments) > 0 )
                                                @foreach ($payments as $key=>$item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->position }}
                                                        </td>
                                                        <td>{{ $item->department }}</td>
                                                        <td>{{ $item->qualification }}</td>
                                                        <td>{{ $item->amount }}</td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Qualification </th>
                                                <th>Amount</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
