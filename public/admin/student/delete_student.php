<?php
require_once('../../../private/initialize.php');
require_admin_login();
if(!isset($_GET['id'])) {
  redirect_to(url_for('/admin/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  $result = delete_student($id);

  if ($result === true){
    $_SESSION['message']=" Student deleted succesfully";
  }
  else{
    $errors = $result;
  }

} else {
  $student = find_one_student($id);
}

?>

<?php $page_title = 'Delete admin'; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">Delete student</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/student/index.php')?>">&laquo; Back to List</a></h5>

    <h3 class="text-danger">Are you sure you want to delete this student?</h3>
    <h4 class="text-info"><?php echo h($student['name']); ?></h4>

    <form action="<?php echo url_for('/admin/student/delete_student.php?id=' . h(u($student['id']))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Student" />
      </div>
    </form>
    </div>	</div>	</div>	</div>	</div>	</div>	</div>
    <br><br>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
