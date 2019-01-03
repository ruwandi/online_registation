<?php session_start(); ?>
<?php 
          $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'online_registration_system'); 
?>
<?php 
  //check if a user is logged in
  if(!isset($_SESSION['email'])){
    header('Location:admin_login.php');
  }
 ?>
<html lang="en">
  <head>
      <title></title>
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="home.css" type="text/css">
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <style>
            body{
              background: #0f2439;
            }
            
            .head{
              padding-top: 20px;
              background-color:#0066ff;
            }
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                margin-top: 70px;
                font-size: 20px;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #000033;
            }
            img{
              width:450px;
            }
            .column {
                float: left;
                width: 50%;
                padding: 10px;
               
            }
            .row{
                
            }
            .container{
                margin-bottom: 50px;
            }
            h1{
              padding-bottom: 15px;
            }
            .btn-group{
              margin-bottom: 40px;
            }
            .navbar{
              margin-top: 20px;
              margin-left: 10px;
              margin-right: 10px;
              background-color: #1a1a;
              border-radius: 2px;
              border-color: white;

            }
        </style>
  </head> 
  <body style="color:white;">
          <!-- <center class="head">
            <h1>Student Management</h1>
          </center> -->

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Student Management</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="admin.php">Home</a></li>
            <li><a href="ssm.php">SSM</a></li>
            <li><a href="ped.php">PED</a></li>
            <li><a href="smpe.php">SMPE</a></li>
            <li><a href="reject.php">REJECT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
          </ul>
        </div>
      </nav>
    <div class="container">

      <?php            
             $query="select * from ssm";
             $qurey_run=mysqli_query($con,$query) or die('error getting');
                       echo "<table>";
                        echo "<tr><th>S_Id</th><th>Id</th><th>Full Name</th><th>Mobile</th><th>Email</th><th>Distric</th></tr>";
              while($row = mysqli_fetch_array($qurey_run,MYSQLI_ASSOC)){
                        echo "<tr><td>";
                        echo $row['s_id'];
                        echo "</td><td>";
                        echo $row['id_ssm'];
                        echo "</td><td>";
                        echo $row['fullname'];
                        echo "</td><<td>";
                        echo $row['mobile'];
                        echo "</td><td>";
                        echo $row['email'];
                        echo "</td><td>";
                        echo $row['distric'];
                        echo "</td></tr>";

                 }
                echo "</table>";
        ?>
        <br><br>
         <form method="post" id="usrform">
              <div class="container-contact3-form-btn">
              <button  name="reject" class="btn btn-primary">Schedule</button>
              </div>
            </form>
    </div>
          
  </body>
</html>