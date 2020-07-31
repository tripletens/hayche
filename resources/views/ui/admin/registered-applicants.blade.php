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
                                <li class="breadcrumb-item active"> Account Info</li>
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
                       <div class="card card-purple card-outline col-md-12" style="margin:0 auto;">

                           <div class="card-header">
                               <h3 class="card-title">All Applicants </h3>
                           </div>

                           <!-- /.card-header -->
                           <div class="card-body">
                               <table id="example1" class="table table-responsive table-bordered table-striped">
                                   <thead>
                                       <tr>
                                           <th>No</th>
                                           <th>Full name </th>
                                           <th>Email</th>
                                           <th>Skills</th>
                                           <th></th>
                                           <th>Company</th>
                                           <th>Postion Title</th>
                                           <th>Nationality</th>
                                           <th> Status </th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                        @if(count($applicants) > 0 )
                                            @foreach ($applicants as $key=> $item)
                                                <tr>
                                                    <td>{{ $key + 1  }}</td>
                                                    <td>{{ $item->surname . ' ' . $item->firstname}}
                                                    </td>
                                                    <td>{{ $item->email}}</td>
                                                    <td>{{ $item->skills}}</td>
                                                    <td><a download href="{{ asset('storage/cv/'. $item->cv) }}">
                                                        Download Cv</a></td>
                                                    <td>{{ $item->employer_name}}</td>
                                                    <td>{{ $item->post_title}}</td>
                                                    <td>
                                                        {{ $item->nationality}}
                                                    </td>
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
                                           <th>Full name </th>
                                           <th>Email</th>
                                           <th>Skills</th>
                                           <th></th>
                                           <th>Company</th>
                                           <th>Postion Title</th>
                                           <th>Nationality</th>
                                           <th> Status </th>
                                       </tr>
                                   </tfoot>
                               </table>

                           </div>
                       </div>
                       <br>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
