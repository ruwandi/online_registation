<?php
   
// connect database
          $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'mini_project'); 

         
?> 
<html>
<head>
  <title>registation</title>
  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="home.css" type="text/css">
  <style>
      body{
        background:url('http://clevertechie.com/img/bnet-bg.jpg') #0f2439;
      }
  </style>
</head>
<body>
  <div class="body-content">
  <div class="module">     <h1>Register</h1>
    <form class="form" action="home.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
       <a href="login.php"><input type="submit" value="Log In" name="log in" class="btn btn-block btn-primary" /></a>
      
    </form>
    <?php 
        if (isset($_POST['register'])) { 
          //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
 
          $username = $_POST['username'];
          $email = $_POST['email'];

          $password= $_POST['password'];

          $cpassword = $_POST['confirmpassword'];

          if($password==$cpassword){

            $query= "select * from user WHERE email='$email'";
            $query_run=mysqli_query($con,$query);

            if (mysqli_num_rows($query_run)>0) {
              //there is akready a user with the same username

              echo '<script type ="text/javascript"> alert("User already use that email... try another ") </script>';
            }
            else {

              $query="insert into user values('$username','$email','$password')";
              $query_run = mysqli_query($con,$query);

              if ($query_run) {
  
              echo '<script type ="text/javascript"> alert("User Registerd.. Go to login page to login") </script>';
              }  

              else{

                echo '<script type ="text/javascript"> alert("Error!") </script>';
              }

            }


          }
          else{

            echo '<script type ="text/javascript"> alert("Password and confirm password does not match!") </script>';
          }


         } 
       ?>

  </div>
</div>
</body>
</html>

