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
                            <h1>Recipes</h1>
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
                    <!-- <div class="row mb-2">
                        <div class="col-12">
                            <a type="button" href="add_recipies.php" class="btn btn-primary float-right ">Add Recipies</a>
                        </div>

                    </div> -->

                    <div class="row">
                        <div class="col-12">


                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h3 class="  float-left">Recipes</h3>
                                        <a type="button" href="add_recipes.php" class="btn btn-primary float-right "><i
                                                class="fa fa-plus mr-2" aria-hidden="true"></i>Add Recipes</a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Recipe Id</th>
                                                <th>Category </th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Recipe Time</th>
                                                <th>Calories</th>
                                                <th>Proteins</th>
                                                <th>Total Fats</th>
                                                <th>Total Carbs</th>
                                                <th>Status</th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Ramadan Special</td>
                                                <td>Biryani</td>
                                                <td><img src="dist/img/dummy_img.jpg" class="align-items-center "
                                                        alt="John"></td>
                                                <td>50 min</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>150</td>
                                                <td>70</td>
                                                <td><button type="button" class="btn btn-success">Edit</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Recipe Id</th>
                                                <th>Category </th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Recipe Time</th>
                                                <th>Calories</th>
                                                <th>Proteins</th>
                                                <th>Total Fats</th>
                                                <th>Total Carbs</th>
                                                <th>Status</th>   
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
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