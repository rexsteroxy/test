<?php
require_once("../private/initialize.php");
if(is_post_request()){
$student=[];
$student['name']=$_POST['name'] ?? '';
$student['email']=$_POST['email'] ?? '';
$student['institution']=$_POST['institution'] ?? '';
$student['department']=$_POST['department'] ?? '';
$student['matnumber']=$_POST['matnumber'] ?? '';
$student['password']=$_POST['password'] ?? '';
$student['confirm_password']=$_POST['confirm_password'] ?? '';

 //print_r($student);
 $result=insert_student($student);
 if($result === true){
     $_SESSION['message']="Registeration Successful";
     redirect_to(url_for('login.php'));
 }
 else{
     $errors=$result;
 }
}
?>

<?php include(SHARED_PATH . '/include_header.php');?>
<body>
   <!--<img src="img/flathouse.jpg" class="signupContent" alt=""> -->
    <div class="container">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
            <h4 class="text-black">Already Registered?</h4><h4><a href="login.php">Click Here</a></h4>
            <p>Your registeration will enable us keep track of your GP,
            So that once your come to perform another calculation for another semester
                ,you will be able to see your previous GP calculations</p>
            <h6><a class="text-success"> I WISH YOU A HIGHER GP.</a></h6>
            <?php  echo display_errors($errors);?>
        </div>
        <div class="col-md-3 col-lg-4 col-sm-6">
            <div class="card">
            <div class="card-header">
            <div class="card-subtitle">
                <h4 class="text-success">Registeration form</h4>
                <form action="signup.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" required placeholder="Enter Your Name" class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" required placeholder="Enter Your Email" class="form-control theForm" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="institution" required placeholder=" Enter Your Institution" class="form-control theForm" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="department" required placeholder="Enter Your Department" class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="matnumber" required placeholder="Enter Your Matriculation Number" class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="password"  name="password" required placeholder="Enter Your Password" class="form-control theForm">
                    </div>
                    <div class="form-group">
                        <input type="password"  name="confirm_password" required placeholder="Confirm Password" class="form-control theForm">
                    </div>
                    <div class="btn text-center">
                            <button type="submit" name="register" class="btn btn-primary">Submit</button>
                           
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