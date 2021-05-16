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
                            <!-- <h1>Profile</h1> -->
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
                    <div class="row ">
                        <div class="col-12  ">
                            <div class="card container">
                                <div class="card-body table-responsive ">


                                    <h2 class="mb-4" style="text-align: center;">Profile</h2>

                                    <div style="width: 100%;">


                                        <div class="row justify-content-center align-items-center">
                                            <img src="https://source.unsplash.com/160x160/?office,computer"
                                                class="rounded-circle  align-items-center" alt="John">


                                        </div>

                                        <a href="/adminlte/edit_profile.php" class="float-right"><button type="button"
                                                class="btn btn-primary mb-2 ">Edit Profile</button></a>

                                    </div>


                                    <table class="table table-bordered  mt-3">

                                        <tbody>

                                            <tr>
                                                <th>Name</th>
                                                <td>Junaid</td>

                                            </tr>
                                            <tr>
                                                <th>User Name:</th>
                                                <td>JunaidArshad</td>
                                            </tr>
                                            <tr>
                                                <th>Email Address:</th>
                                                <td>Junaidarshad123@gmail.com</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                    <!-- <p style="text-align: center;">Name: <span>Junaid</span></p>
                                    <p style="text-align: center;">User Name: <span>Junaid Arshad</span></p>
                                    <p style="text-align: center;">Email Address: <span>Junaid@gmail.com</span></p>
                                    <div style="text-align: center;">
                                    <button type="button" class="btn btn-primary" >Edit Profile</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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