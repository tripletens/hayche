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
                                <li class="breadcrumb-item"><a href="#" style="color:#c27ac0">Home</a></li>
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
                        <div class="card card-purple card-outline col-md-12" style="margin:0 auto;">

                            <div class="card-header">
                                <h3 class="card-title">All Applicants </h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-responsive table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Full name </th>
                                            <th>Email</th>

                                            <th>Skill</th>
                                            <th>Location</th>
                                            <th>Nationality</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($applicants) > 0 )
                                            @foreach ($applicants as $key=>$item )
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item->surname . ' ' . $item->firstname }}
                                                    </td>
                                                    <td>{{ $item->email }}</td>

                                                    <td>{{ $item->skills }}</td>
                                                    <td>{{ $item->state }}</td>
                                                    <td>{{ $item->country }}</td>
                                                    <td>
                                                        <button type="button" class="btn" style="color:gold; background:purple;"
                                                            data-toggle="modal" data-target="#modal-lg{{ $item->id }}">
                                                            Message
                                                        </button>
                                                        <div class="modal fade" id="modal-lg{{ $item->id }}">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Create New Message</h4>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form role="form" method="POST" action="/employer/process-new-message/{{ $item->id }}">
                                                                            @csrf
                                                                            <div class="card-body">
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputEmail1">Message Title</label>
                                                                                    <input type="text" class="form-control"
                                                                                        name="title" id="exampleInputEmail1" placeholder="Enter Title">
                                                                                    
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputPassword1">Message Body</label>
                                                                                    <textarea class="form-control" name="message" cols="20"
                                                                                        rows="10"> Enter your message </textarea>
                                                                                </div>

                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                            <div class="modal-footer justify-content-between">
                                                                                <button type="button" class="btn btn-default"
                                                                                    data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn "
                                                                                    style="color:gold;background:purple;">Send Message</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                        <!-- /.modal -->
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
                                            <th> </th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                        <br>
                        <div class="card card-purple card-outline col-md-12" style="margin:0 auto;">

                                <div class="card-header">
                                    <h3 class="card-title">All Messages </h3>
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-responsive table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Sender</th>
                                                <th>Receiver</th>
                                                <th>Message</th>
                                                <th>Reply </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($messages) > 0)
                                                @foreach ($messages as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>
                                                            @if ($item->sender_id == auth()->user()->id)
                                                            <br><span class="alert alert-info">Self<br></span>
                                                            @else
                                                             <br><span class="alert alert-info">Admin<br></span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->receiver_id == auth()->user()->id)
                                                            <br><span class="alert alert-info">Self<br></span>
                                                            @else
                                                             <br><span class="alert alert-info">Admin<br></span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $item->message }}
                                                        </td>
                                                        <td>{{ $item->reply }}</td>
                                                        <td>
                                                            @if($item->receiver_id == auth()->user()->id)
                                                                <button type="button" class="btn" style="color:gold; background:purple;" data-toggle="modal"
                                                                data-target="#modal-lg">
                                                                    Reply
                                                                </button>
                                                                <div class="modal fade" id="modal-lg">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Message Title</h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form role="form" method="POST" action="{{ route('process-reply-message',$item->id) }}">
                                                                                    @csrf
                                                                                    <div class="card-body">                                                                                        <div class="form-group">

                                                                                        <div class="form-group">
                                                                                            <label for="exampleInputPassword1">Your Reply</label>
                                                                                            <textarea class="form-control" name="reply" cols="20" rows="10"> Enter your reply to this message </textarea>
                                                                                        </div>

                                                                                    </div>
                                                                                    <!-- /.card-body -->
                                                                                    <div class="modal-footer justify-content-between">
                                                                                        <button type="button" class="btn btn-default"
                                                                                            data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn " style="color:gold;background:purple;">Send Reply</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>

                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                                <!-- /.modal -->
                                                            @endif
                                                        </td>


                                                    </tr>
                                                @endforeach
                                            @endif




                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Sender</th>
                                                <th>Receiver</th>
                                                <th>Message</th>
                                                <th>Reply </th>
                                            </tr>
                                        </tfoot>
                                    </table>

                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
