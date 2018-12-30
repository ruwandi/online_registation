<?php 
session_start(); 
  $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'online_registration_system'); 

$id=$_SESSION['id'];
$name3=$_SESSION['name3'];
$query="select * from students WHERE id='$id'";
 $qurey_run=mysqli_query($con,$query) or die('error getting');

 while($row = mysqli_fetch_array($qurey_run,MYSQLI_ASSOC)){
     
?>
  
<html>
<head>
  <title>Certificate copy of G.C.E(A/L) Certificate</title>
    
    <style>
     body{
              background: #0f2439;
             padding: 10px;
              
            }
           
            img{
              margin-left: 100px;
              width:1100px;
              border: solid;
              margin-top: 10px;
      }
          </style>
      </head>
      <body>
        <div class="container">
          <div class="file" >
            <?php echo "<img src='uploads/".$name3."'>"; } ?>
            </table>
            

          </div>    
      </div>
      </body>
      </html>

