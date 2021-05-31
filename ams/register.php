<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: register.php');
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css"/>
        <title>Student Attendance</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/form.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/login.js"></script>
        <!-- Custom styles for this template -->
        <link href="navbar-fixed-top.css" rel="stylesheet">
    </head>

    <body>
        <?php include('./template/navbar.php'); ?>
        <div class="container">
            <h2 class='header'>For Students</h2>
            <h4>Click here for <a href="student.php">Student Dashboard</a></h4>
            <hr>
            <h2>For Faculty</h2>
            <div class="alert alert-warning hidden">
                <span></span>
                <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
            </div>

            <div class="wrapper">
                <div id="formContent">
                    <h2 class='text-center'>Sign Up</h2>
                    <form id="signup">
                        <div class="form-group">
                            <!-- <label>Name</label> -->
                            <input class="form-control" placeholder="Name" type="text" name="name">
                        </div>

                        <div class="form-group">
                            <!-- <label>Phone Number</label> -->
                            <input class="form-control" placeholder="Phone" type="text" name="phone">
                        </div>

                        <div class="form-group">
                            <!-- <label>Email ID</label> -->
                            <input class="form-control" placeholder="Email" type="email" name="email">
                        </div>

                        <div class="form-group">
                            <!-- <label>Password</label> -->
                            <input class="form-control" placeholder="Password" type="password" name="password">
                            <span class="help-block">Password should be 6 characters long.</span>
                        </div>

                        <div class="form-group">
                            <!-- <label>Re-type Password</label> -->
                            <input class="form-control" placeholder="Re-type Password" type="password" name="password2">
                        </div>

                        <div style="display: flex; justify-content: center;">
                            <button class="btn btn-primary pull-right">Sign Up</button>
                        </div>

                    </form>

                    <h4>Have an account? Then <a href="login.php">Sign In</h4>
                </div>
            </div>
        </div>

    </body>
</html>