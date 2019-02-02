<?php
require_once('../../../private/initialize.php');
  
require_admin_login();

$page_title = "admin_homepage";
include_once(SHARED_PATH .'/admin_header.php');

if(is_post_request()){
    $student=[];
    $student['name']=$_POST['name'] ?? '';
    $student['email']=$_POST['email'] ?? '';
    $student['institution']=$_POST['institution'] ?? '';
    $student['department']=$_POST['department'] ?? '';
    $student['matnumber']=$_POST['matnumber'] ?? '';
    $student['password']=$_POST['password'] ?? '';
    $student['confirm_password']=$_POST['confirm_password'] ?? '';


    $result=insert_student($student);
    if($result === true){
        $_SESSION['message']="Registeration Successful";
        redirect_to(url_for('/admin/student/index.php'));
    }
    else{
        $errors=$result;
    }
   }
else{
  //display the blank form
}
?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-4">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">Create New Admin</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/student/index.php'); ?>">&laquo; Back to List</a></h5>

    <?php echo display_errors($errors);?>

    <form action="<?php echo url_for('/admin/student/create_student.php'); ?>" method="POST">
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

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
  </br></br>

<?php include_once(SHARED_PATH .'/admin_footer.php') ;?>
 
