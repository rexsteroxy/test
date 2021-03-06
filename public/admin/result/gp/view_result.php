<?php
require_once('../../../../private/initialize.php');
require_admin_login();
$page_title = "Gp result";
include(SHARED_PATH . "/admin_header.php");
$id = $_GET['id'] ?? 'welcome';

$student_result = find_one_result_in_all($id);
?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
        <h5><a class="text-info" href="<?php echo url_for('/admin/result/gp/index.php')?>">Back To List</a></h5>
<div id="attributes">
	<table class="table table-striped table-bordered table-hover table-condensed">
        <tr class="text-center">
            <th class="text-info"><?php echo $student_result['matnumber']?></th>
        </tr>
    </table>
    <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th>firstsemester year one</th>
            <th>secondsemester year one</th>
        </tr>
        <tr class="text-info"><td><?php echo $student_result['firstone']?></td> 
        <td><?php echo $student_result['secondone']?></td></tr>
		</table>
        <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th>firstsemester year two</th>
            <th>secondsemester year two</th>
        </tr>
        <tr class="text-info"><td><?php echo $student_result['firsttwo']?></td> 
        <td><?php echo $student_result['secondtwo']?></td></tr>
		</table>
        <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th>firstsemester year three</th>
            <th>secondsemester year three</th>
        </tr>
        <tr class="text-info"><td><?php echo $student_result['firstthree']?></td> 
        <td><?php echo $student_result['secondthree']?></td></tr>
		</table>
        <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th>firstsemester year four</th>
            <th>secondsemester year four</th>
        </tr>
        <tr class="text-info"><td><?php echo $student_result['firstfour']?></td>
         <td><?php echo $student_result['secondfour']?></td></tr>
		</table>
</div>
</div>
</div>
</div>


<?php include(SHARED_PATH . "/admin_footer.php");?>
