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
.bgimg {
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
hr {
  margin: auto;
  width: 40%;
}


	    </style>
	</head>
	<body>
		   <div class="nev">
		   	<ul>
			  <li><a href="login.php">Student Login</a></li>
			  <li><a href="home.php">Student Register</a></li>
			  <li><a href="admin_login.php">Admin Login</a></li>
			  <li><a href="admin_register.php">Admin Register</a></li>
			  <li style="float:right"><a class="active" href="welcom.php">Log Out</a></li>
			</ul>
		   </div>
		   <div class="bgimg">
		   		
				<div class="middle">
			    <h1>ONLINE REGISTRATION FOR APTITUDE TEST</h1>
			    <hr>
			  </div>
			</div>
		    
		  

	</body>
	</html>