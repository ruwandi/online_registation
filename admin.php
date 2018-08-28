<?php  
  $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'mini_project'); 
?>
<html lang="en">
  <head>
      <title></title>
        <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="home.css" type="text/css">
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <style>
            body{
              background:url('http://clevertechie.com/img/bnet-bg.jpg') #0f2439;
            }
            .row{
              padding: 50px;

            }
            .col-md-4{
              background-color:#ccd9ff;
              padding-right: 5px;
            }
        </style>
  </head> 
  <body>
      
       
          <center style="color:white;">
            <h1>Sabaragamuwa University of Sri Lanka</h1>
            <h2>Application Form</h2>
            <h3>UNIVERSITY ADMISSION- ACADEMIC YEAR 2017/2018</h3>
          </center>
          
          <div class="container-fluid">
             <div class="row">
                <div class="col-md-4">
                    <?php 
                    echo"<table>";
                    echo "<tr><th> <h1>Registered Student</h1></th></tr>";
                      $query="select * from student";
                      $qurey_run= mysqli_query($con,$query);
                      while($row = mysqli_fetch_array($qurey_run,MYSQLI_ASSOC)){
                        echo "<tr><td>";
                        echo $row['name_with_initial'];
                        echo "</td></tr>";
                        }
                    echo "</table>";
                     ?>
                </div>
                <div class="col-md-8">
                     <?php 
                    echo"<table>";
                    echo "<tr><th>RegistedStudent</th></tr>";
                      $query="select * from student";
                      $qurey_run= mysqli_query($con,$query);
                      while($row = mysqli_fetch_array($qurey_run,MYSQLI_ASSOC)){
                        echo "<tr><td>";
                        echo $row['name_with_initial'];
                        echo "</td></tr>";
                        }
                    echo "</table>";
                     ?>
                </div>
             </div>
         </div>
    </body>
</html>