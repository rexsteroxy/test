<?php
require_once('../../../private/initialize.php');
require_admin_login();

$students = find_all_student();

$page_title = 'admin view';
include(SHARED_PATH . '/admin_header.php');
?>

	
	<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">RECORD OF ALL REGISTERED STUDENTS</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/index.php')?>">GO TO THE MAIN MENU</a></h5>
						<div id="attributes">

<table class="table table-striped table-bordered table-hover table-condensed text-center">
<tr>
		<th>Register New Student</th>
		
	</tr>
	<tr>
	<td><a class="action" href="<?php echo url_for('/admin/student/create_student.php');?>">Register Student</a></td>
	</tr>


</table>

<table class="table table-striped table-bordered table-hover table-condensed text-center">
	<tr>
		<th>ID</th>
		<th>MATNUMBER</th>
		<th>NAME</th>
		<th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
	</tr>

	<?php while($student = mysqli_fetch_assoc($students)) {?>
		<tr>
			<td><?php echo h($student['id']); ?></td>
			<td><?php echo h($student['matnumber']); ?></td>
			<td><?php echo h($student['name']); ?></td>
			<td><a class="action" href="<?php echo url_for('/admin/student/show_student.php?id=' . $student['id']) ;?>">CLICK TO VIEW</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/student/edit_student.php?id=' . $student['id']) ;?>">CLICK TO EDIT</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/student/delete_student.php?id=' . h(u($student['id'])));?>">CLICK TO DELETE</a></td>
		</tr>
	<?php }?>
</table>
	</div>	</div>	</div>	</div>	</div>	</div>	</div>

<?php
  mysqli_free_result($students);
 ?>

</div>
</div>

<br><br>
<?php include(SHARED_PATH . '/admin_footer.php');?>
