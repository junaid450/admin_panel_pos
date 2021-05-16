<!DOCTYPE html>
<html>


<?php include('include/head.php'); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">




        <!-- Navbar Start-->
        <?php include('include/navbar.php'); ?>
        <!-- Navbar End-->

        <!-- Main Sidebar Container -->
        <?php include("include/sidebar.php"); ?>





        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1>Change Password</h1> -->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container">

                    <div class="row justify-content-center align-items-center" >
                        <div class="col-xs-12 col-sm-8 ">
                            <div class="card" style="height: 230px;">
                                <div class="card-body">
                                    <form action="" autocomplete="off">
                                        <h2 class="mb-4" style="text-align: center;">Change Password</h2>
                                        <div class="form-group">
                                            <label for="form-control">Old Password:</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>

                                        <a href="create_new_password.php"><button type="button" id="sendlogin"
                                                class="btn btn-primary float-right">Submit</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.5
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->







    <?php include('include/jqueryfiles.php'); ?>
    <!-- page script -->

</body>

</html>