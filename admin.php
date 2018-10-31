<?php  
  session_start(); 
  $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'online_registration_system'); 

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
        </style>
  </head> 
  <body style="color:white;">
          <center class="head">
            <h1>Student Management</h1>
          </center>

    <div class="container">

           
                   <?php 
                         
                        $query1= "select * from students WHERE course='B.Sc(Special) Degree in Sport Sciences & Management'";
                        $qurey_run1= mysqli_query($con,$query1);
                        $option1 = '';
                        while($row = mysqli_fetch_array($qurey_run1,MYSQLI_ASSOC)){
                            $option1 .= '<option value ='.$row['id'].'>'.$row['id'].'</option>';
                           /*$option1 .= '<option value = "'."20/AS/SS/".$row['id']." | ".$row['name_with_initial'].'">'."20/AS/SS/".$row['id']." | ".$row['name_with_initial'].'</option>';*/
                                    }

                        $query2="select * from students WHERE course='B.Sc(Special) Degree in Phyaical Education (PED)'";
                        $qurey_run2= mysqli_query($con,$query2);
                        $option2 = '';
                        while($row = mysqli_fetch_array($qurey_run2,MYSQLI_ASSOC)){
                            $option2 .= '<option value ='.$row['id'].'>'.$row['id'].'</option>';
                            /*$option2 .= '<option value = "'."20/AS/SS/".$row['id']." | ".$row['name_with_initial'].'">'."20/AS/SS/".$row['id']." | ".$row['name_with_initial'].'</option>';*/
                                    }

                        $query3="select * from students WHERE course='Both SSM & PED'";
                        $qurey_run3= mysqli_query($con,$query3);
                        $option3 = '';
                        while($row = mysqli_fetch_array($qurey_run3,MYSQLI_ASSOC)){
                            $option3 .= '<option value ='.$row['id'].'>'.$row['id'].'</option>';
                            /* $option3 .= '<option value = "'."20/AS/SS/".$row['id']." | ".$row['name_with_initial'].'">'."20/AS/SS/".$row['id']." | ".$row['name_with_initial'].'</option>';*/
                                    }
                                     
                    ?>

                    <?php 
            if(isset($_POST['submit'])){
             $course=$_POST['course'];
             $query="select * from students WHERE course='$course'";
             $qurey_run=mysqli_query($con,$query) or die('error getting');
             $option1 = '';
                 while($row = mysqli_fetch_array($qurey_run,MYSQLI_ASSOC)){
                    $option1 .= '<option value ='.$row['id'].'>'.$row['id'].'</option>';
                }
            }
        ?>
        <div class="row">
          <div class="column" >
               <form action="" method="post">
                <div class="form-group">
                  <!-- <label><h3>Select Registered Course:</h3></label> -->
                   <select name="course" id="course" required>
                                    <option value="B.Sc(Special) Degree in Sport Sciences & Management">B.Sc(Special) Degree in Sport Sciences & Management</option>
                                    <option value="B.Sc(Special) Degree in Phyaical Education (PED)">B.Sc(Special) Degree in Phyaical Education (PED)</option>
                                    <option value="Both SSM & PED">Both SSM & PED</option>
                   </select>  
                </div>

              <input type="submit" name="submit" value="Select Course/s Apply" class="btn btn-primary btn-block">
            </form>
          </div>
          <div class="column">
            <form action="" method="post">
                <div class="form-group">
                  <!-- <br><label><h3>Select Student That registered for The Examination:</h3></label> -->
                   <select name="id"> <?php echo $option1; ?> </select>    
                </div>

                <input type="submit" name="sbt" value="Select student" class="btn btn-primary btn-block">
              </form>

            
          </div>
        </div>
       

        

        <?php 
            echo"<table>";
            if(isset($_POST['sbt'])){
             $id=$_POST['id'];
             $query="select * from students WHERE id='$id'";
             $qurey_run=mysqli_query($con,$query) or die('error getting');
             $option1 = '';
                 while($row = mysqli_fetch_array($qurey_run,MYSQLI_ASSOC)){
                  $name_with_initial=$row['name_with_initial'];
                  $distric=$row['distric'];
                  $mobile=$row['mobile'];
                  $name_with_initial=$row['name_with_initial'];
                  
                        echo "<tr><th>ID</th><th>";
                   if ($course='B.Sc(Special) Degree in Sport Sciences & Management') {
                         echo "20/AS/SM/".$row['id'];
                  }
                  else if ($course='B.Sc(Special) Degree in Phyaical Education (PED)') {
                        echo "20/AS/PE/".$row['id'];
                  }
                   else{
                    echo "20/AS/SMPE/".$row['id'];
                   }
                       
                        echo "</th><tr><td>Course Apply</td><td>";
                        echo $row['course'];
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

                        echo "<h2>Result of the G.C.E.(A/L) Examination:<h2>";
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

                         echo "<br><h2>Result of the G.C.E.(O/L) Examination:<h2>";
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
                        echo $row['OL_english_examination_year'];
                        echo "</td><td>";
                        echo $row['OL_english_index_no'];
                        echo "</td></tr>";
                        echo "</table>";

                        echo "<br>attached Document:";

                        $id=$_POST['id'];
         
                      if (isset($_POST['select'])) {
                        $query="select * from students WHERE id='$id'";
                        $query_run = mysqli_query($con,$query);
                          if ($query_run) { 
                            if($course='B.Sc(Special) Degree in Sport Sciences & Management'){
                            $quety1="insert into ssm (name_with_initial,full_name,district,mobile,email) values ('$name_with_initial','$full_name','$distric','$mobile','$email')";
                          }
                            /*echo '<script type ="text/javascript"> alert("Success!") </script>';
                             header('location:review.php');*/
                            }
                            else{
                                       echo '<script type ="text/javascript"> alert("Error!") </script>';
                                    }
                      }
                       
                        
         ?>
         <table>
          <tr>
            <th>Attched document</th><th>Document</th><th>Condition</th><th>Comment</th>
          </tr>
          <tr>
            <td>Payment voucher</td>
            <td > 
                  <button onclick="myFunction()" class="btn btn-block btn-primary" >Click</button>
                  <script>
                  function myFunction() {
                      window.open("file1.php");
                  }
                  </script>
            </td>
            <td>
               <label class="radio-inline"><input type="radio" name="ok" >   OK</label>
               <label class="radio-inline"><input type="radio" name="not_ok">    NOT OK</label>
            </td>
            <td>
              <textarea class="form-control" rows="5" id="comment" name="textarea" title="comment feedback about document"></textarea>
            </td>
         </tr>

         <tr>
            <td>Bank paying receipt</td>
            <td> <button onclick="myFunction1()" class="btn btn-block btn-primary" >Click</button>
                  <script>
                  function myFunction1() {
                      window.open("file2.php");
                  }
                  </script></td>
            <td>
               <label class="radio-inline"><input type="radio" name="ok" >   OK</label>
               <label class="radio-inline"><input type="radio" name="not_ok ">    NOT OK</label>
            </td>
            <td>
              <textarea class="form-control" rows="5" id="comment" name="textarea" title="comment feedback about document"></textarea>
            </td>
         </tr>

         <tr>
            <td>Certificate copy of G.C.E(A/L) Certificate</td>
            <td> <button onclick="myFunction2()" class="btn btn-block btn-primary" >Click</button>
                  <script>
                  function myFunction2() {
                      window.open("file3.php");
                  }
                  </script>
            </td>
            <td>
               <label class="radio-inline"><input type="radio" name="condition" >   OK</label>
               <label class="radio-inline"><input type="radio" name="condition">    NOT OK</label>
            </td>
            <td>
              <textarea class="form-control" rows="5" id="comment" name="textarea" title="comment feedback about document"></textarea>
            </td>
         </tr>

         <tr>
            <td>Certificate copy of G.C.E(O/L)Certificate</td>
            <td> <button onclick="myFunction4()" class="btn btn-block btn-primary" >Click</button>
                  <script>
                  function myFunction4() {
                      window.open("file4.php");
                  }
                  </script>
            </td>
            <td>
               <label class="radio-inline"><input type="radio" name="condition" >   OK</label>
               <label class="radio-inline"><input type="radio" name="condition">    NOT OK</label>
            </td>
            <td>
              <textarea class="form-control" rows="5" id="comment" name="textarea" title="comment feedback about document"></textarea>
            </td>
         </tr>

         <tr>
            <td>If any affidavit</td>
            <td> <button onclick="myFunction5()" class="btn btn-block btn-primary" >Click</button>
                  <script>
                  function myFunction5() {
                      window.open("file5.php");
                  }
                  </script>
            </td>
            <td>
               <label class="radio-inline"><input type="radio" name="condition" >   OK</label>
               <label class="radio-inline"><input type="radio" name="condition">    NOT OK</label>
            </td>
            <td>
              <textarea class="form-control" rows="5" id="comment" name="textarea" title="comment feedback about document"></textarea>
            </td>
         </tr>

         <tr>
            <td>If any certificate</td>
            <td><button onclick="myFunction6()" class="btn btn-block btn-primary" >Click</button>
                  <script>
                  function myFunction6() {
                      window.open("file6.php");
                  }
                  </script>
            </td>
            <td>
               <label class="radio-inline"><input type="radio" name="condition" >   OK</label>
               <label class="radio-inline"><input type="radio" name="condition">    NOT OK</label>
            </td>
            <td>
              <textarea class="form-control" rows="5" id="comment" name="textarea" title="comment feedback about document"></textarea>
            </td>
         </tr>
         </table>

          <br><br>
          
            <form method="post">
              <div class="container-contact3-form-btn">
              <button  name="select" class="btn btn-primary">Select</button>
              <button  name="reject" class="btn btn-primary">Reject</button>
              <button  name="shedule" class="btn btn-primary">Shedule</button>
              
        </div>
            </form>
          
        <br><br>
          <?php }}
          
          
           ?>
          
  </body>
</html>