<?php
require_once('../../../private/initialize.php');
if($_SESSION['level']=="SuperAdmin"){
require_admin_login();
$page_title = "show admins";
include(SHARED_PATH . "/admin_header.php");
$id = $_GET['id'] ?? 'welcome';

$admin = find_one_admin($id);
?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-3">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center"><?php echo  h($admin['name']); ?></h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/staff/index.php')?>">&laquo; Back to List</a></h5>

    <div class="attributes">
      <dl>
        <dt>Name</dt>
        <dd><?php echo h($admin['name']); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?php echo h($admin['email']); ?></dd>
      </dl>
      <dl>
        <dt>Level</dt>
        <dd><?php echo h($admin['level']); ?></dd>
      </dl>
      
        <dt>Time</dt>
        <dd><?php echo $admin['time'] ; ?></dd>
      </dl>
    </div>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>


<?php include(SHARED_PATH . "/admin_footer.php");?>
<?php } 
else{
  redirect_to(url_for('/admin/index.php'));
} 
?>