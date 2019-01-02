<?php session_start(); ?>
<?php 
          $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'online_registration_system'); 
?>
<?php 
  //check if a user is logged in
  if(!isset($_SESSION['email'])){
    header('Location:login.php');
  }
 ?>
<?php 
        if(isset($_POST['preview'])){
          
          $course=$_POST['course'];
          $_SESSION['course']=$course; 
       
          $name_with_initial=$_POST['name_with_initial'];
          $_SESSION['name_with_initial']=$name_with_initial; 
          $full_name=$_POST['full_name'];
          $_SESSION['full_name']=$full_name;
          $email=$_POST['email'];
          $_SESSION['email']=$email;
          $adress=$_POST['adress'];
          $_SESSION['adress']=$adress;
          $nic_no=$_POST['nic_no'];
          $_SESSION['nic_no']=$nic_no;
          $distric=$_POST['distric'];
          $_SESSION['distric']=$distric;
          $mobile=$_POST['mobile'];
          $_SESSION['mobile']=$mobile;
          $gender=$_POST['gender'];
          $_SESSION['gender']=$gender;
          $index_no=$_POST['index_no'];
          $_SESSION['index_no']=$index_no;
          $zscore=$_POST['zscore'];
          $_SESSION['zscore']=$zscore;
          $genaral_test_marks=$_POST['genaral_test_marks'];
          $_SESSION['genaral_test_marks']=$genaral_test_marks;
          $sub1=$_POST['sub1'];
          $_SESSION['sub1']=$sub1;
          $grade1=$_POST['grade1'];
          $_SESSION['grade1']=$grade1;
          $sub2=$_POST['sub2'];
          $_SESSION['sub2']=$sub2;
          $grade2=$_POST['grade2'];
          $_SESSION['grade2']=$grade2;
          $sub3=$_POST['sub3'];
          $_SESSION['sub3']=$sub3;
          $grade3=$_POST['grade3'];
          $_SESSION['grade3']=$grade3;
          $OL_maths_grade=$_POST['OL_maths_grade'];
          $_SESSION['OL_maths_grade']=$OL_maths_grade;
          $OL_maths_examination_year=$_POST['OL_maths_examination_year'];
          $_SESSION['OL_maths_examination_year']=$OL_maths_examination_year;
          $OL_maths_index_no=$_POST['OL_maths_index_no'];
          $_SESSION['OL_maths_index_no']=$OL_maths_index_no;
          $OL_english_grade=$_POST['OL_english_grade'];
          $_SESSION['OL_english_grade']=$OL_english_grade;
          $OL_englishexamination_year=$_POST['OL_englishexamination_year'];
          $_SESSION['OL_englishexamination_year']=$OL_englishexamination_year;
          $OL_english_index_no=$_POST['OL_english_index_no'];
          $_SESSION['OL_english_index_no']=$OL_english_index_no;
          $textarea=$_POST['textarea'];
          $_SESSION['textarea']=$textarea;
          
           $name1=$_FILES['filename1']['name'];
           $_SESSION['filename1']=$name1;
           $tmp_name1=$_FILES['filename1']['tmp_name'];
           $_SESSION['tmp_name1']=$tmp_name1;
           $location1="uploads/";
           $_SESSION['location1']=$location1;
           $name2=$_FILES['filename2']['name'];
           $_SESSION['filename2']=$name2;
           $tmp_name2=$_FILES['filename2']['tmp_name'];
           $_SESSION['tmp_name2']=$tmp_name2;
           $location2="uploads/";
           $_SESSION['location2']=$location2;
           $name3=$_FILES['filename3']['name'];
           $_SESSION['filename3']=$name3;
           $tmp_name3=$_FILES['filename3']['tmp_name'];
           $_SESSION['tmp_name3']=$tmp_name3;
           $location3="uploads/";
           $_SESSION['location3']=$location3;
           $name4=$_FILES['filename4']['name'];
           $_SESSION['filename4']=$name4;
           $tmp_name4=$_FILES['filename4']['tmp_name'];
           $_SESSION['tmp_name4']=$tmp_name4;
           $location4="uploads/";
           $_SESSION['location4']=$location4;
           $name5=$_FILES['filename5']['name'];
           $_SESSION['filename5']=$name5;
           $tmp_name5=$_FILES['filename5']['tmp_name'];
           $_SESSION['tmp_name5']=$tmp_name5;
           $location5="uploads/"; 
           $_SESSION['location5']=$location5;
           
           $name6=$_FILES['filename6']['name'];
           $_SESSION['filename6']=$name6;
           $tmp_name6=$_FILES['filename6']['tmp_name'];
           $_SESSION['tmp_name6']=$tmp_name6;
           $location6="uploads/";
           $_SESSION['location6']=$location6;
           $name7=$_FILES['filename7']['name'];
           $_SESSION['filename7']=$name7;
           $tmp_name7=$_FILES['filename7']['tmp_name'];
           $_SESSION['tmp_name7']=$tmp_name7;
           $location7="uploads/";
           $_SESSION['location7']=$location7;
           //multiple file upload
          /*for($i = 0;$i<count($name6);$i++){
            $name6=$_FILES['filename6']['name'][$i];
            $_SESSION['filename6']=$name6;
            $tmp_name6=$_FILES['filename6']['tmp_name'][$i];
            $_SESSION['tmp_name6']=$tmp_name6;
            if($tmp_name6 != ""){
              $upload_file6=move_uploaded_file($tmp_name6, $location6.$name6);
            }
          }*/
            $upload_file1=move_uploaded_file($tmp_name1, $location1.$name1);
            $upload_file2=move_uploaded_file($tmp_name2, $location2.$name2);
            $upload_file3=move_uploaded_file($tmp_name3, $location3.$name3);
            $upload_file4=move_uploaded_file($tmp_name4, $location4.$name4);
            $upload_file5=move_uploaded_file($tmp_name5, $location5.$name5);
            $upload_file6=move_uploaded_file($tmp_name6, $location6.$name6);
            $upload_file7=move_uploaded_file($tmp_name7, $location7.$name7);
            
            $query="insert into students (courase,name_with_initial,full_name,email,address,nic_no,distric,mobile,gender,index_no,zscore,genaral_test_marks,sub1,grade1,sub2,grade2,sub3,grade3,OL_maths_grade,OL_maths_examination_year,OL_maths_index_no,OL_english_grade,OL_english_examination_year,OL_english_index_no,textarea,name1,name2,name3,name4,name5,name6,name7) values ('$course','$name_with_initial','$full_name','$email','$adress','$nic_no','$distric','$mobile','$gender','$index_no','$zscore','$genaral_test_marks','$sub1','$grade1','$sub2','$grade2','$sub3','$grade3','$OL_maths_grade','$OL_maths_examination_year','$OL_maths_index_no','$OL_english_grade','$OL_englishexamination_year','$OL_english_index_no','$textarea','$name1','$name2','$name3','$name4','$name5','$name6','$name7')";
            //$query="insert into students (course,name_with_initial,full_name,email,adress,nic_no,distric,mobile,gender,index_no,zscore,genaral_test_marks,sub1,grade1,sub2,grade2,sub3,grade3,OL_maths_grade,OL_maths_examination_year,OL_maths_index_no,OL_english_grade,OL_english_examination_year,OL_english_index_no,textarea) values ('$course','$name_with_initial','$full_name','$email','$adress','$nic_no','$distric','$mobile','$gender','$index_no','$zscore','$genaral_test_marks','$sub1','$grade1','$sub2','$grade2','$sub3','$grade3','$OL_maths_grade','$OL_maths_examination_year','$OL_maths_index_no','$OL_english_grade','$OL_englishexamination_year','$OL_english_index_no','$textarea')";
            
              
              $query_run = mysqli_query($con,$query);
              if ($query_run) { 
                echo '<script type ="text/javascript"> alert("Success!") </script>';
                header('location:review.php');
                }
                else{
                           echo '<script type ="text/javascript"> alert("Error!") </script>';
                        }
          
                 
          } 
           
                
?> 
<html>
  <head>
      <title></title>
        <link rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="home.css" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <style>
            
              th{
                padding-right: 20px;
                margin-top: 10px;
              }
              td{
                padding-right: 20px;
                margin-top: 10px;
              }
              select {
                padding-bottom: 3px;
              }
              label{
                font-size: large;
              }
              a {
                  text-decoration: none;
                  display: inline-block;
                  padding: 8px 16px;
              }
              select{
              }
              a:hover {
                  background-color: #ddd;
                  color: black;
              }
              .previous {
                  background-color: #f1f1f1;
                  color: black;
              }
              .next {
                  background-color: rgb(0, 0, 0);
                  color: white;
              }
              .round {
                  border-radius: 50%;
              }
              .bg-contact3 {
                width: 100%;  
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
              }
              .container-contact3 {
              width: 100%;  
              min-height: 100vh;
              display: -webkit-box;
              display: -webkit-flex;
              display: -moz-box;
              display: -ms-flexbox;
              display: flex;
              flex-wrap: wrap;
              justify-content: center;
              align-items: center;
              padding: 15px;
              background: rgba(255,255,255,0.2);
              
            }
              .container{
             width: 800px;
             margin-left: 50px;
            /* background: #80c64a;
            background: -webkit-linear-gradient(45deg, #56ab2f, #a8e063);
            background: -o-linear-gradient(45deg, #56ab2f, #a8e063);
            background: -moz-linear-gradient(45deg, #56ab2f, #a8e063);
            background: linear-gradient(45deg, #56ab2f, #a8e063);*/
            background-color: #0f2439;
            border-radius: 10px;
            overflow: hidden;
            padding: 72px 55px 65px 55px;
            }
            .head{
              display: block;
            font-family: Poppins-Bold;
            font-size: 39px;
            color: #fff;
            line-height: 1.2;
            text-align: center;
            text-transform: uppercase;
            padding-bottom: 30px;
            }
            .form-control{
               display: block;
              width: 100%;
              background: transparent;
              font-family: Poppins-Regular;
              font-size: 15px;
              color: #fff;
              line-height: 1.2;
              padding: 0 5px;
            }
           
            .form-control:focus + .focus-input3::before {
              width: 100%;
            }
            .focus-input3 {
                position: absolute;
                display: block;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
              }
            .focus-input3::before {
              content: "";
              display: block;
              position: absolute;
              bottom: -2px;
              left: 0;
              width: 0;
              height: 2px;
              -webkit-transition: all 0.4s;
              -o-transition: all 0.4s;
              -moz-transition: all 0.4s;
              transition: all 0.4s;
              background: #fff;
            }
            .container-contact3-form-btn {
              padding-top: 23px;
            }
            .contact3-form-btn {
              font-family: Poppins-Medium;
              font-size: 16px;
              color: #555555;
              line-height: 1.2;
              text-transform: uppercase;
              display: -webkit-box;
              display: -webkit-flex;
              display: -moz-box;
              display: -ms-flexbox;
              display: flex;
              justify-content: center;
              align-items: center;
              padding: 0 15px;
              min-width: 120px;
              height: 50px;
              border-radius: 2px;
              position: relative;
              z-index: 1;
              background: #80c64a;
              background: -webkit-linear-gradient(-135deg, #56ab2f, #a8e063);
              background: -o-linear-gradient(-135deg, #56ab2f, #a8e063);
              background: -moz-linear-gradient(-135deg, #56ab2f, #a8e063);
              background: linear-gradient(-135deg, #56ab2f, #a8e063);
              -webkit-transition: all 0.4s;
              -o-transition: all 0.4s;
              -moz-transition: all 0.4s;
              transition: all 0.4s;
            }
            .contact3-form-btn::before {
              content: "";
              display: block;                                                              
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
     </style>
  </head>
  <body style="color:white; background-color:#668cff;">
    <!-- nav bar -->
    <div class="nev">
        <ul>
        <li><a href="login.php">Student Login</a></li>
        <li><a href="home.php">Student Register</a></li>
        <li><a href="admin_login.php">Admin Login</a></li>
        <li style="float:right"><a class="active" href="logout.php">Log Out</a></li>
      </ul>
      </div>
      
    <div class="bg-contact3" style="background-image: url('01.jpg');">
     <div class="container-contact3">
      <div class="container">
          <center class="head">
            <h2>Application Form</h2>
            </center>

          <form  method="POST" enctype="multipart/form-data" enctype="multipart/form-data" >
                <div class="form-group">
                  <label for="course-apply">01.Course/s Apply:</label><br>
                    <select name="course" id="course" required>
                              <option value=""></option>
                              <option value="B.Sc(Special) Degree in Sport Sciences & Management">B.Sc (Special) Degree in Sport Sciences & Management (SSM)</option>
                              <option value="B.Sc(Special) Degree in Phyaical Education (PED)">B.Sc (Special) Degree in Phyaical Education (PED)</option>
                              <option value="Both SSM & PED">Both SSM & PED</option>
                    </select>
                   
                   </div>  
                <div class="form-group">
                  <div class="wrap-input3 validate-input">
                    <label for="name-with-initial">02.Name with initial [IN BLOCK LATTERS]:</label>
                       <input type="text" name="name_with_initial" pattern="[A-Z].{1,50}"  class="form-control" placeholder="Name with initial [IN BLOCK LATTERS]" required>
                  </div>      
                </div>

                <div class="form-group">
                  <div class="wrap-input3 validate-input">
                    <label for="full-name">03.Full name of the Applicant [IN BLOCK LATTERS]:</label>
                      <input type="text" name="full_name" class="form-control" pattern="[A-Z].{1,50}"  class="form-control" placeholder="Full Name  [IN BLOCK LATTERS]" required>
                  </div>     
                </div> 

                <div class="form-group">
                  <div class="wrap-input3 validate-input">
                    <label for="full-name">04.Email:</label>
                      <input type="email" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
                  </div>     
                </div> 

                          

               <div class="form-group">
                  <div class="wrap-input3 validate-input" data-validate="Address is required">
                    <label for="address">05.Permanent Address:</label>
                      <input type="text" name="adress" class="form-control" id="usr" placeholder="Permanent Address"  required>
                  </div>     
                </div>

                <div class="form-group">
                  <div class="wrap-input3 validate-input" data-validate="ID card is requireds">
                   <label for="nic-no">06.National Identity Card Number:</label>
                      <input type="text" name="nic_no" class="form-control" pattern="[1-9v].{1,20}" id="usr" placeholder="National Identity Card Number" required>
                  </div>      
                </div>
          
                 <div class="form-group">
                   <div class="wrap-input3 validate-input" data-validate="Distric is requireds">
                    <label for="gender">07.District(Residence):</label><br>
                     <input type="text" name="distric" class="form-control" id="usr" placeholder="District(Residence)" required>
                  </div> 
                </div>
            <div class="form-group">
              <div class="wrap-input3 validate-input" data-validate="Contact No is requireds">
                    <label for="contact">08.Contact Telephone No/s:</label><br>
                     <input type="text" name="mobile" class="form-control" pattern="[0-9].{1,20}" title="Please enter valid No"  id="usr" placeholder="Contact Telephone No mobile" required>
                  
                  </div>   
            </div>
                    
       <div class="form-group">     
                <label for="gender">09.Gender:</label><br>
                <label class="radio-inline"><input type="radio" name="gender" value="male" required>Male</label>
                <label class="radio-inline"><input type="radio" name="gender" value="female" required>Female</label>
        </div>
                    
      <div class="form-group">
                      <label for="result">10.Result of the G.C.E.(A/L) Examination:</label><br>
                      <table>
                        <tr>
                          <th>Index No:<input type="text" name="index_no" class="form-control" pattern="[1-9].{1,12}" title="Please enter valid index" id="usr" required></th>
                          <th>Z-Score :<input type="text" name="zscore" class="form-control" pattern="[0-9].{1,5}" title="Please enter valid Z-score" id="usr" required></th>
                          <th>Genaral Test Marks:<input name="genaral_test_marks" type="text" class="form-control" pattern="[1-9].{1,1}" title="Please enter marks"  id="usr" required></th>      
                        </tr>
                      </table>
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Subject</th>
                          <th>Grade</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td><input type="text" name="sub1" class="form-control" pattern="[a-z ].{1,20}" title="Please enter subject name" id="usr" required></td>
                          <td>
                            <select name="grade1" id="course" required>
                              <option value=""></option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td><input type="text" name="sub2" pattern="[a-z].{1,12}" title="Please enter subject name" class="form-control" id="usr" required></td>
                          <td>
                            <select name="grade2" id="course" required>
                              <option value=""></option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td><input type="text" name="sub3" class="form-control" pattern="[a-z].{1,12}" title="Please enter subject name" id="usr" required></td>
                          <td>
                            <select name="grade3" id="course" required>
                              <option value=""></option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                            </td>
                        </tr>
                      </table>
            </div>
            

                   <div class="form-group">
                      <label for="result">11.Result of the G.C.E. (O/L) Examination:</label><br>
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Subject</th>
                          <th>Grage</th>
                          <th>Examination Year</th>
                          <th>Index No</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Mathematics</td>
                          <td><select name="OL_maths_grade" id="course" required>
                              <option value=""></option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                          </td>
                          <td> 
                            <select name="OL_maths_examination_year" id="course" required>
                              <option value=""></option>      
                              <option>2009</option>      
                              <option>2010</option>      
                              <option>2011</option>      
                              <option>2012</option>      
                              <option>2013</option>      
                              <option>2014</option>      
                              <option>2015</option>      
                              <option>2016</option>      
                              <option>2017</option>      
                              <option>2018</option>
                            </select>
                          </td>  
                            <td><input type="text" name="OL_maths_index_no" class="form-control" id="usr" required></td>
                        </tr><tr>
                          <td>2</td>
                          <td>English Language</td>
                          <td><select name="OL_english_grade" id="course" required>
                              <option value=""></option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="S">S</option>
                            </select>
                          </td>
                          <td> <select name="OL_englishexamination_year" id="course" required>
                              <option value=""></option>      
                              <option>2009</option>      
                              <option>2010</option>      
                              <option>2011</option>      
                              <option>2012</option>      
                              <option>2013</option>      
                              <option>2014</option>      
                              <option>2015</option>      
                              <option>2016</option>      
                              <option>2017</option>      
                              <option>2018</option>
                            </select>
                            </td>  
                            <td><input type="text" name="OL_english_index_no" class="form-control" id="usr" required></td>
                        </tr>
                      </table>
                </div> 
       <label for="course-apply">12.Document to be attached:</label>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename1" accept="application/pdf,image/*" required />
          <label class="custom-file-label" for="customFile">Payment voucher</label>
       </div> 

         <div class="custom-file mb-3"> 
          <input type="file" class="custom-file-input" id="customFile" name="filename2" accept="application/pdf,image/*" required />
          <label class="custom-file-label" for="customFile">Bank paying receipt</label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename3" accept="application/pdf,image/*" required />
          <label class="custom-file-label" for="customFile">Certificate copy of G.C.E (A/L) Certificate</label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename4" accept="application/pdf,image/*" required />
          <label class="custom-file-label" for="customFile">Certificate copy of G.C.E (O/L)  Certificate for Mathematics</label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename5" accept="application/pdf,image/*" required />
          <label class="custom-file-label" for="customFile">Certificate copy of G.C.E (O/L)  Certificate for English Language</label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename6" accept="application/pdf,image/*" />
          <label class="custom-file-label" for="customFile">If any affidavit </label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="upload" name="filename7" accept="application/pdf,image/*"/>
          
          <label class="custom-file-label" for="customFile">If any certificate </label>
       </div>   
        

       <div class="form-group">
          <label for="comment"> Any Comment:</label>
          <textarea class="form-control" rows="5" id="comment" name="textarea" title="Please put a comment that you want to tell us"></textarea>
        </div>

        <div class="container-contact3-form-btn">
              <button  name="preview" class="btn btn-primary">Retrieve</button>
              
        </div>

    </form>

      
      
    </div>
  </div>
 </div>
</body>
</html>