<?php
   
// connect database
        session_start();
          $con= mysqli_connect("localhost","root","")or die("Unable to connect");
         mysqli_select_db($con,'mini_project');       
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
     </style>
  </head>
  <body style="color:white;">
    <div class="bg-contact3" style="background-image: url('01.jpg');">
     <div class="container-contact3">
      <div class="container">
          <center class="head">
            <h2>Application Form</h2>
            </center>

          <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="course-apply">01.Course/s Apply:</label><br>
                    <select name="course" id="course" required>
                              <option value=""></option>
                              <option value="B.Sc(Special) Degree in Sport Sciences & Management">B.Sc(Special) Degree in Sport Sciences & Management (SSM)</option>
                              <option value="B.Sc(Special) Degree in Phyaical Education (PED)">B.Sc(Special) Degree in Phyaical Education (PED)</option>
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
                  <div class="wrap-input3 validate-input" data-validate="Address is required">
                    <label for="address">04.Permanent Address:</label>
                      <input type="text" name="adress" class="form-control" id="usr" placeholder="Permanent Address"  required>
                  </div>     
                </div>

                <div class="form-group">
                  <div class="wrap-input3 validate-input" data-validate="ID card is requireds">
                   <label for="nic-no">05.National Identity Card Number:</label>
                      <input type="text" name="nic_no" class="form-control" pattern="[1-9v].{1,20}" id="" placeholder="National Identity Card Number" required>
                  </div>      
                </div>
          
                 <div class="form-group">
                   <div class="wrap-input3 validate-input" data-validate="Distric is requireds">
                    <label for="gender">06.District(Residence):</label><br>
                     <input type="text" name="distric" class="form-control" id="usr" placeholder="District(Residence)" required>
                  </div> 
                </div>
            <div class="form-group">
              <div class="wrap-input3 validate-input" data-validate="Contact No is requireds">
                    <label for="contact">07.Contact Telephone No/s:</label><br>
                     <input type="text" name="mobile" class="form-control" pattern="[0-9].{1,20}" title="Please enter valid No"  id="usr" placeholder="Contact Telephone No mobile" required>
                  
                  </div>   
            </div>
                    
       <div class="form-group">     
                <label for="gender">08.Gender:</label><br>
                <label class="radio-inline"><input type="radio" name="gender" >   Male</label>
                <label class="radio-inline"><input type="radio" name="gender">    Female</label>
      </div>
                    
      <div class="form-group">
                      <label for="result">09.Result of the G.C.E.(A/L) Examination 2010:</label><br>
                      <table>
                        <tr>
                          <th>Index No:<input type="text" name="index_no" class="form-control" pattern="[1-9].{1,12}" title="Please enter valid index" id="usr" required></th>
                          <th>Z-Score :<input type="text" name="zscore" class="form-control" pattern="[0-9].{1,5}" title="Please enter valid Z-score" id="usr" required></th>
                          <th>Genaral Test Marks:<input name="genaral_test_marks" type="text" class="form-control" pattern="[1-9].{1,2}" title="Please enter marks"  id="usr" required></th>      
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
                        </tr><tr>
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
                        </tr><tr>
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
                      <label for="result">10.Result of the G.C.E.(O/L) Examination 2014:</label><br>
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
       <label for="course-apply">11.Document to be attached:</label>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename1" accept="image/*" required />
          <label class="custom-file-label" for="customFile">Payment voucher</label>
       </div> 

         <div class="custom-file mb-3"> 
          <input type="file" class="custom-file-input" id="customFile" name="filename2" accept="image/*" required />
          <label class="custom-file-label" for="customFile">Bank paying receipt</label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename3" accept="image/*" required />
          <label class="custom-file-label" for="customFile">Certificate copy of G.C.E(A/L) 2014 Certificate</label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename4" accept="image/*" required />
          <label class="custom-file-label" for="customFile">Certificate copy of G.C.E(O/L) 2010 Certificate</label>
       </div>

       <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="filename5" accept="image/*" />
          <label class="custom-file-label" for="customFile">If any affidavit </label>
       </div> 

        <div class="container-contact3-form-btn">
              <button class="contact3-form-btn" name="submit">Submit</button>
        </div>

    </form>
      <?php 

        if(isset($_POST['submit'])){
           

          $course=$_POST['course'];
          $name_with_initial=$_POST['name_with_initial'];
          $full_name=$_POST['full_name'];
          $adress=$_POST['adress'];
          $nic_no=$_POST['nic_no'];
          $distric=$_POST['distric'];
          $mobile=$_POST['mobile'];
          $gender=$_POST['gender'];
          $index_no=$_POST['index_no'];
          $zscore=$_POST['zscore'];
          $genaral_test_marks=$_POST['genaral_test_marks'];
          $sub1=$_POST['sub1'];
          $grade1=$_POST['grade1'];
          $sub2=$_POST['sub2'];
          $grade2=$_POST['grade2'];
          $sub3=$_POST['sub3'];
          $grade3=$_POST['grade3'];
          $OL_maths_grade=$_POST['OL_maths_grade'];
          $OL_maths_examination_year=$_POST['OL_maths_examination_year'];
          $OL_maths_index_no=$_POST['OL_maths_index_no'];
          $OL_english_grade=$_POST['OL_english_grade'];
          $OL_englishexamination_year=$_POST['OL_englishexamination_year'];
          $OL_english_index_no=$_POST['OL_english_index_no'];

           $from = "ruwandi1102@gmail.com"; // this is your Email address
            $to = $_SESSION['email']; // this is the sender's Email address
            $subject = "University Admission";
            $subject2 = "Copy of your form submission";
            $message = $name_with_initial. " " ." wrote the following:" . "\n\n" ;
            $message2 = "Here is a copy of your message " .$name_with_initial . "\n\n";

            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
          //file upload
           $name1=$_FILES['filename1']['name'];
           $tmp_name1=$_FILES['filename1']['tmp_name'];
           $location1="uploads/";

           $name2=$_FILES['filename2']['name'];
           $tmp_name2=$_FILES['filename2']['tmp_name'];
           $location2="uploads/";

           $name3=$_FILES['filename3']['name'];
           $tmp_name3=$_FILES['filename3']['tmp_name'];
           $location3="uploads/";

           $name4=$_FILES['filename4']['name'];
           $tmp_name4=$_FILES['filename4']['tmp_name'];
           $location4="uploads/";

           $name5=$_FILES['filename5']['name'];
           $tmp_name5=$_FILES['filename5']['tmp_name'];
           $location5="uploads/";
         /*
              $query="insert into student values('','$course','$name_with_initial','$full_name','$adress','$nic_no','$distric','$mobile','$gender','$index_no','$zscore','$genaral_test_marks','$sub1','$grade1','$sub2','$grade2','$sub3','$grade3','$OL_maths_grade','$OL_maths_examination_year','$OL_maths_index_no','$OL_english_grade','$OL_englishexamination_year','$OL_english_index_no')";
              $query_run = mysqli_query($con,$query);*/
            $upload_file1=move_uploaded_file($tmp_name1, $location1.$name1);
            $upload_file2=move_uploaded_file($tmp_name2, $location2.$name2);
            $upload_file3=move_uploaded_file($tmp_name3, $location3.$name3);
            $upload_file4=move_uploaded_file($tmp_name4, $location4.$name4);
            $upload_file5=move_uploaded_file($tmp_name5, $location5.$name5);
              
              if($upload_file1 && $upload_file2 && $upload_file3 && $upload_file4 && $upload_file5){
                        $query="insert into student values('','$course','$name_with_initial','$full_name','$adress','$nic_no','$distric','$mobile','$gender','$index_no','$zscore','$genaral_test_marks','$sub1','$grade1','$sub2','$grade2','$sub3','$grade3','$OL_maths_grade','$OL_maths_examination_year','$OL_maths_index_no','$OL_english_grade','$OL_englishexamination_year','$OL_english_index_no','$name1','$location1','$name2','$location2','$name3','$location3','$name4','$location4','$name5','$location5')";
                        $query_run = mysqli_query($con,$query);
                         
                        if ($query_run) {
                          echo '<script type ="text/javascript"> alert("success") </script>';
                          /*header('location:login.php');*/
                         
                          mail($to,$subject,$message,$headers);
                          mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                          echo "Mail Sent. Thank you " .$name_with_initial. ", we will contact you shortly.";
                          // You can also use header('Location: thank_you.php'); to redirect to another page.
                          
                        }
                        else{
                           echo '<script type ="text/javascript"> alert("Error!") </script>';
                        }
                          
              }            
          } 
          
       ?> 
      <script>
      /*repeat background*/
        function checkforblank(){
              if (document.getElementsByID('course').value== "") {
                  alert('Please enter first name');
                  document.getElementById('course').style.borderColor = "red"; 
                  return false; 
                         }
                  return true;
             } 
        $(document).ready(function() {
        $('#contact_form').bootstrapValidator( {
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
      </script>
    </div>
  </div>
 </div>
</body>
</html>