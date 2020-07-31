<!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-gold navbar-gold" style="background-color: #c27ac0;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>


            <style>
                #academy:hover{
                    color:white;
                }
            </style>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item" style="color:white;">
                    <a href="#" id="academy">
                        <h5 style="padding:6px;"> Join our Academy</h5>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf

                            <button class="dropdown-item bg-danger">
                                <i class="fas fa-power-off"></i> Logout
                            </button>

                        </form>


                    </div>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.navbar -->
