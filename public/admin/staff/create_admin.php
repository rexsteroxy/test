<?php
require_once('../../../private/initialize.php');
if($_SESSION['level']=="SuperAdmin"){
  
require_admin_login();

$page_title = "admin_homepage";
include_once(SHARED_PATH .'/admin_header.php');

if(is_post_request()){
  $admin=[];
  $admin['name'] = $_POST['name'] ?? '';
  $admin['email'] = $_POST['email'] ?? '';
  $admin['password'] = $_POST['password'] ?? '';
  $admin['level'] = $_POST['level'] ?? '';
  $admin['confirm_password'] = $_POST['password_2'] ?? '';


  $result=insert_admin($admin);
  if ($result === true){
    $_SESSION['message'] = 'Admin created successful.';
 }
 else{
  $errors = $result;
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
            <h5><a class="text-info" href="<?php echo url_for('/admin/staff/index.php'); ?>">&laquo; Back to List</a></h5>

    <?php echo display_errors($errors);?>

    <form action="<?php echo url_for('/admin/staff/create_admin.php'); ?>" method="post" class="form-group">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Enter  Name" required class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter Email Address" required class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Enter Password" required class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_2" placeholder="Confirm Password" required class="form-control theForm" >  
                    </div>
      <div class="form-group">
              <label class="text-info">Choose Admin Level</label>
                      <select name="level" type="text" class="btn btn-outline-success mt-sm-2">
                      <option>SuperAdmin</option>
                      <option>NormalAdmin</option>
                      </select></br></br>
              </div>
                    <div class="btn text-center">
                            <button type="submit" value="Submit"  name="login" class="btn btn-primary">Submit</button>      
                    </div>
    </form>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
  </br></br>

<?php include_once(SHARED_PATH .'/admin_footer.php') ;?>
 <?php } 
else{
  redirect_to(url_for('/admin/index.php'));
} 
?>
