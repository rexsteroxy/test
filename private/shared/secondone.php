<?php
$id=$_SESSION['matnumber'];
$array_course=$_POST['course'] ?? "";
$d_courses=[];
$courses=[];
$courses['matnumber']=$_SESSION['matnumber'] ?? '';
$courses['semester']=$_POST['semester'] ?? '';
$d_courses[0]=$array_course[0] ?? "NoCourseFound";
$d_courses[1]=$array_course[1] ?? "NoCourseFound";
$d_courses[2]=$array_course[2] ?? "NoCourseFound";
$d_courses[3]=$array_course[3] ?? "NoCourseFound";
$d_courses[4]=$array_course[4] ?? "NoCourseFound";
$d_courses[5]=$array_course[5] ?? "NoCourseFound";
$d_courses[6]=$array_course[6] ?? "NoCourseFound";
$d_courses[7]=$array_course[7] ?? "NoCourseFound";
$d_courses[8]=$array_course[8] ?? "NoCourseFound";
$d_courses[9]=$array_course[9] ?? "NoCourseFound";
$d_courses[10]=$array_course[10] ?? "NoCourseFound";
$d_courses[11]=$array_course[11] ?? "NoCourseFound";
$d_courses[12]=$array_course[12] ?? "NoCourseFound";
$d_courses[13]=$array_course[13] ?? "NoCourseFound";
$d_courses[14]=$array_course[14] ?? "NoCourseFound";
$d_courses[15]=$array_course[15] ?? "NoCourseFound";
$d_courses[16]=$array_course[16] ?? "NoCourseFound";
$d_courses[17]=$array_course[17] ?? "NoCourseFound";
$d_courses[18]=$array_course[18] ?? "NoCourseFound";
$d_courses[19]=$array_course[19] ?? "NoCourseFound";

$dt_courses=find_course_by_matnumber($id);
//checking to see wether table column matnumber is set
if(!isset($dt_courses['matnumber'])){
insert_course_matnumber($courses);
}
switch($courses['semester']){
case "SecondSemester Year One":edit_course_2($d_courses,$id);break;

}
?>