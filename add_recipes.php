<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | General Form Elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="dist/css/style.css">

</head>

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
                            <h1 class="m-0 text-dark">Recipes</h1>
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

                <div class="row justify-content-center align-items-center"">
            <div class=" col-xs-12 col-sm-8">

                    <div class="card">
                        <h3 class="mt-2" style="text-align: center;">Add Recipe</h3>
                        <form class="form-horizontal">
                            <div class="card-body bg-white">
                            <div class="form-group row">
                                    <label for="exampleInputFile" class="col-sm-2 col-form-label">Select Category</label>
                                    <div class="input-group col-sm-10">
                                        <div class="custom-file">
                                            
                                            <select class="form-control">
                                                <option>Select Category</option>
                                                <option>Ramadan Special</option>
                                                <option>Chef following</option>
                                                <option>Special foods</option>
                                                <option>For Vegitarian</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputFile" class="col-sm-2 col-form-label">Recipie Image</label>
                                    <div class="input-group col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Image</label>

                                        </div>

                                    </div>
                                </div>

                                

                               


                                <div class="form-group row">
                                    <label for="exampleInputFile" class="col-sm-2 col-form-label">Recipie Time</label>
                                    <div class="input-group col-sm-10">
                                        <div class="custom-file">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Title">
                                            

                                        </div>

                                    </div>
                                </div>





                                <div class=" row">
                                    <div class="col-sm-2 "></div>
                                    <div class=" col-sm-10">
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <label for="form-control">Calories</label>
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Calories">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="form-control">Protien</label>
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Protien in grams">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="form-control">Total Fat</label>
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Total Fat in grams">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="form-control">Total Carbs</label>
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Total Carbs in grams">
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row" style="margin-bottom: 0px !Important;">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">How to cook?</label>
                                    <div class="input-group col-sm-10">
                                        <table class="table" id="myTable" style="margin-bottom: 2px !Important;">
                                            <tbody>
                                                <tr id="row0" style="border: none;">
                                                    <td
                                                        style="padding-left: 0px !Important; padding-right: 0px !Important;">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control " />
                                                            <span class="input-group-btn">
                                                                <button id="btn0" type="button" class="btn btn-success"
                                                                    onclick="addRow(this)">
                                                                    <span id="icon0" class="fa fa-plus"></span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>

                                <div style="width: 100%;">

                                    <button type="submit" class="btn btn-primary float-right   mt-0">Submit</button>
                                </div>

                            </div>
                            <div>

                            </div>


                        </form>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card-body -->



                </div>
        </div>

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

    <script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });

    function addRow(input) {
        var table = document.getElementById("myTable");
        var i = parseInt(input.id.substring(3, input.id.length));
        document.getElementById('btn' + i).className = "btn btn-danger ";
        document.getElementById('icon' + i).className = "fa fa-minus ";
        var row = table.insertRow(table.rows.length);
        row.id = "row" + (i + 1);
        var cell = row.insertCell(0);
        cell.innerHTML = '<div class="input-group">' +
            '<input type="text" class="form-control" />' +
            '<span class="input-group-btn">' +
            '<button id="btn' + (i + 1) + '" type="button" class="btn btn-success" onclick="addRow(this)">' +
            '<span id="icon' + (i + 1) + '" class="fa fa-plus"></span>' +
            '</button>' +
            '</span>' +
            '</div>';
        $('#btn' + i).attr('onclick', 'remRow(this)');
    }

    function remRow(input) {
        var table = document.getElementById("myTable");
        var i = parseInt(input.id.substring(3, input.id.length));
        var ind = table.rows["row" + i].rowIndex;
        table.deleteRow(ind);
    }
    </script>
</body>

</html>