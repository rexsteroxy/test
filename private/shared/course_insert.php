<?php
$id=$_POST['mat_number'];

$array_course=$_POST['course'] ?? "";
$d_courses=[];
$courses=[];
$courses['matnumber']=$_POST['mat_number'] ?? '';
$courses['semester']=$_POST['semester'] ?? '';
$d_courses[0]=$array_course[0] ?? "";
$d_courses[1]=$array_course[1] ?? "";
$d_courses[2]=$array_course[2] ?? "";
$d_courses[3]=$array_course[3] ?? "";
$d_courses[4]=$array_course[4] ?? "";
$d_courses[5]=$array_course[5] ?? "";
$d_courses[6]=$array_course[6] ?? "";
$d_courses[7]=$array_course[7] ?? "";
$d_courses[8]=$array_course[8] ?? "";
$d_courses[9]=$array_course[9] ?? "";
$d_courses[10]=$array_course[10] ?? "";
$d_courses[11]=$array_course[11] ?? "";
$d_courses[12]=$array_course[12] ?? "";
$d_courses[13]=$array_course[13] ?? "";
$d_courses[14]=$array_course[14] ?? "";
$d_courses[15]=$array_course[15] ?? "";
$d_courses[16]=$array_course[16] ?? "";
$d_courses[17]=$array_course[17] ?? "";
$d_courses[18]=$array_course[18] ?? "";
$d_courses[19]=$array_course[19] ?? "";

switch($courses['semester']){
case "FirstSemester Year One":
$dt_courses=find_course_by_matnumber_1($id);
//checking to see wether table column matnumber is set
if(!isset($dt_courses['matnumber'])){
insert_course_matnumber_1($courses);
}
edit_course_1($d_courses,$id);
break;
case "SecondSemester Year One":
$dt_courses=find_course_by_matnumber_2($id);
//checking to see wether table column matnumber is set
if(!isset($dt_courses['matnumber'])){
insert_course_matnumber_2($courses);
}
edit_course_2($d_courses,$id);
break;
case "FirstSemester Year Two":
$dt_courses=find_course_by_matnumber_3($id);
//checking to see wether table column matnumber is set
if(!isset($dt_courses['matnumber'])){
insert_course_matnumber_3($courses);
}
edit_course_3($d_courses,$id);
break;
  case "SecondSemester Year Two":
  $dt_courses=find_course_by_matnumber_4($id);
//checking to see wether table column matnumber is set
if(!isset($dt_courses['matnumber'])){
insert_course_matnumber_4($courses);
}
  edit_course_4($d_courses,$id);
  break;
  case "FirstSemester Year Three":
  $dt_courses=find_course_by_matnumber_5($id);
//checking to see wether table column matnumber is set
if(!isset($dt_courses['matnumber'])){
insert_course_matnumber_5($courses);
}
  edit_course_5($d_courses,$id);
  break;
  case "SecondSemester Year Three":
  $dt_courses=find_course_by_matnumber_6($id);
//checking to see wether table column matnumber is set
if(!isset($dt_courses['matnumber'])){
insert_course_matnumber_6($courses);
}
  edit_course_6($d_courses,$id);
  break;
  case "FirstSemester Year Four":
  $dt_courses=find_course_by_matnumber_7($id);
//checking to see wether table column matnumber is set
if(!isset($dt_courses['matnumber'])){
insert_course_matnumber_7($courses);
}
  edit_course_7($d_courses,$id);
  break;
  case "SecondSemester Year Four":
  $dt_courses=find_course_by_matnumber_8($id);
//checking to see wether table column matnumber is set
if(!isset($dt_courses['matnumber'])){
insert_course_matnumber_8($courses);
}
  edit_course_8($d_courses,$id);
  break;
}
?>