<!DOCTYPE html>
<html>

<?php include('include/head.php'); ?>

<body class="hold-transition sidebar-mini">

    <div style="width: 100%; height: 100%; background: url('bg_image.jpg') no-repeat center center fixed;">
        <div class="container-fluid ">
            <div class="row justify-content-center align-items-center " style="height: 100vh;">
                <div class="col-xs-10 col-sm-8 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center mb-2">
                                <img src="https://source.unsplash.com/160x160/?office,computer"
                                    class="rounded-circle  align-items-center" alt="John">




                            </div>

                            <div>
                                <h3 class="mt-1 md-1" style="text-align: center;">Login</h3>
                            </div>


                            <form action="" autocomplete="off" class="mt-5">
                                <div class="form-group ">
                                    <!-- <label for="form-control">First name:</label> -->
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="form-control">Password:</label> -->
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>

                                <div style="text-align: center;" class="mb-3">
                                    <a href="index.php"><button type="button" id="sendlogin"
                                            class="btn btn-primary rounded-pill px-4"
                                            style="text-align: center;">Login</button></a>
                                </div>

                            </form>
                        </div>
                        <a href="#" style="text-align: center;">
                            <p>Forgot Password?</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <?php include('include/jqueryfiles.php'); ?>

    <script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
    </script>
</body>

</html>