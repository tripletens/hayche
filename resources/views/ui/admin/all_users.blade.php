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
                                <li class="breadcrumb-item active">All Users</li>
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
                               <h3 class="card-title">All Users </h3>
                           </div>

                           <!-- /.card-header -->
                           <div class="card-body">
                               <table id="example1" class="table table-bordered table-responsive table-striped">
                                   <thead>
                                       <tr>
                                           <th>No</th>
                                           <th>Full name </th>
                                           <th>Email</th>
                                           <th>About</th>
                                           <th>Skill</th>
                                           <th>State</th>
                                           <th>Nationality</th>
                                           <th>Role</th>

                                       </tr>
                                   </thead>
                                   <tbody>
                                        @if(count($users) > 0 )
                                            @foreach ($users as $key => $item )
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        @if($item->role == 'employer')
                                                            {{ $item->companyname }}
                                                        @endif
                                                        @if($item->role == 'applicants')
                                                            {{ $item->surname . ' ' . $item->firstname}}
                                                        @endif

                                                    </td>
                                                    <td>{{ $item->email}}</td>
                                                    <td>{{ $item->about}}</td>
                                                    <td>{{ $item->skills}}</td>
                                                    <td>{{ $item->state}}</td>
                                                    <td>{{ $item->country}}</td>
                                                    <td>
                                                        {{ $item->role}}
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
                                           <th>About</th>
                                           <th>Skill</th>
                                           <th>Location</th>
                                           <th>Nationality</th>
                                           <th>Role</th>

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
