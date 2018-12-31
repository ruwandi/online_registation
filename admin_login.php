	<?php
	    session_start();
	    $con= mysqli_connect("localhost","root","")or die("Unable to connect");
	    mysqli_select_db($con,'online_registration_system');		         
	?> 
	<html>
	<head>
		<title>Login Online Registration System</title>
		<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
	  	<link rel="stylesheet" href="home.css" type="text/css">
	    <style>
	      body{
	        background:url('http://clevertechie.com/img/bnet-bg.jpg') #0f2439;
	      }
	      ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #0f0f3d;
}
.nev{
	margin-top: 20px;
	margin-left: 20px;
	margin-right: 20px;
}
	    </style>
	</head>
	<body>
		<!-- nev bar -->
		<div class="nev">
		   	<ul>
			  <li><a href="login.php">Student Login</a></li>
			  <li><a href="home.php">Student Register</a></li>
			  <li><a href="admin_login.php">Admin Login</a></li>
			  <li><a href="admin_register.php">Admin Register</a></li>
			  <li style="float:right"><a class="active" href="logout.php">Log Out</a></li>
			</ul>
		   </div>

		<div class="body-content">
		    <div class="module">
		    <h1>Admin Login</h1>
		    <form class="form" action="admin_login.php" method="post" enctype="multipart/form-data" autocomplete="off">
			    <div class="alert alert-error"></div>
			    <input type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
			    <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
			    <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary" />
			    <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" onclick="location.href='admin_register.php';" />
		    </form>

		    <?php 
		        if(isset($_POST['login'])){
		          $email=$_POST['email'];
		          $password=$_POST['password'];
		          $hash = sha1($password);
		          $query="select * from admin_user WHERE email='$email' AND password='$hash'";
		          $qurey_run = mysqli_query($con,$query);

			          
					        if (mysqli_num_rows($qurey_run)>0){
					              $_SESSION['email']=$email;
					              header('location:admin.php');
					            }
					            else{
					              echo '<script type ="text/javascript"> alert("Invalid credentials") </script>';
					            }
			              
		            }


		       ?>
		  </div>
		</div>

	</body>
	</html>