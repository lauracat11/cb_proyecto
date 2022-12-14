<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin CCB</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand p-5 sticky-top"></nav>

        <aside class="position-fixed main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../index.html" class="brand-link logo-bg">
                <img src="../imgs/logo.jpg" class="img-fluid">
            </a>
            <div class="sidebar">
                <li class="nav-header h3 list-unstyled mx-auto text-light text-center mt-4">PANELL DE CONTROL</li>
                <div class="user-panel mt-4 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../imgs/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block h5">AdminCB</a>
                    </div>
                </div>

                <div class="lineaB mt-3" style="height: 5px;"></div>
                
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sharp fa-solid fa-bookmark"></i>
                                <p class="h4">
                                    SOL??LICITUDS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="calendar.html" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p class="h4">
                                    CALENDARI
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-solid fa-user"></i>
                                <p class="h4">
                                    USUARIS
                                </p>
                            </a>
                        </li>
                        <div class="lineaB mt-3 mb-4" style="height: 5px;"></div>
                        <button type="button" class="btn boton-cerrar-s btn-danger">TENCAR SESSI??</button>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content justify-content-center">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row d-flex justify-content-evenly">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box cajas-info">
                                <div class="inner">
                                    <h3>33</h3>

                                    <p>SOLICITUDS</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box cajas-info">
                                <div class="inner">
                                    <h3>14</h3>

                                    <p>USUARIS REGISTRATS</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box cajas-info">
                                <div class="inner">
                                    <h3>55</h3>

                                    <p>VISITES</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <div>
                <?php
                    require ('../php/header.php');
                    $query = "SELECT * FROM reserve";

                    echo '<table class="table">
                        <thead class="color-tabla">
                            <tr>    
                                <th scope="col">#</th>
                                <th scope="col">ID_USER</th>
                                <th scope="col">Zona Solicitada</th>
                                <th scope="col">Telf</th>
                                <th scope="col">Correu</th>
                                <th scope="col">Dies Solicitats</th>
                                <th scope="col">Estat</th>
                            </tr>
                        </thead>';

                            if ($result = $conn->query($query)){
                                while ($row = $result->fetch_assoc()){
                                    $filed1name = $row["ID"];
                                    $filed2name = $row["USER_ID"];
                                    $filed3name = $row["zzone"];
                                    // $filed4name = $row[""];
                                    // $filed5name = $row[""];
                                    $filed4name = "null";
                                    $filed5name = "null2";
                                    $filed6name = $row["ddate"];
                                
                                    echo '<tr>    
                                            <th scope="row">'.$filed1name.'</th>
                                            <td>'.$filed2name.'</td>
                                            <td>'.$filed3name.'</td>
                                            <td>'.$filed4name.'</td>
                                            <td>'.$filed5name.'</td>
                                            <td>'.$filed6name.'</td>

                                        </tr>
                                    </tbody>';
                            };
                            $result->free();
                        };

                    mysqli_close($conn);
                ?> 
            </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->

</body>

</html>
