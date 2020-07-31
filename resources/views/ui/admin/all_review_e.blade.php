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
                                <li class="breadcrumb-item active">All Establishments Reviews</li>
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
                               <h3 class="card-title">All Establishments Reviews </h3>
                           </div>

                           <!-- /.card-header -->
                           <div class="card-body">
                               <table id="example1" class="table table-bordered table-responsive table-striped">
                                   <thead>
                                        {{--  `name`, `city`, `type`, `pdf`, `image1`,
                                        `image1_caption`, `image2`, `image2_caption`,
                                        `image3`, `image3_caption`,   --}}
                                       <tr>
                                           <th>No</th>
                                           <th>Establishment Name </th>
                                           <th>City</th>
                                           <th>Facility Type</th>
                                           <th>Pdf</th>
                                           <th>Image1</th>
                                           <th>Image2</th>
                                           <th>Image3</th>

                                       </tr>
                                   </thead>
                                   <tbody>
                                        @if(count($reviews) > 0 )
                                            @foreach ($reviews as $key => $item )
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                       {{ $item->name }}

                                                    </td>
                                                    <td>{{ $item->city}}</td>
                                                    <td>{{ $item->type}}</td>
                                                    <td>
                                                        <a href="{{ asset('storage/reviews/{{ $item->pdf }}') }}">
                                                            download pdf
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset('storage/reviews/'.$item->image1) }}" style="width:20%;height:auto;">
                                                        <h4>{{ $item->image1_caption }}</h4>
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset('storage/reviews/'.$item->image2) }}" style="width:20%;height:auto;">
                                                        <h4>{{ $item->image2_caption }}</h4>
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset('storage/reviews/'.$item->image3) }}" style="width:20%;height:auto;">
                                                        <h4>{{ $item->image3_caption }}</h4>
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
