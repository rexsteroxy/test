<?php
require_once('../../../../private/initialize.php');
require_admin_login();

$ssecondsemester = find_all_secondsemester4();

$page_title = "View Result";
include_once(SHARED_PATH .'/admin_header.php');

?>

	<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">YEAR FOUR SECOND SEMESTER RESULT</h4>
            <h5><a class="text-info" href="<?php echo url_for('/admin/index.php')?>">GO TO THE MAIN MENU</a></h5>
						<div id="attributes">



<table class="table table-striped table-bordered table-hover table-condensed text-center">
	<tr>
        <th>id</th>
        <th>matnumber</th>
        <th>Reupload</th>
  	    <th>View</th>
        
		
        
	</tr>

	<?php while($secondsemester = mysqli_fetch_assoc($ssecondsemester)) {?>
		<tr class="text-info">
			<td><?php  echo h($secondsemester['id']);?></td>
			<td><?php echo h($secondsemester['matnumber']);?></td>
            <td><a class="action" href="<?php echo url_for('/admin/upload/stageone.php') ;?>">click to reupload</a></td>
			<td><a class="action" href="<?php echo url_for('/admin/result/s4/view_result.php?id=' . $secondsemester['id']) ;?>">click to view</a></td>
			
			
		</tr>
        <?php }?>
	</table>
	</div>	</div>	</div>	</div>	</div>	</div>	</div>

</div>
</div>

<br><br>



<?php include_once(SHARED_PATH .'/admin_footer.php');?>