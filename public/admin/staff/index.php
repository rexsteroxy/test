<?php
require_once('../../../private/initialize.php');
if($_SESSION['level']=="SuperAdmin"){
require_admin_login();

$admins = find_all_admin();

$page_title = 'admin view';
include(SHARED_PATH . '/admin_header.php');
?>

	
	<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">RECORD OF ALL ADMINSTRATORS</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/index.php')?>">GO TO THE MAIN MENU</a></h5>
						<div id="attributes">
						<table class="table table-striped table-bordered table-hover table-condensed text-center">
<tr>
		<th>Register New Student</th>
		
	</tr>
	<tr>
	<td><a class="action" href="<?php echo url_for('/admin/staff/create_admin.php');?>">Create New Admin</a></td>
	</tr>


</table>



<table class="table table-striped table-bordered table-hover table-condensed text-center">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>TIME</th>
		<th>LEVEL</th>
		<th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
        
	</tr>

	<?php while($admin = mysqli_fetch_assoc($admins)) {?>
		<tr>
			<td><?php echo h($admin['id']); ?></td>
			<td><?php echo h($admin['name']); ?></td>
			<td><?php echo h($admin['email']); ?></td>
			<td><?php echo $admin['time']; ?></td>
			<td><?php echo $admin['level']; ?></td>
			<td><a class="action" href="<?php echo url_for('/admin/staff/show_admin.php?id=' . $admin['id']) ;?>">CLICK TO VIEW</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/staff/edit_admin.php?id=' . $admin['id']) ;?>">CLICK TO EDIT</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/staff/delete_admin.php?id=' . h(u($admin['id'])));?>">CLICK TO DELETE</a></td>
		</tr>
	<?php }?>
</table>
	</div>	</div>	</div>	</div>	</div>	</div>	</div>

<?php
  mysqli_free_result($admins);
 ?>

</div>
</div>

<br><br>
<?php include(SHARED_PATH . '/admin_footer.php');?>
<?php } 
else{
  redirect_to(url_for('/admin/index.php'));
} 
?>