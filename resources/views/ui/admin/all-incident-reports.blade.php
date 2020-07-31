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
                                <li class="breadcrumb-item active">All Incident Reports </li>
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
                               <h3 class="card-title">All Incident Reports </h3>
                           </div>

                           <!-- /.card-header -->
                           <div class="card-body">
                               <table id="example1" class="table table-bordered table-responsive table-striped">
                                   <thead>

                                       <tr>
                                            <th>No</th>
                                            <th>Surname</th>
                                            <th>First Name</th>

                                            <th>Nickname </th>
                                            <th>Personal Phone</th>
                                            <th>Incident Type</th>
                                            <th>Please Describe the Incident </th>
                                            <th>Was there a physical violence and was it reported ? </th>
                                            <th>If there was a case of food poisoning, and was it reported to restaurant ?</th>
                                            <th>If there was a case of food poisoning, and was it reported to sanitation Agency ?</th>
                                            <th>Any Other Action Taken </th>
                                            <th>City</th>
                                            <th>Country</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                        @if(count($reports) > 0 )
                                            @foreach ($reports as $key => $item )
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        {{ $item->surname }}
                                                    </td>
                                                    <td>
                                                        {{ $item->firstname }}
                                                    </td>
                                                    <td>
                                                        {{ $item->nickname }}
                                                    </td>
                                                    <th>
                                                        {{ $item->personal_phone }}
                                                    </th>
                                                    {{--  `nickname`, `incident_type`,
                                       `incident_others`, `physical_violence`,
                                        `food_poisoning_restaurant`,
                                         `food_poisoning_agency`, `action_taken`,   --}}
                                                    <td>{{ $item->incident_type}}</td>
                                                    <td>{{ $item->incident_others}}</td>
                                                    <td>{{ $item->physical_violence}}</td>
                                                    <td>{{ $item->food_poisoning_restaurant}}</td>
                                                    <td>{{ $item->food_poisoning_agency}}</td>
                                                    <td>
                                                        {{ $item->action_taken}}
                                                    </td>
                                                    <td>
                                                        {{ $item->city}}
                                                    </td>
                                                    <td>
                                                        {{ $item->country}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif



                                   </tbody>
                                   <tfoot>
                                       <tr>
                                            <th>No</th>
                                            <th>Surname</th>
                                            <th>First Name</th>

                                            <th>Nickname </th>
                                            <th>Personal Phone</th>
                                            <th>Incident Type</th>
                                            <th>Please Describe the Incident </th>
                                            <th>Was there a physical violence and was it reported ? </th>
                                            <th>If there was a case of food poisoning, and was it reported to restaurant ?</th>
                                            <th>If there was a case of food poisoning, and was it reported to sanitation Agency ?</th>
                                            <th>Any Other Action Taken </th>
                                            <th>City</th>
                                            <th>Country</th>
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
