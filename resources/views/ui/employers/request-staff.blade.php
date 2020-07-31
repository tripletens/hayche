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
                                <li class="breadcrumb-item active">Request Staff</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @include('const.messages')
                    <div class="row">
                        <div class="col-md-8" style="margin:0 auto;">
                            <div class="card card-">
                                <div class="card-header" style="background: purple;color:gold;">
                                    <h3 class="card-title">Request Staff</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="POST" action="{{ route('request-staff-process') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No of staff Needed :</label>
                                            <input type="number" name="staff_no" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter No of staff Needed ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Department Needed :</label>
                                            <input type="text" name="department" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter Department Needed">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Position Needed :</label>
                                            <input type="text" name="post_title" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter Position Needed">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Position Description :</label>
                                            <textarea type="text" name="post_description"  class="form-control" id="exampleInputEmail1">
                                            </textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn pull-right" style="background:purple;color:gold;float:right;">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
