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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Edit Information</li>
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
                        <div class="card card-purple card-outline col-md-8" style="margin:0 auto;">

                                <div class="card-header">
                                    <h3 class="card-title">Edit Profile Information </h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('update_profile') }}">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name of Facility</label>
                                                <input type="text" name="companyname" class="form-control" id="exampleInputName of Facility1"
                                                    placeholder="Enter Name of Facility">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Type of Facility </label>
                                                <input type="text" name="facility_type" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter Type of Facility">
                                            </div>
                                            <i class="text-danger">If it is a hotel, how many stars</i>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">How many Stars? </label>
                                                <select class="form-control" name="stars">
                                                    <option value="1" name="stars[]">
                                                        1
                                                    </option>
                                                    <option value="2" name="stars[]">
                                                        2
                                                    </option>
                                                    <option value="3" name="stars[]">
                                                        3
                                                    </option>
                                                    <option value="4" name="stars[]">
                                                        4
                                                    </option>
                                                    <option value="5" name="stars[]">
                                                        5
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">About Company </label>
                                                <textarea class="form-control" name="about" cols="20" rows="5">
                                                  Tell us a brief description about the Company
                                               </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Company Address</label>
                                                <textarea class="form-control" name="address" cols="20" rows="5">
                                                   Enter Address
                                               </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Company Phone Number</label>
                                                <input type="number" name="personal_phone" class="form-control" id="exampleInputdate"
                                                    placeholder="Enter Company Phone Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Company Email Address</label>
                                                <input type="email" value="{{auth()->user()->email}}" class="form-control" disabled id="exampleInputdate"
                                                    placeholder="Enter Company Email Address">
                                            </div>
                                             <div class="form-group">
                                                 <label for="exampleInputfname1">State</label>
                                                 <input type="text" class="form-control" name="state" id="exampleInputEmail1"
                                                     placeholder="which state is the company located ?">
                                             </div>
                                             <div class="form-group">
                                                 <label for="exampleInputPassword1">Country</label>
                                                 <input type="text" class="form-control" name="country" id="exampleInputdate"
                                                     placeholder="Which country is the Company located? ">
                                             </div>

                                            <div class="form-group">
                                                <label for="exampleInputsurname1">Contact Surname</label>
                                                <input type="text" class="form-control" name="contact_surname" id="exampleInputsurname1"
                                                    placeholder="Enter Contact Surname ">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputfname1">Contact First Name</label>
                                                <input type="text" class="form-control" name="contact_firstname" id="exampleInputEmail1"
                                                    placeholder="Enter Contact First Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputfname1">Contact Position</label>
                                                <input type="text" class="form-control" name="contact_position" id="exampleInputEmail1"
                                                    placeholder="Enter Contact Position">
                                            </div>




                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Contact Phone Number 1</label>
                                                <input type="number" class="form-control" name="contact_phone_one" id="exampleInputdate"
                                                    placeholder="Enter Contact Phone Number 1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Contact Phone Number 2</label>
                                                <input type="number" class="form-control" name="contact_phone_two" id="exampleInputdate"
                                                    placeholder="Enter Contact Phone Number 2">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Contact Email</label>
                                                <input type="email" class="form-control" name="contact_email" id="exampleInputPassword1"
                                                    placeholder="Enter Contact Email">
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
        <!-- /.content-wrapper -->
