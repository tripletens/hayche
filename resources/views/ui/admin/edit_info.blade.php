
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
                                <li class="breadcrumb-item active"> Contact Us</li>
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
                        <div class="col-md-4">
                            <div class="card card-purple card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <?php  $picture = auth()->user()->picture; ?>
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('storage/pictures/'. auth()->user()->picture) }}" alt="User profile picture">
                                        <form method="POST" action="{{ route('edit-passport') }}" enctype="multipart/form-data">
                                            @csrf

                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Profile Picture</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="picture" class="custom-file-input form-control" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>

                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-block" style="background: purple; color:gold;"><b>Upload Profile Picture</b></button>
                                        </div>
                                        </form>
                                    </div>

                                    <h3 class="profile-username text-center">{{ auth()->user()->surname ." ".auth()->user()->firstname }}</h3>

                                    <p class="text-muted text-center">{{ auth()->user()->about }}</p>

                                    <!-- <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Followers</b> <a class="float-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Following</b> <a class="float-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Friends</b> <a class="float-right">13,287</a>
                                        </li>
                                    </ul> -->


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="card ">
                                <div class="card-header" style="background: purple;color:gold;">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                    <p class="text-muted">
                                       {{ auth()->user()->education }}
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                    <p class="text-muted">
                                        {{ auth()->user()->state }} ,{{ auth()->user()->country }}</p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                    <p class="text-muted">
                                        {{ auth()->user()->skills }}
                                    </p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                    <p class="text-muted">{{ auth()->user()->more_info }}</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="card card-purple card-outline col-md-8" style="margin:0 auto;">

                                <div class="card-header">
                                    <h3 class="card-title">Edit Profile Information </h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('update-profile') }}">
                                        @csrf
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" value="{{ auth()->user()->email }}" name="email" id="exampleInputEmail1"
                                                    placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputsurname1">Surname</label>
                                                <input type="text" name="surname" class="form-control" id="exampleInputsurname1"
                                                    placeholder="Enter Surname ">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputfname1">First Name</label>
                                                <input type="text" name="firstname" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter First Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <textarea name="address" class="form-control" cols="20" rows="5">
                                                   Enter Address
                                               </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">About me </label>
                                                <textarea class="form-control" name="about" cols="20" rows="5">
                                                   Enter About me
                                               </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Education </label>
                                                <textarea class="form-control" name="education" cols="20" rows="5">
                                                   Tell Us About your Education
                                               </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Skills </label>
                                                <textarea class="form-control" name="skills" cols="20" rows="5">
                                                   Tell Us About your Skills
                                               </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="">
                                                    Gender</label>
                                                <div class="custom-control custom-radio ">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadio1"
                                                        name="gender" value="male">
                                                    <label for="customRadio1" class="custom-control-label">
                                                        Male</label>

                                                </div>
                                                <div class="custom-control custom-radio " >
                                                    <input class="custom-control-input " type="radio"
                                                        id="customRadio2"
                                                        name="gender" value="female">
                                                    <label for="customRadio2" class="custom-control-label">
                                                       Female</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Date of Birth</label>
                                                <input type="date" name="dob" class="form-control" id="exampleInputdate"
                                                    placeholder="Enter Date of Birth">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Personal Phone Number</label>
                                                <input type="number" name="personal_phone" class="form-control" id="exampleInputdate"
                                                    placeholder="Enter Personal Phone Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Whatsapp Phone Number</label>
                                                <input type="number" name="whatsapp_phone" class="form-control" id="exampleInputdate"
                                                    placeholder="Enter Whatsapp Phone Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Skype</label>
                                                <input type="text" name="skype" class="form-control" id="exampleInputdate"
                                                    placeholder="Enter Skype Id">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Area of Expertise</label>
                                               <textarea class="form-control" name="expertise" cols="20" rows="5">
                                                   Enter Area of Expertise
                                               </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputfname1">State</label>
                                                <input type="text" name="state" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter State">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Nationality</label>
                                                <input type="text"  name="country" class="form-control" id="exampleInputdate"
                                                    placeholder="Which country are you from? ">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Change Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">More Information About me </label>
                                                <textarea class="form-control" name="more_info" cols="20" rows="5">
                                                   Enter Notes
                                               </textarea>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn " style="background: purple;color:gold;float:right;">Submit</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
