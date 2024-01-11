<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NepEducation: where </title>
    <link rel="stylesheet" type="text/css" href="login.css?v=<?php echo time();?>" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">NepEducation</a>
        <button class="button" id="form-open">Login</button>
      </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container ">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form active">
          <form method="POST">
            <h2>Login</h2>
            <p id="loginerr"></p>

            <div class="input_box">
              <input type="email" name="LEmail" id="emaill" placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <span id="lemailerr"></span>
            <div class="input_box">
              <input type="password" name="LPassword" id="passwordl" placeholder="Enter your password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <span id="lpasserr"></span>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Remember me</label>
              </span>
              <a href="#" class="forgot_pw">Forgot password?</a>
            </div>

            


            <button class="button" type="submit"  name="Login" >Login Now</button>

            <div class="login_register">Don't have an account? <a href="#" id="register">Register</a></div>
          </form>
          <?php
          include "dbconnect.php";


          // login part
          if (isset($_POST['Login'])) {
            if (empty($_POST['LEmail']) || empty($_POST['LPassword'])) {
              echo "Please enter your email and password.";
              exit();
            }

            $Email = $_POST['LEmail'];
            $Password = $_POST['LPassword'];

            $sql = "SELECT * FROM register WHERE Email='$Email' AND Password='$Password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);

            if ($num > 0) {
              
              $_SESSION['Login']=$Email;
              // Redirect to welcome.php
              header('location: http://localhost/project/index.php');
              exit();
            } 
            else {
              ?>
              <script>
                const loginerr = document.getElementById('loginerr');
                loginerr.innerHTML="Username or Password doesn't match";
                loginerr.style.fontFamily="monospace";
                loginerr.style.color="red";
                loginerr.style.fontSize="13px";

              </script>
              
              
              <?php
            }
            
          }

          ?>  
           </div>






        <!-- Register From -->
        <div class="form register_form">
          <form action="" method="POST" enctype="multipart/form-data">
            <h2>Register</h2>

            <div class="input_main">

              <div class="input_one">
                <div class="namee">
                  <span class="title">Name</span>
                <div class="name">
                <div class="input_box">
                  <input type="text" name="Fname" class="" placeholder="First Name" required>
                
                </div>
                <div class="input_box">
                  <input type="text" name="Mname" id="" placeholder="Middle(if any)" >
                
                </div>
                <div class="input_box">
                  <input type="text" name="Lname" class="" placeholder="Last Name" required>
                </div>
                </div>
              </div>
              
              <div class="email">
                  <span class="title">Email</span> <span id="emailerr"></span>
                <div class="input_box">
                  <input type="email" name="Email" id="email" class="" placeholder="enter email id" required>
                </div>
              </div>
              <div class="username">
                <span class="title">Username</span>
                <span id="usererr"></span>

            <div class="input_box">
              <input type="text" name="Username" id="username" class="" placeholder="choose a username" required>
            </div>
              </div>
              <fieldset>
                <legend><span class="title">Address</span></legend>
                <div class="address">
                  <div class="left">
                    <div class="country">
                      Country:
                      <div class="input_box">
                        <input type="text" name="Country" class="" required>
                      </div>
                    </div>
                    <div class="city">
                      City
                      <div class="input_box">
                        <input type="text" name="City" class="" required>
                      </div>
                    </div>
  
  
                  </div>
                  <div class="right">
                    <div class="street">
                      Street
                      <div class="input_box">
                        <input type="text" name="Street" class="">
                      </div>
                    </div>
                    <div class="postal">
                      Postal Code 
                      <div class="input_box">
                        <input type="number" name="Postal" class="" required>
                      
                    </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><span class="title">Education</span></legend>
                <div class="education">
                  <div class="university">
                    University
                    <div class="input_box">
                      <input type="text" name="University" id="">
                    </div>
                  </div>
                  <div class="college">
                    College
                    <div class="input_box">
                      <input type="text" name="College" id="">
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="interest">
                <span class="title">Interests</span>
                <div class="option_field">
                  <span class="checkbox">
                    <input type="checkbox" id="sports" value="Sports" class="Interest" name="Interest[]"/>
                    <label for="sports">Sports</label>
                  </span>
                  <span class="checkbox">
                    <input type="checkbox" id="exploring" value="Exploring" class="Interest" name="Interest[]"/>
                    <label for="exploring">Exploring</label>
                  </span>
                  <span class="checkbox">
                    <input type="checkbox" value="Web Develop" id="web" class="Interest" name="Interest[]" />
                    <label for="web">Web Designing</label>
                  </span>
                
                </div>

              </div>
              </div>



              <div class="input_two">
                <div class="profile">
                  <span class="title">Choose Profile Picture:(optional)</span>
                  <div class="photo">
                    <div class="get">
                      <input type="file" name="Image" id="" accept="image/*">
  
                    </div>
                    <div class="show">
                      <!-- <img src="new.jpg" alt=""> -->
  
                    </div>
                  </div>

                </div>
                <div class="password">
                  <div class="primary">
                    <span class="title">Password</span><span id="passerr"></span>
                    <div class="input_box">
                      <input type="password" name="Password" id="password" placeholder="Enter your password" required />
                    </div>
                  </div>
                  <div class="conformation">
                    <span class="title">Confirm Password <span class="cpasserr"></span>
                    <div class="input_box">
                      <input type="password" name="Cpassword" placeholder="Enter your password" required />
                    </div>
                  </div>
                </div>
              <div class="phone">
                <span class="title">Phone Number</span><span id="phoneerr"></span>
                <div class="input_box">
                  <input type="number" name="Phone" id="phone" class="" placeholder="Enter phone number(without +977)">
                </div>
              </div>
              <div class="dateofbirthh">
                <span class="title">Date of Birth</span><span id=""></span>
                <div class="dateofbirth">
                  <div class="bs">
                    BS
                    <div class="input_box bs">
                      <input type="date" name="Dob" id="baDate" class="">
                    </div>
                  </div>
                  <!-- <div class="ad">
                    AD
                    <div class="input_box ad">
                      <input type="date" name="" id="adDate" class="reqd">
                    </div>
                  </div> -->
                  
                </div>
              </div>
              <div class="gender">
                <span class="title">Gender</span><span id="reqd"></span>
                <div class="option_field reqd" >
                  <span class="checkbox">
                    <input type="radio" value="Male" id="male" name="Gender"/>
                    <label for="male">Male</label>
                  </span>
                  <span class="checkbox">
                    <input type="radio" value="Female" id="female" name="Gender"/>
                    <label for="female">Female</label>
                  </span>
                  <span class="checkbox">
                    <input type="radio" value="Other" id="other" name="Gender" />
                    <label for="other">Other</label>
                  </span>
                </div>
              </div>

            
              </div>
            </div>
            <div class="terms">
              <span class="checkbox">
                <input type="checkbox" id="ok" />
                <label for="ok">Accept <a href="#a">terms and conditions</a></label>
              </span>
              <span class="checkbox">
                <input type="checkbox" name="" id="no">
                <label for="no">Don't accept</label>
              </span>
            </div>
              
            <button class="button" type="submit" name="Submit" id="submitButton" disabled>Register Now</button>

            <div class="login_register">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
          <?php
                      // register part
                      include "dbconnect.php";
                      if(isset($_POST['Submit'])){
                        if($_POST['Mname']==='' || $_POST['Mname']==null){
                          $Name=$_POST['Fname'].' '.$_POST['Lname'];
                        }
                        else
                        $Name=$_POST['Fname'].' '.$_POST['Mname'].' '.$_POST['Lname'];


                        $Username=$_POST['Username'];
                        $Email=$_POST['Email'];
                        $Phone=$_POST['Phone'];
                        $Dob=$_POST['Dob'];
                        $Gender=$_POST['Gender'];
                        $Country=$_POST['Country'];
                        $City=$_POST['City'];
                        $Street=$_POST['Street'];
                        $Postal=$_POST['Postal'];
                        $Interest=$_POST['Interest'];
                        $Interests=implode(",",$Interest);
                        $University=$_POST['University'];
                        $College=$_POST['College'];
                        $Password=$_POST['Cpassword'];
                        $Photo=$_FILES['Image']['name'];
                        $temp=$_FILES['Image']['tmp_name'];
                        $folder="profiles/".$Photo;
                        move_uploaded_file($temp,$folder);


                        $sql="select * from register where 
                        Username='$Username' or Email='$Email' or Phone='$Phone'";
                        $result=mysqli_query($conn,$sql);
                        $num=mysqli_num_rows($result);
                        $row=mysqli_fetch_assoc($result);

                        if($num>0){
                          //checking if usernname already used 
                          if($row['Username']==$Username){
                            ?>
                            <script>
                              const uerr = document.getElementById('usererr');
                              uerr.innerHTML="* username is already taken";
                              uerr.style.color="red";
                              uerr.style.fontFamily="monospace";
                              document.getElementById('username').style.borderColor="red";
                            </script>
                            <?php

                          }

                          //phone checking
                          if($row['Phone'] == $Phone){
                            ?>
                            <script>
                              const perr = document.getElementById('phoneerr');
                              perr.innerHTML="* phone number is already used";
                              perr.style.color="red";
                              perr.style.fontFamily="monospace";
                              document.getElementById('phone').style.borderColor="red";


                            </script>
                            <?php


                          }

                          //email checking
                          if($row['Email'] == $Email){
                            ?>
                            <script>
                              const eerr = document.getElementById('emailerr');
                              eerr.innerHTML="* email id is already used";
                              eerr.style.color="red";
                              eerr.style.fontFamily="monospace";
                              document.getElementById('email').style.borderColor="red";


                            </script>
                            <?php
                          }
                        }
          else{
            $query="insert into register (Name,DOB,Gender,Country,City,Street,Postal,Interests,University,College,Photo,Username,Phone,Email,Password) values ('$Name','$Dob','$Gender','$Country','$City','$Street','$Postal','$Interests','$University','$College','$folder','$Username','$Phone','$Email','$Password')";
            $res=mysqli_query($conn,$query);
            if($res){
              
              header('location: http://localhost/project/loginform/login.php');
              exit();
            }
            else{
              echo "can't submit";
            }

          

          }
        }
          ?>
        </div>
      </div>
      
    </section>

    <script type="text/javascript" src="login.js"></script>
  </body>
</html>
