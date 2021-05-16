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
                            <h1>Categories</h1>
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

            <!-- <div>
    <button type="button" class="btn btn-primary float-right">Primary</button>
    </div> -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header">

                                    <div>
                                        <h3 class="  float-left">Categories</h3>
                                        <a type="button" href="add_categories.php"
                                            class="btn btn-primary float-right "><i class="fa fa-plus mr-2"
                                                aria-hidden="true"></i>Add Category</a>
                                    </div>





                                    <!-- <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i
                                                        class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover  ">

                                        <thead>
                                            <tr>
                                                <th>Category ID</th>
                                                <th>Name</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Chef following</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Special foods</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>For Vegitarian</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->



        </div>
    </div>


    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="Mohsin">
                    </div>
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="Irshad">
                    </div>
                    <div class="form-group">
                        <textarea rows="2" class="form-control"
                            placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span
                            class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                            class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure
                        you want to delete this Record?</div>

                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-success"><span
                            class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </div>

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
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>