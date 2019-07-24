<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo base_url(); ?>"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>template/logo.png">
    <title> Mini Market </title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>template/backend/html/dist/css/style.css" rel="stylesheet">
    <!-- Data Table CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/backend/html/dist/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/backend/html/dist/datatables/buttons.bootstrap4.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/backend/html/dist/fontawesome/css/all.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="<?php echo base_url() ?>template/backend/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elegant admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url() ?>template/logo.png" alt="homepage" class="dark-logo" style="width: 70px; height: 50px" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url() ?>template/logo.png" alt="homepage" class="light-logo" style="width: 70px; height: 50px"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <h4 class="text-dark dark-logo"> Mini Market </h4>
                         <!-- Light Logo text -->    
                         <h4 class="text-white light-logo"> Mini Market </h4></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>template/backend/assets/images/users/1.jpg" alt="user" class="img-circle" width="30"></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="<?php echo base_url() ?>template/logo.png" style="width: 70px; height: 50px;" alt="elegant admin template"></span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('dashboard') ?>" aria-expanded="false"><i class="fas fa-cash-register"></i><span class="hide-menu">Dashboard</span></a></li>

                        <li> 
                          <a class="waves-effect waves-dark" href="<?php echo base_url('order')?>" aria-expanded="false"><i class="fas fa-cart-plus"></i><span class="hide-menu"></span> Order </a>
                        </li>

                        <li> 
                          <a class="waves-effect waves-dark" href="<?php echo base_url('deliver')?>" aria-expanded="false"><i class="fas fa-dolly"></i><span class="hide-menu"></span> Deliver </a>
                        </li>

                        <li> 
                          <a class="waves-effect waves-dark" href="<?php echo base_url('stock')?>" aria-expanded="false"><i class="fas fa-boxes"></i><span class="hide-menu"></span> Stock </a>
                        </li>

                        <li> 
                          <a class="waves-effect waves-dark" href="<?php echo base_url('item')?>" aria-expanded="false"><i class="fas fa-gifts"></i><span class="hide-menu"> Item </span></a>
                        </li>

                        <li> 
                          <a class="waves-effect waves-dark" href="<?php echo base_url('category')?>" aria-expanded="false"><i class="fas fa-grip-horizontal"></i><span class="hide-menu"></span> Category </a>
                        </li>

                        <li> 
                          <a class="waves-effect waves-dark" href="<?php echo base_url('type')?>" aria-expanded="false"><i class="fas fa-sitemap"></i><span class="hide-menu"></span> Type </a>
                        </li>

                        <li> 
                          <a class="waves-effect waves-dark" href="<?php echo base_url('logout')?>" aria-expanded="false"><i class="fas fa-power-off"></i><span class="hide-menu"></span> Logout </a>
                        </li>

                        
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                
                <?php $this->load->view($innerdata); ?>
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2018 Elegent Admin by wrappixel.com
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>template/backend/assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url() ?>template/backend/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>template/backend/html/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>template/backend/html/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>template/backend/html/dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>template/backend/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url() ?>template/backend/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>template/backend/html/dist/js/custom.min.js"></script>
    <!-- Data Table JS -->
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/buttons.bootstrap4.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/jszip.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/pdfmake.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/vfs_fonts.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/buttons.html5.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/buttons.print.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/backend/html/dist/datatables/buttons.colVis.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );

    setInterval(function()
    {
        $('.alertmessage').hide();
    },30000);
    
    });

    

  </script>
</body>

</html>