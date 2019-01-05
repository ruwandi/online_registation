    <?php
	    session_start();
	    $con= mysqli_connect("localhost","root","")or die("Unable to connect");
	    mysqli_select_db($con,'online_registration_system');		         
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
  
}
.nev{
	
		  </style>
		</head>
		<body>
			<!-- nev bar -->
			<div class="nev">
			   	<ul>
				  <li style="float:right"><a class="active" href="logout.php">Log Out</a></li>
				</ul>
			   </div>
		  <div class="body-content">
		  <div class="module">     <h1>Register</h1>
		    <form class="form" action="home.php" method="post" enctype="multipart/form-data" >
		      <div class="alert alert-error"></div>
		      <input type="text" placeholder="NIC no" name="nic_no" required />
		      <input type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
		      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
		      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
		      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
		      <input type="submit" value="Log In" name="log in" class="btn btn-block btn-primary" onclick="location.href='login.php';" />
		     
		    </form>
		    <?php 
		        if (isset($_POST['register'])) { 
		           $nic_no = $_POST['nic_no'];
		           $email = $_POST['email'];
		           $password= $_POST['password'];
		           $cpassword = $_POST['confirmpassword'];
		           if($password==$cpassword){
		            $query= "select * from user WHERE email='$email'";
		            $query_run=mysqli_query($con,$query);
		            if (mysqli_num_rows($query_run)>0) {
		               echo '<script type ="text/javascript"> alert("User already use that email... try another ") </script>';
		            }
		            else {
		              $hash = sha1($password);
		              $query="insert into user (nic_no,email,password) values ('$nic_no','$email','$hash')";
		              $query_run = mysqli_query($con,$query);
		              if ($query_run) {
		             		 header('location:login.php');
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