<div class="content-wrapper" style="min-height: 377px;">
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
                                <li class="breadcrumb-item active"> Upload CV</li>
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
                        <div class="card card-purple card-outline col-md-4">
                            <form role="form" method="POST" action="{{ route('process-upload-cv') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="card-header">
                                    <h4>Upload Your Cv Here </h4>
                                </div>
                                <div class="card-body">
                                    @include('const.messages')
                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Cv</label> <b class="text-danger">*</b>
                                        <input type="file" class="form-control" name="cv" placeholder="Choose File" />
                                        <label class="" for="exampleInputFile">Choose
                                        file and continue</label>
                                        <i class="text-danger">Note: Only Pdf,Doc and Docx file extensions are accepted</i>
                                    </div>
                                    <button type="submit" class="btn btn-block " style="background:purple;color:gold;">Submit</button>

                                </div>
                                <!-- /.card-body -->


                            </form>
                        </div>
                        <div class="card card-purple card-outline col-md-8">
                            <?php  $cv = auth()->user()->cv; ?>

                            <iframe src="<?php echo asset('storage/cv/'.$cv);?>" height="500px" width="100%"></iframe>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
