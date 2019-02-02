<?php
$id=$_POST['mat_number'];
$array_unit=$_POST['unit'] ?? "";
$d_unit=[];
$courses=[];
$courses['matnumber']=$_POST['mat_number'] ?? '';
$courses['semester']=$_POST['semester'] ?? '';
$d_unit[0]=$array_unit[0] ?? "";
$d_unit[1]=$array_unit[1] ?? "";
$d_unit[2]=$array_unit[2] ?? "";
$d_unit[3]=$array_unit[3] ?? "";
$d_unit[4]=$array_unit[4] ?? "";
$d_unit[5]=$array_unit[5] ?? "";
$d_unit[6]=$array_unit[6] ?? "";
$d_unit[7]=$array_unit[7] ?? "";
$d_unit[8]=$array_unit[8] ?? "";
$d_unit[9]=$array_unit[9] ?? "";
$d_unit[10]=$array_unit[10] ?? "";
$d_unit[11]=$array_unit[11] ?? "";
$d_unit[12]=$array_unit[12] ?? "";
$d_unit[13]=$array_unit[13] ?? "";
$d_unit[14]=$array_unit[14] ?? "";
$d_unit[15]=$array_unit[15] ?? "";
$d_unit[16]=$array_unit[16] ?? "";
$d_unit[17]=$array_unit[17] ?? "";
$d_unit[18]=$array_unit[18] ?? "";
$d_unit[19]=$array_unit[19] ?? "";


switch($courses['semester']){
case "FirstSemester Year One":edit_unit_1($d_unit,$id);break;
case "SecondSemester Year One":edit_unit_2($d_unit,$id);break;
case "FirstSemester Year Two":edit_unit_3($d_unit,$id);break;
case "SecondSemester Year Two":edit_unit_4($d_unit,$id);break;
case "FirstSemester Year Three":edit_unit_5($d_unit,$id);break;
case "SecondSemester Year Three":edit_unit_6($d_unit,$id);break;
case "FirstSemester Year Four":edit_unit_7($d_unit,$id);break;
case "SecondSemester Year Four":edit_unit_8($d_unit,$id);break;


}

?>