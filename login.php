<!DOCTYPE HTML>
<html>

<?php include('include/head.php'); ?>

<body>

    <?php

include("database.php");

// define variables and set to empty values
$nameErr = $passwordErr ="";
$username = $password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"]))
   {
    $nameErr = "UserName is required";
  } else {
    $username = test_input($_POST["username"]);
    }
  
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

 if(!isset($submit))
 {
    $rs=mysqli_query($conn,"select * from admin where user_name='$username' and password='$password'");
	if(mysqli_num_rows($rs)<1)
	{
         //$found="N";
       
	}
	else
	{
         //$_SESSION["login"]=$user_id;
        ?>
        <script type="text/javascript">location.href = 'index.php';</script>
        
        <?php
        
	}
 }   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <!-- <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="username" value="<?php echo $username;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        Password: <input type="text" name="email" value="<?php echo $password;?>">
        <span class="error">* <?php echo $passwordErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form> -->



    <div style="width: 100%; height: 100%; background: url('bg_image.jpg') no-repeat center center fixed;">
        <div class="container-fluid ">
            <div class="row justify-content-center align-items-center " style="height: 100vh;">
                <div class="col-xs-10 col-sm-8 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center mb-2">
                                <!-- <img src="https://source.unsplash.com/160x160/?office,computer"
                                    class="rounded-circle  align-items-center" alt="John"> -->




                            </div>

                            <div>
                                <h3 class="mt-1 md-1" style="text-align: center;">Login</h3>
                            </div>


                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  class="mt-5">
                                <div class="form-group ">
                                    <!-- <label for="form-control">First name:</label> -->
                                     <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
                                    <p class="error">* <?php echo $nameErr;?></p>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="form-control">Password:</label> -->
                                     <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
                                    <span class="error">* <?php echo $passwordErr;?></span>
                                </div>

                                <button type="submit" name="submit" id="sendlogin"
                                            class="btn btn-primary rounded-pill px-4"
                                            style="text-align: center;">Login</button>
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
    </div>



</body>

</html>