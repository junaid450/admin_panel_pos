<!DOCTYPE html>
<html>

<?php include('include/head.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!-- Navbar Start-->
        <?php include('include/navbar.php'); ?>
        <!-- Navbar End-->

        <!-- Main Sidebar Container -->
        <?php include("include/sidebar.php"); ?>

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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>53</h3>

                                    <p>Total Categories</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/adminlte/categories.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53</h3>

                                    <p>Total Recipes</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/adminlte/recipes.php" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box  bg-warning">
                                <div class="inner">
                                    <h3 class="text-white">44</h3>

                                    <p class="text-white">Total User's</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer"><span class="text-white">More info</span>
                                    <i class="fa fa-arrow-circle-right text-white" aria-hidden="true"></i></a> -->
                                    <div class="small-box-footer " style="height: 29px;">
                                    </div>
                                    
                            </div>
                        </div>
                        <!-- ./col -->
                       
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">


                                <div class="card-header">
                                    <div style="height: 100%;">
                                        
                                            <h4 class="  float-left mt-2"
                                                style="text-align: center;">Latest
                                                Categories</h4>
                                        
                                        <a type="button" href="add_categories.php"
                                            class="btn btn-success float-right ">View All</a>
                                    </div>
                                </div>


                                <!-- <div class="card-header">
                                    <div>
                                        <p class="float-left font-size: 40px;">Latest Categories</p>
                                    </div>
                                    <div class="card-tools">
                                        <a href="/adminlte/pages/tables/data.php" class="btn btn-success">View
                                            All</a>
                                    </div>

                                </div> -->
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h4 class="  float-left mt-2">Latest Recipies</h4>
                                        <a type="button" href="add_categories.php"
                                            class="btn btn-success float-right ">View All</a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Recipe Id</th>
                                                <th>Category </th>
                                                <th>Title</th>
                                                
                                                <th>Recipe Time</th>
                                                   
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                
                                                <td>50 min</td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                
                                                <td>50 min</td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                
                                                <td>50 min</td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                
                                                <td>50 min</td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                
                                                <td>50 min</td>
                                                
                                                
                                            </tr>
                                        </tbody>

                                        
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- footer -->
        <?php include('include/footer.php'); ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <?php include('include/jqueryfiles.php'); ?>
</body>

</html>