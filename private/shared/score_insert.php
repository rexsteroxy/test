<?php
$id=$_POST['mat_number'];
$array_score=$_POST['score'] ?? "";;
$d_score=[];
$courses=[];
$courses['matnumber']=$_POST['mat_number'] ?? '';
$courses['semester']=$_POST['semester'] ?? '';
$d_score[0]=$array_score[0] ?? "";
$d_score[1]=$array_score[1] ?? "";
$d_score[2]=$array_score[2] ?? "";
$d_score[3]=$array_score[3] ?? "";
$d_score[4]=$array_score[4] ?? "";
$d_score[5]=$array_score[5] ?? "";
$d_score[6]=$array_score[6] ?? "";
$d_score[7]=$array_score[7] ?? "";
$d_score[8]=$array_score[8] ?? "";
$d_score[9]=$array_score[9] ?? "";
$d_score[10]=$array_score[10] ?? "";
$d_score[11]=$array_score[11] ?? "";
$d_score[12]=$array_score[12] ?? "";
$d_score[13]=$array_score[13] ?? "";
$d_score[14]=$array_score[14] ?? "";
$d_score[15]=$array_score[15] ?? "";
$d_score[16]=$array_score[16] ?? "";
$d_score[17]=$array_score[17] ?? "";
$d_score[18]=$array_score[18] ?? "";
$d_score[19]=$array_score[19] ?? "";


switch($courses['semester']){
case "FirstSemester Year One":edit_score_1($d_score,$id);break;
case "SecondSemester Year One":edit_score_2($d_score,$id);break;
case "FirstSemester Year Two":edit_score_3($d_score,$id);break;
case "SecondSemester Year Two":edit_score_4($d_score,$id);break;
case "FirstSemester Year Three":edit_score_5($d_score,$id);break;
case "SecondSemester Year Three":edit_score_6($d_score,$id);break;
case "FirstSemester Year Four":edit_score_7($d_score,$id);break;
case "SecondSemester Year Four":edit_score_8($d_score,$id);break;


}

?>