	<?php
	    session_start();
	    $con= mysqli_connect("localhost","root","")or die("Unable to connect");
	    mysqli_select_db($con,'online_registration_system');		         
	?> 
	<html>
	<head>
		<title>Login Online Registration System</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<!-- <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/> -->
	  	<link rel="stylesheet" href="home.css" type="text/css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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

}
.bgimg {
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 15px;
}
.img{
	margin-left: 650px;
	margin-top: 10px;
	margin-bottom: 10px;
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
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #3333ff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.info{
	background-color:  #111;
	width: 500px;
	height: 30px;
	margin-left: 150px;
}
h2{
	margin-top: 20px;
}

	    </style>
	</head>
	<body>
		   <div class="nev">
		   	<ul> 
			  <li style="float:right"><a class="active" href="welcom.php">Log Out</a></li>
			  <li style="float:right"><a class="active" href="admin_login.php">Admin Login</a></li>
			</ul>
		   </div>
		   
		   <div class="bgimg">
		   	<div class="img">
		   		<img src="susl.png">
		   </div>
		   	<div class="middle">
				
				<h2 >SABARAGAMUWA UNIVERSITY OF SRI LANKA (SUSL)  UNIVERSITY ADMISSIONS FOR THE ACADEMIC YEAR 2018/2019 </h2>
				
			    <hr>
			    <br>
			    <button class="button " onclick="location.href='login.php';">Register Now</button> <br><br>
			    <button type="button" class="btn btn-outline-secondary" onclick="location.href='info.pdf'" target="_blank">Information For Register</button>
			    <!-- <button class="button " onclick="location.href='info.pdf'" target="_blank">Information For Register</button>  -->
			    
			    
			    
			  </div>
		 </div>
		    


	</body>
	</html>