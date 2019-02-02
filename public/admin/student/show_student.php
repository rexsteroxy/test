<?php
require_once('../../../private/initialize.php');
require_admin_login();
$page_title = "show admins";
include(SHARED_PATH . "/admin_header.php");
$id = $_GET['id'] ?? 'welcome';

$student = find_one_student($id);
?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-3">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center"><?php echo  h($student['name']); ?></h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/student/index.php')?>">&laquo; Back to List</a></h5>

    <div class="attributes">
      <dl>
        <dt>Matnumber</dt>
        <dd><?php echo h($student['matnumber']); ?></dd>
      </dl>
      <dl>
        <dt>Name</dt>
        <dd><?php echo h($student['name']); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?php echo h($student['email']); ?></dd>
      </dl>
      <dl>
        <dt>Institution</dt>
        <dd><?php echo h($student['institution']); ?></dd>
      </dl>
      <dl>
        <dt>Department</dt>
        <dd><?php echo h($student['department']); ?></dd>
      </dl>
      
        <dt>Time</dt>
        <dd><?php echo $student['time'] ; ?></dd>
      </dl>
    </div>

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>


<?php include(SHARED_PATH . "/admin_footer.php");?>
