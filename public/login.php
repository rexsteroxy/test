<?php require_once("../private/initialize.php");?>
<?php
$name = '';
$password = '';

if(is_post_request()) {

  $matnumber = $_POST['matnumber'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($matnumber)) {
    $errors[] = "matnumber cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }
  if(empty($errors)){
    $student = find_student_by_matnumber($matnumber);
      if($student){
          if(password_verify($password , $student['password'])){
              log_in_student($student);
              redirect_to(url_for('profile.php'));
          }else{
            //matnumber found but password does not match
            $errors[] = "Please enter the correct matnumber and password";
            
          }
      }
      else{
        //no matnumber was found
         $errors[] = "log in not successful";
            
      }
  }

}



?>


<?php include(SHARED_PATH . '/include_header.php');?>

<body>
   <!--<img src="img/flathouse.jpg" class="signupContent" alt=""> -->
  

	
    <div class="container">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
	        <h4 class="text-black">Not Registered?</h4><h4><a href="signup.php">Click Here</a></h4>
            <?php  echo display_errors($errors);?>
        </div>
        <div class="col-md-3 col-lg-4 col-sm-6">
            <div class="card">
            <div class="card-header">
            <div class="card-subtitle">
                <h4 class="text-success">Login form</h4>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="matnumber" placeholder="Enter Your Matriculation Number" required class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="password"  name="password"  required placeholder="Enter Your Password" class="form-control theForm">
                    </div>
                    <div class="btn text-center">
                            <button type="submit"  name="login" class="btn btn-primary">Submit</button>
                           
                    </div>
                </form>
            </div>
            </div>
            </div>

        </div>
    
    </div>
    </div>
    <hr>
	

        

<?php include(SHARED_PATH . '/include_footer.php');?>