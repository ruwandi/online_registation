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
  font-size: 15px;
}
.img{
	margin-left: 550px;
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
				<h2>FOR THE</h2>
				<h2 >SABARAGAMUWA UNIVERSITY OF SRI LANKA (SUSL) </h2>
				<h2> UNIVERSITY ADMISSIONS FOR THE ACADEMIC YEAR 2018/2019 </h2>
			    <hr>
			    <br>
			    <button class="button " onclick="location.href='login.php';">Register Now</button>
			  </div>
		 </div>
		    
		  

	</body>
	</html>