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
                        <div class="col-md-8" style="margin:0 auto;">
                            <div class="card card-purple card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">

                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('storage/pictures/'. auth()->user()->picture) }}" alt="User profile picture">

                                    </div>

                                    <h3 class="profile-username text-center">{{ auth()->user()->companyname }}</h3>

                                    <p class="text-muted text-center">{{ auth()->user()->facility_type }}</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Email Address</b> <a class="float-right">{{ auth()->user()->email }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Address</b> <a class="float-right">{{ auth()->user()->address }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>City </b> <a class="float-right">{{ auth()->user()->city }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>State</b> <a class="float-right">{{ auth()->user()->state }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Country</b> <a class="float-right">{{ auth()->user()->country }}</a>
                                        </li>
                                    </ul>


                                </div>
                                <!-- /.card-body -->
                            </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
