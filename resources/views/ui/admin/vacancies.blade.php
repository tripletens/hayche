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
                                <li class="breadcrumb-item active"> Vacancies</li>
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
                                    <h3 class="card-title">All Job Vacancies  </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-responsive table-bordered table-striped">
                                        <thead>

                                            <tr>
                                                <th>No</th>
                                                <th>Position Title</th>
                                                <th>Position Description</th>
                                                <th>Company Name</th>
                                                <th>About Company</th>
                                                <th>Address</th>
                                                <th>State</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($vacancies))
                                                @foreach ($vacancies as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->post_title}}
                                                        </td>
                                                        <td>{{ $item->post_description }}</td>
                                                        <td>{{ $item->employer_name }}</td>

                                                        <td>{{ $item->employer_about }}</td>
                                                        <td>{{ $item->employer_address }}</td>

                                                        <td>{{ $item->employer_state }}</td>
                                                        <td>{{ $item->employer_country }}</td>
                                                    </tr>
                                                    {{-- `employer_id`, `employer_name`, `employer_about`,
                                             `empoyer_logo`, `employer_address`,
                                            `employer_state`, `employer_country`, `post_title`,
                                             `post_description`, `status`, --}}
                                                @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Position Title</th>
                                                <th>Position Description</th>
                                                <th>Company Name</th>
                                                <th>About Company</th>
                                                <th>Address</th>
                                                <th>State</th>
                                                <th>Country</th>
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
