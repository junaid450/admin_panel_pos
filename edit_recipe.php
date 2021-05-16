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
                <div class="row justify-content-center align-items-center">
                    <div class="col-xs-12 col-sm-8">
                        <div class="card">
                        <h3 class="mt-2" style="text-align: center;">Edit Recipe</h3>
                            <form class="form-horizontal ">

                                <div class="card-body ">
                                
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3"
                                                placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputFile" class="col-sm-2 col-form-label">Recipie
                                            Image</label>
                                        <div class="input-group col-sm-10">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    Image</label>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row" style="margin-bottom: 0px !Important;">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                        <div class="input-group col-sm-10">
                                            <table class="table myTableone" id="myTable" style="margin-bottom: 2px !Important;">
                                                <tbody style="padding: 0px;">
                                                    <tr id="row0" style="border: none;">
                                                        <td style="padding-left: 0px !Important; padding-right: 0px !Important;">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" />
                                                                <span class="input-group-btn">
                                                                    <button id="btn0" type="button"
                                                                        class="btn btn-success" onclick="addRow(this)">
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

                                    <button type="submit" class="btn btn-primary float-right ">Submit</button>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>


                <!-- /.card-footer -->
        </div>
        <!-- /.card-body -->


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

    $('.add').on('click', add);
    $('.remove').on('click', remove);

    function add() {
        var new_chq_no = parseInt($('#total_chq').val()) + 1;
        var new_input = "<input style = ' width:100%;height:40px; margin-top: 5px;' type='text' id='new_" + new_chq_no +
            "'>";

        $('#new_chq').append(new_input);

        $('#total_chq').val(new_chq_no);
    }

    function remove() {
        var last_chq_no = $('#total_chq').val();

        if (last_chq_no > 1) {
            $('#new_' + last_chq_no).remove();
            $('#total_chq').val(last_chq_no - 1);
        }
    }

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