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
                                <li class="breadcrumb-item active"> Apply for Position</li>
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

                        <div class="card card-purple card-outline col-md-4">
                            <div class="card-body box-profile">

                                @if (count($vacancies) > 0 )
                                    @foreach ($vacancies as $item)
                                        <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('dist/img/user4-128x128.jpg') }}" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{ $item->employer_name  }}</h3>

                                <p class="text-muted text-center">{{ $item->employer_about }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Address</b> <a class="float-right">{{ $item->employer_address }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>State</b> <a class="float-right">{{ $item->employer_state }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Country</b> <a class="float-right">{{ $item->employer_country }}</a>
                                    </li>
                                </ul>

                                <!-- <b href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- // collapsible -->
                        <div class="card card-purple card-outline col-md-7" style="margin-left:20px;margin-right:20px; height:auto;">
                            <div id="accordion">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        {{ $item->post_title }}

                                    </h4>

                                </div>
                                <div class="card-body">
                                    <div class="card-body">
                                        {{ $item->post_description }}
                                        <button type="button" class="btn btn-gold" style="background: gold;color:purple;" data-toggle="modal" data-target="#modal-lg">
                                            Apply
                                        </button>
                                </div>



                                        <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Application Title Form</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form role="form" method="POST" action="{{ route('process-application') }}" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="card-body">
                                                                <h4>Personal Information</h4>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email
                                                                        address</label><b class="text-danger">*</b>
                                                                    <input type="email" class="form-control"
                                                                     value="{{ auth()->user()->email }}"id="exampleInputEmail1" name="email" placeholder="Enter Email Address" required>
                                                                </div>
                                                                <input type="hidden" name="employer_name" value="{{ $item->employer_name  }}"/>
                                                                <input type="hidden" name="employer_id" value="{{ $item->employer_id  }}"/>
                                                                <input type="hidden" name="user_id" value="{{ auth()->user()->id  }}"/>
                                                                <div class="form-group">
                                                                    <label for="phone">Mobile Phone Number</label><b class="text-danger">*</b>
                                                                    <input type="phone" class="form-control" id="phone" name="mobile_phone" required placeholder="Enter Mobile Phone Number">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="phone">Whatsapp Phone Number</label><b class="text-danger">*</b>
                                                                    <input type="phone" class="form-control" id="phone" name="whatsapp_phone" required placeholder="Enter WhatsApp Phone Number">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="dob">Date Of Birth</label><b class="text-danger">*</b>
                                                                    <input type="date" class="form-control" id="dob" name="dob" required placeholder="Enter Date Of Birth">
                                                                </div>
                                                                 <div class="form-group">
                                                                     <label for="country">Nationality</label><b class="text-danger">*</b>
                                                                     <input type="text" class="form-control" id="country" name="country" required placeholder="Which Country are you from ?">
                                                                 </div>

                                                                 <div class="form-group">
                                                                     <label for="exampleInputFile">Upload Cv</label> <b class="text-danger">*</b>
                                                                    <input type="file" class="form-control" name="cv" placeholder="Choose File" />
                                                                         <label class="" for="exampleInputFile">Choose
                                                                                 file and continue</label>
                                                                     <div class="input-group">

                                                                         {{-- <div class="custom-file">
                                                                             <input type="file" class="custom-file-input" name="cv" required id="exampleInputFile">
                                                                             <label class="custom-file-label" for="exampleInputFile">Choose
                                                                                 file and continue</label>
                                                                         </div> --}}

                                                                     </div>
                                                                     <i class="text-danger">Note: Only Pdf,Doc and Docx file extensions are accepted</i>
                                                                 </div>
                                                                 <hr>
                                                                <h4>Job Skills and Training</h4>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Highest
                                                                        Qualification </label><b class="text-danger">*</b>
                                                                    <select  name="qualification" class="form-control" required>
                                                                        <option name="qualification[]" value="">--- Highest Qualification ---
                                                                        </option>
                                                                        <option name="qualification[]" value="wassce">WASSCE</option>
                                                                        <option name="qualification[]" value="ond">OND</option>
                                                                        <option name="qualification[]" value="nce">NCE</option>
                                                                        <option name="qualification[]" value="bsc">BSc</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Experience</label><b class="text-danger">*</b>
                                                                    <select name="experience" class="form-control" required>
                                                                        <option name="experience[]" value="">--- How many years of Experience ---
                                                                        </option>
                                                                        <option name="experience[]" value="2">0 - 2 years</option>
                                                                        <option name="experience[]" value="5">2 - 5 years</option>
                                                                        <option name="experience[]" value="10">5 - 10 years</option>
                                                                        <option name="experience[]" value="11"> &gt; 10 years</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="phone">Job Skils and Trainings
                                                                    </label><b class="text-danger">*</b>
                                                                   <textarea class="form-control" name="skills" required rows="10" cols="20">Describe your Skills </textarea>
                                                                </div>

                                                                <hr>
                                                                <h4>Others </h4>

                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">How were you
                                                                        referred to us ?</label> <b class="text-danger">*</b>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input" name="refer1" value="Walk-in" type="checkbox" id="customCheckbox1">
                                                                            <label for="customCheckbox1" class="custom-control-label">
                                                                                Walk-in </label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input" name="refer2" value="Employee" type="checkbox" id="customCheckbox2">
                                                                            <label for="customCheckbox2" class="custom-control-label">
                                                                                Employee</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input"  name="refer3" value="Newspaper Ad"  type="checkbox" id="customCheckbox3">
                                                                            <label for="customCheckbox3" class="custom-control-label">
                                                                                Newspaper Ad</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input"  name="refer4" value="Facebook"  type="checkbox" id="customCheckbox4">
                                                                            <label for="customCheckbox4" class="custom-control-label">
                                                                                Facebook</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input" name="refer5" value="Twitter" type="checkbox" id="customCheckbox5" >
                                                                            <label for="customCheckbox5" class="custom-control-label">
                                                                                Twitter</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input" name="refer6" value="Craigslist" type="checkbox" id="customCheckbox6">
                                                                            <label for="customCheckbox6" class="custom-control-label">
                                                                                Craigslist</label>
                                                                        </div>
                                                                    <!-- <select class="form-control">
                                                                        <option value="">--- How did you get to know us
                                                                            ---
                                                                        </option>
                                                                        <option>Walk-in</option>
                                                                        <option>Employee</option>
                                                                        <option>Newspaper Ad</option>
                                                                        <option>Facebook</option>
                                                                        <option>Twitter</option>
                                                                        <option>Craigslist</option>

                                                                    </select> -->
                                                                </div>
                                                                {{-- `id`, `user_id`, `email`, `mobile_phone`,
                                                                `whatsapp_phone`, `dob`, `nationality`, `passport`,
                                                                 `cv`, `qualification`, `experience`, `skills`,
                                                                 `refer`, `refer_others`, `post_id`, `post_title`,
                                                                 `employer_id`, `employer_message`, `employer_name`,
                                                                 `status`, `created_at`, `updated_at`, `refer1`,
                                                                 `refer2`, `refer3`, `refer4`, `refer5`, `refer6` --}}
                                                                <div class="form-group">
                                                                    <label for="others">Others
                                                                    </label><b class="text-danger">*</b>
                                                                    <input type="text" class="form-control" name="others" placeholder="Which other way did you get to hear about us ?">
                                                                </div>
                                                            </div>
                                                            <!-- /.card-body -->

                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn " data-dismiss="modal" style="background:
                                                                    purple;color:#fff;">Close</button>
                                                                <button type="submit" class="btn " style="background: purple;color:white;">Apply</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                    @endforeach
                                @else
                                    <span class="alert alert-info">No Vacancy now </span>
                                @endif

                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
