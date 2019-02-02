<?php
require_once('../../../../private/initialize.php');
require_admin_login();
$page_title = "view result";
include(SHARED_PATH . "/admin_header.php");
$id = $_GET['id'] ?? 'welcome';

$student_result = find_one_student_in_secondsemester4($id);
?>
<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
        <h5><a class="text-info" href="<?php echo url_for('/admin/result/s4/index.php')?>">Back To List</a></h5>
<div id="attributes">
	<table class="table table-striped table-bordered table-hover table-condensed">
        <tr class="text-center">
            <th class="text-info"><?php echo $student_result['matnumber']?></th>
            <th>Second Semester Year one</th>
        </tr>
    </table>
    <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th>Course</th>
            <th>Grade</th>
        </tr>
        <tr class="text-info"><td><?php echo $student_result['course1']?></td> <td><?php echo $student_result['grade1']?></td></tr>
		<tr class="text-info"><td><?php echo $student_result['course2']?></td> <td><?php echo $student_result['grade2']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course3']?></td> <td><?php echo $student_result['grade3']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course4']?></td> <td><?php echo $student_result['grade4']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course5']?></td> <td><?php echo $student_result['grade5']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course6']?></td> <td><?php echo $student_result['grade6']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course7']?></td> <td><?php echo $student_result['grade7']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course8']?></td> <td><?php echo $student_result['grade8']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course9']?></td> <td><?php echo $student_result['grade9']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course10']?></td> <td><?php echo $student_result['grade10']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course11']?></td> <td><?php echo $student_result['grade11']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course12']?></td> <td><?php echo $student_result['grade12']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course13']?></td> <td><?php echo $student_result['grade13']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course14']?></td> <td><?php echo $student_result['grade14']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course15']?></td> <td><?php echo $student_result['grade15']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course16']?></td> <td><?php echo $student_result['grade16']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course17']?></td> <td><?php echo $student_result['grade17']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course18']?></td> <td><?php echo $student_result['grade18']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course19']?></td> <td><?php echo $student_result['grade19']?></td></tr>
        <tr class="text-info"><td><?php echo $student_result['course20']?></td> <td><?php echo $student_result['grade20']?></td></tr>
            
        
        
    
    </table>
</div>
</div>
</div>
</div>


<?php include(SHARED_PATH . "/admin_footer.php");?>
