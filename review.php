<?php  
session_start();
  $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'online_registration_system'); 

          
          $course=$_SESSION['course'];  
          $name_with_initial=$_SESSION['name_with_initial'] ;
          $full_name=$_SESSION['full_name'];
          $email=$_SESSION['email'];
          $adress=$_SESSION['adress'];
          $nic_no=$_SESSION['nic_no'];
          $distric=$_SESSION['distric'];
          $mobile=$_SESSION['mobile'];
          $gender=$_SESSION['gender'];
          $index_no=$_SESSION['index_no'];
          $zscore=$_SESSION['zscore'];
          $genaral_test_marks=$_SESSION['genaral_test_marks'];
          $sub1=$_SESSION['sub1'];
          $grade1=$_SESSION['grade1'];
          $sub2=$_SESSION['sub2'];
          $grade2=$_SESSION['grade2'];
          $sub3=$_SESSION['sub3'];
          $grade3=$_SESSION['grade3'];
          $OL_maths_grade=$_SESSION['OL_maths_grade'];
          $OL_maths_examination_year=$_SESSION['OL_maths_examination_year'];
          $OL_maths_index_no=$_SESSION['OL_maths_index_no'];
          $OL_english_grade=$_SESSION['OL_english_grade'];
          $OL_englishexamination_year=$_SESSION['OL_englishexamination_year'];
          $OL_english_index_no=$_SESSION['OL_english_index_no'];

          $name1=$_SESSION['filename1'];
          $tmp_name1=$_SESSION['tmp_name1'];
          $location1=$_SESSION['location1'];

          $name2=$_SESSION['filename2'];
          $tmp_name2=$_SESSION['tmp_name2'];
          $location2=$_SESSION['location2'];

          $name3=$_SESSION['filename3'];
          $tmp_name3=$_SESSION['tmp_name3'];
          $location3=$_SESSION['location3'];

          $name4=$_SESSION['filename4'];
          $tmp_name4=$_SESSION['tmp_name4'];
          $location4=$_SESSION['location4'];

          $name5=$_SESSION['filename5'];
          $tmp_name5=$_SESSION['tmp_name5'];
          $location5=$_SESSION['location5'];
          

          $name6=$_SESSION['filename6'];
          $tmp_name6=$_SESSION['tmp_name6'];
          $location6=$_SESSION['location6'];

          $name7=$_SESSION['filename7'];
          $tmp_name7=$_SESSION['tmp_name7'];
          $location7=$_SESSION['location7'];

          $textarea=$_SESSION['textarea'];
          
          
          $query="select * from students WHERE nic_no='$nic_no'";
             $qurey_run=mysqli_query($con,$query) or die('error getting');
              while($row = mysqli_fetch_array($qurey_run,MYSQLI_ASSOC)){
                        echo"<table>";
                        echo "<tr><th>Course Apply</th><th>";
                        echo $course;
                        echo "</th></tr><tr><td>Name with initial</td><td>";
                        echo $name_with_initial;
                        echo "</td></tr><tr><td>Full name</td><td>";
                        echo $full_name;
                        echo "</td></tr><tr><td>Email</td><td>";
                        echo $email;
                        echo "</td></tr><tr><td>Address</td><td>";
                        echo $adress;
                        echo "</td></tr><tr><td>NIC_No</td><td>";
                        echo $nic_no;
                        echo "</td></tr><tr><td>District</td><td>";
                        echo $distric;
                        echo "</td></tr><tr><td>Mobile No</td><td>";
                        echo $mobile;
                        echo "</td></tr><tr><td>Gender</td><td>";
                        echo $gender;
                        echo "</td></tr>";
                        echo "</table>";
                        echo "<br><br>";

                        echo "<h2>Result of the G.C.E.(A/L) Examination:<h2>";
                        echo "<table>";
                        echo "<tr><th>Index No(A/L)</th><th>";
                        echo $index_no;
                        echo "</th><tr><td>Z-Score</td><td>";
                        echo $zscore;
                        echo "</td></tr><tr><td>Genaral Test Mark</td><td>";
                        echo $genaral_test_marks;
                        echo "</td></tr>";
                        echo "</table>";

                       echo "<table>";
                        echo "<tr><th>No</th><th>Subject</th><th>Grade</th></tr>";
                        echo "<tr><td>1</td><td>";
                        echo $sub1;
                        echo "</td><td>";
                        echo $grade1;
                        echo "</td></tr><tr><td>2</td><td>";
                         echo $sub2;
                        echo "</td><td>";
                        echo $grade2;
                        echo "</td></tr><tr><td>3</td><td>";
                         echo $sub3;
                        echo "</td><td>";
                        echo $grade3;
                        echo "</td></tr>";
                        echo "</table>";

                         echo "<br><h2>Result of the G.C.E.(O/L) Examination:<h2>";
                        echo "<table>";
                        echo "<tr><th>No</th><th>Subject</th><th>Grade</th><th>Examination Year</th><th>Index No</th></tr><tr><td>1</td><td>Mathematics</td><td>";
                        echo $OL_maths_grade;
                        echo "</td><td>";
                        echo $OL_maths_examination_year;
                        echo "</td><td>";
                        echo $OL_maths_index_no;
                        echo "</td></tr><tr><td>2</td><td>English Language</td><td>";
                        echo $OL_english_grade;
                        echo "</td><td>";
                        echo $OL_englishexamination_year;
                        echo "</td><td>";
                        echo $OL_english_index_no;
                        echo "</td></tr>";
                        echo "</table>";


                        echo "<br>attached Document:";
                        echo "<table>";
                        echo "<tr><th>Payment voucher</th><th>";
                        echo "<img src='uploads/".$name1."'>";
                        echo "</th></tr><tr><td>Bank paying receipt</td><td>";
                        echo "<img src='uploads/".$name2."'>";
                        echo "</td></tr><tr><td>Certificate copy of G.C.E(A/L)Certificate </td><td>";
                        echo "<img src='uploads/".$name3."'>";
                        echo "</td></tr><tr><td>Certificate copy of G.C.E(O/L)Certificate for Mathematics</td><td>";
                        echo "<img src='uploads/".$name4."'>";
                        echo "</td></tr><tr><td>Certificate copy of G.C.E(O/L)Certificate for English Language</td><td>";
                        echo "<img src='uploads/".$name5."'>";
                        echo "</td></tr><tr><td>If any affidavit </td><td>";
                        echo "<img src='uploads/".$name6."'>";
                        echo "</td></tr><tr><td>If any certificate</td><td>";
                        echo "<img src='uploads/".$name7."'>";
                        echo "</td></tr>";
                        echo "</table>";
                        }
            if(isset($_POST['recorrect'])){
              $nic_no=$_SESSION['nic_no'];
              $query="delete from students where nic_no='$nic_no'";
               $query_run = mysqli_query($con,$query);
              if ($query_run) { 
                echo '<script type ="text/javascript"> alert("Success!") </script>';
                 header('location:form.php');
                }
                else{
                           echo '<script type ="text/javascript"> alert("Error!") </script>';
                        }
            }

            if(isset($_POST['submit'])){
              header('location:login.php');
             //email generate with information that successfully registre
              //build email content
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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <style>
            body{
              background: #0f2439;
              margin-right: 200px;
              margin-left: 200px;
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
                margin-left: 50px;
            }
            h1{
              padding-bottom: 15px;
            }
            .container-contact3-form-btn{
              margin-bottom: 40px;
              margin-top: 40px;
            }
        </style>
  </head> 
  <body style="color:white;">
        <form method="post">
            <div class="container-contact3-form-btn">
                <button  name="recorrect" class="btn btn-primary">Edit Information</button>
                <button  name="submit" class="btn btn-primary" onclick="location.href='login.php';">Submit</button>    
          </div>  
        <br><br>
        </form>   
  </body>
</html> 