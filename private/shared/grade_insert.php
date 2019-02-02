<?php
$id=$_POST['mat_number'];
$array_grade=$grade;
$d_grade=[];
$courses=[];
$courses['matnumber']=$_POST['mat_number'] ?? '';
$courses['semester']=$_POST['semester'] ?? '';
$d_grade[0]=$array_grade[0] ?? "";
$d_grade[1]=$array_grade[1] ?? "";
$d_grade[2]=$array_grade[2] ?? "";
$d_grade[3]=$array_grade[3] ?? "";
$d_grade[4]=$array_grade[4] ?? "";
$d_grade[5]=$array_grade[5] ?? "";
$d_grade[6]=$array_grade[6] ?? "";
$d_grade[7]=$array_grade[7] ?? "";
$d_grade[8]=$array_grade[8] ?? "";
$d_grade[9]=$array_grade[9] ?? "";
$d_grade[10]=$array_grade[10] ?? "";
$d_grade[11]=$array_grade[11] ?? "";
$d_grade[12]=$array_grade[12] ?? "";
$d_grade[13]=$array_grade[13] ?? "";
$d_grade[14]=$array_grade[14] ?? "";
$d_grade[15]=$array_grade[15] ?? "";
$d_grade[16]=$array_grade[16] ?? "";
$d_grade[17]=$array_grade[17] ?? "";
$d_grade[18]=$array_grade[18] ?? "";
$d_grade[19]=$array_grade[19] ?? "";


switch($courses['semester']){
case "FirstSemester Year One":edit_grade_1($d_grade,$id);break;
case "SecondSemester Year One":edit_grade_2($d_grade,$id);break;
case "FirstSemester Year Two":edit_grade_3($d_grade,$id);break;
case "SecondSemester Year Two":edit_grade_4($d_grade,$id);break;
case "FirstSemester Year Three":edit_grade_5($d_grade,$id);break;
case "SecondSemester Year Three":edit_grade_6($d_grade,$id);break;
case "FirstSemester Year Four":edit_grade_7($d_grade,$id);break;
case "SecondSemester Year Four":edit_grade_8($d_grade,$id);break;


}

?>