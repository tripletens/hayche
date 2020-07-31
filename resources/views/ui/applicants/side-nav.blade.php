<!-- side nav goes here  -->
        <style>
            a {
                color:#fff;
            };
            a:hover{
                color:#c27ac0;
            }
            #navmenu{
                color:#fff;
            }
            #navmenu:hover{
                color:purple;
                background: White;
                box-shadow: black 4px;
            }
        </style>
                <!-- side nav goes here  -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #c27ac0;">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('dist/img/Hayche-logo_standard.png') }}" alt="AdminLTE Logo" class="brand-image img-circle"
                    style="opacity: .8">
                <span class="brand-text font-weight-hard">Hayche</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('storage/pictures/'. auth()->user()->picture) }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" style="color:#f7eeee;" class="d-block">Surname Name </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="{{ route('application-status') }}" class="nav-link" id="navmenu">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>
                                    Application Status
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('apply-position') }}" class="nav-link" id="navmenu">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    Apply for Position
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('upload-cv') }}" class="nav-link" id="navmenu">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Upload Updated CV
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact-us') }}" class="nav-link" id="navmenu">
                                <i class="nav-icon fas fa-phone"></i>
                                <p>
                                    Contact Us
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('edit-information') }}" class="nav-link"id="navmenu">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Edit Information
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- side nav ends here  -->
