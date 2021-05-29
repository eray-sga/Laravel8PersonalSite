<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               
                <div class="sidebar-brand-text mx-3">Blog Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Hakkımızda</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('service')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Hizmetler</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('skill')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beceriler</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('blog')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Blog</span></a>
            </li>
            
            <li class="nav-item active">
                <a onclick="return confirm('Gidene kal, kalana git denmez. Çıkış yapıyorsun.')" class="nav-link" href="{{route('logout')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Çıkış Yap</span></a>
            </li>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                   
                </nav>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                        
                    </div>

                    <!-- Content Row -->
