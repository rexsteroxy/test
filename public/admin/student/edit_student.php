<?php
require_once('../../../private/initialize.php');
require_admin_login();
if(!isset($_GET['id'])){
  redirect_to(url_for('/admin/index.php'));
}

$id = $_GET['id'];


if(is_post_request()){
$admin=[];
$admin['name'] = $_POST['name'] ?? '';
$admin['email'] = $_POST['email'] ?? '';
$password= $_POST['password'] ?? '';
$admin['new_password'] = $_POST['password_3'] ?? '';
$admin['c_new_password'] = $_POST['password_4'] ?? '';

 $admin = find_admin_by_name($admin);
      if($admin){
          if(password_verify($password , $admin['password'])){
               $result = edith_admin($admin,$id);
              if ($result === true){
               $_SESSION['message'] = 'Admin edited successful.';
                }
              }
}else{
  $errors[] = "Password not found";
  $errors=$result;
}
          

}
else{
  $admin = find_one_admin($id);
    $admin_set = find_all_admin();
    $admin_count = mysqli_num_rows($admin_set);
    mysqli_free_result($admin_set);
}


?>

<?php $page_title = ' edit admin'; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-3">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">EDIT ADMINSTRATORS</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/staff/index.php')?>">&laquo; Back to List</a></h5>

    <?php echo display_errors($errors) ?>

    <form action="<?php echo url_for('/admin/staff/edit_admin.php?id='. h(u($id))); ?>" method="post">
                  <div class="form-group">
                    <input type="text" name="name" value="<?php echo h($admin['name']) ?>" required class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                    <input type="email" name="email" value="<?php echo h($admin['email']) ?>" required class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                    <input type="" name="password" placeholder="Enter Password" required class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                    <input type="" name="password_1" placeholder="New Password" required class="form-control theForm" >  
                    </div>
                    <div class="form-group">
                    <input type="" name="password_2" placeholder="Confirm Password" required class="form-control theForm" >  
                    </div>
     
                 </div>
                    <div class="btn text-center">
                            <button type="submit" value="Submit"  name="edit" class="btn btn-primary">Submit</button>      
                    </div>
    </form>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
