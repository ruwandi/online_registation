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
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <style>
            body{
              background: #0f2439;
            }
            
            center{
              padding-top: 50px;
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
              width:900px;
            }
        </style>
  </head> 
  <body style="color:white;">
    <div class="container">
           <center style="color:white;">
            <h1>Student Management</h1>
        </center>

                   <?php 
                                  
                        $query="select * from student";
                        $qurey_run= mysqli_query($con,$query);
                        $option = '';
                        while($row = mysqli_fetch_array($qurey_run,MYSQLI_ASSOC)){
                        $option .= '<option value = "'.$row['name_with_initial'].'">'.$row['name_with_initial'].'</option>';
                                    }
                                     
                    ?>

        <form action="" method="post">
          <div class="form-group">
            <label><h3>Select Registered Name:</h3></label>
              <select name="name-with-initial">
                         <?php echo $option; ?>
              </select> 
          </div>

          <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
        </form>

        <?php 
          echo"<table>";
            if(isset($_POST['submit'])){
             $name_with_initial=$_POST['name-with-initial'];
             
             $query="select * from student WHERE name_with_initial='$name_with_initial'";
              $qurey_run=mysqli_query($con,$query) or die('error getting');

                while($row = mysqli_fetch_array($qurey_run,MYSQLI_ASSOC)){
                        echo "<tr><th>ID</th><th>";
                        echo "20/AS/SS/".$row['id'];
                        echo "</th><tr><td>Course Apply</td><td>";
                        echo $row['course_apply'];
                        echo "</td></tr><tr><td>Name with initial</td><td>";
                        echo $row['name_with_initial'];
                        echo "</td></tr><tr><td>Full name</td><td>";
                        echo $row['full_name'];
                        echo "</td></tr><tr><td>Address</td><td>";
                        echo $row['adress'];
                        echo "</td></tr><tr><td>NIC_No</td><td>";
                        echo $row['nic_no'];
                        echo "</td></tr><tr><td>District</td><td>";
                        echo $row['distric'];
                        echo "</td></tr><tr><td>Mobile No</td><td>";
                        echo $row['mobile'];
                        echo "</td></tr><tr><td>Gender</td><td>";
                        echo $row['gender'];
                        echo "</td></tr>";
                        echo "</table>";
                        echo "<br><br>";

                        echo "<h2>Result of the G.C.E.(A/L) Examination 2010:<h2>";
                        echo "<table>";
                        echo "<tr><th>Index No(A/L)</th><th>";
                        echo $row['index_no'];
                        echo "</th><tr><td>Z-Score</td><td>";
                        echo $row['zscore'];
                        echo "</td></tr><tr><td>Genaral Test Mark</td><td>";
                        echo $row['genaral_test_marks'];
                        echo "</td></tr>";
                        echo "</table>";

                       echo "<table>";
                        echo "<tr><th>No</th><th>Subject</th><th>Grade</th></tr>";
                        echo "<tr><td>1</td><td>";
                        echo $row['sub1'];
                        echo "</td><td>";
                        echo $row['grade1'];
                        echo "</td></tr><tr><td>2</td><td>";
                         echo $row['sub2'];
                        echo "</td><td>";
                        echo $row['grade2'];
                        echo "</td></tr><tr><td>3</td><td>";
                         echo $row['sub3'];
                        echo "</td><td>";
                        echo $row['grade3'];
                        echo "</td></tr>";
                        echo "</table>";

                         echo "<br><h2>Result of the G.C.E.(O/L) Examination 2014:<h2>";
                        echo "<table>";
                        echo "<tr><th>No</th><th>Subject</th><th>Grade</th><th>Examination Year</th><th>Index No</th></tr><tr><td>1</td><td>Mathematics</td><td>";
                        echo $row['OL_maths_grade'];
                        echo "</td><td>";
                        echo $row['OL_maths_examination_year'];
                        echo "</td><td>";
                        echo $row['OL_maths_index_no'];
                        echo "</td></tr><tr><td>2</td><td>English Language</td><td>";
                        echo $row['OL_english_grade'];
                        echo "</td><td>";
                        echo $row['OL_englishexamination_year'];
                        echo "</td><td>";
                        echo $row['OL_english_index_no'];
                        echo "</td></tr>";
                        echo "</table>";

                        echo "<br>attached Document:";
                        echo "<table>";
                        echo "<tr><th>Payment voucher</th><th>";
                        echo "<img src='uploads/".$row['filename1']."'>";
                        echo "</th></tr><tr><td>Bank paying receipt</td><td>";
                        echo "<img src='uploads/".$row['filename2']."'>";
                        echo "</td></tr><tr><td>Certificate copy of G.C.E(A/L) 2014 Certificate</td><td>";
                        echo "<img src='uploads/".$row['filename3']."'>";
                        echo "</td></tr><tr><td>Certificate copy of G.C.E(O/L) 2010 Certificate</td><td>";
                        echo "<img src='uploads/".$row['filename4']."'>";
                        echo "</td></tr><tr><td>If any affidavit </td><td>";
                        echo "<img src='uploads/".$row['filename5']."'>";
                        echo "</table>";
                        }
            

           }
         ?>
    </div> 
  </body>
</html>