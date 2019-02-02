<?php
//for inserting unit to semester  table
function edit_unit_1($d_unit,$id){
    global $db;
  
    $sql = "UPDATE firstsemester SET ";
    $sql .= "unit1='" . db_escape($db, $d_unit[0]). "',";
    $sql .= "unit2='" . db_escape($db, $d_unit[1]). "',";
    $sql .= "unit3='" . db_escape($db, $d_unit[2]). "',";
    $sql .= "unit4='" . db_escape($db, $d_unit[3]). "',";
    $sql .= "unit5='" . db_escape($db, $d_unit[4]). "',";
    $sql .= "unit6='" . db_escape($db, $d_unit[5]). "',";
    $sql .= "unit7='" . db_escape($db, $d_unit[6]). "',";
    $sql .= "unit8='" . db_escape($db, $d_unit[7]). "',";
    $sql .= "unit9='" . db_escape($db, $d_unit[8]). "',";
    $sql .= "unit10='" . db_escape($db, $d_unit[9]). "',";
    $sql .= "unit11='" . db_escape($db, $d_unit[10]). "',";
    $sql .= "unit12='" . db_escape($db, $d_unit[11]). "',";
    $sql .= "unit13='" . db_escape($db, $d_unit[12]). "',";
    $sql .= "unit14='" . db_escape($db, $d_unit[13]). "',";
    $sql .= "unit15='" . db_escape($db, $d_unit[14]). "',";
    $sql .= "unit16='" . db_escape($db, $d_unit[15]). "',";
    $sql .= "unit17='" . db_escape($db, $d_unit[16]). "',";
    $sql .= "unit18='" . db_escape($db, $d_unit[17]). "',";
    $sql .= "unit19='" . db_escape($db, $d_unit[18]). "',";
    $sql .= "unit20='" . db_escape($db, $d_unit[19]). "'";
    $sql .= "WHERE matnumber='" . $id ."'";
    $sql .= "LIMIT 1";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
  }
  
function edit_unit_2($d_unit,$id){
    global $db;
  
    $sql = "UPDATE secondsemester SET ";
    $sql .= "unit1='" . db_escape($db, $d_unit[0]). "',";
    $sql .= "unit2='" . db_escape($db, $d_unit[1]). "',";
    $sql .= "unit3='" . db_escape($db, $d_unit[2]). "',";
    $sql .= "unit4='" . db_escape($db, $d_unit[3]). "',";
    $sql .= "unit5='" . db_escape($db, $d_unit[4]). "',";
    $sql .= "unit6='" . db_escape($db, $d_unit[5]). "',";
    $sql .= "unit7='" . db_escape($db, $d_unit[6]). "',";
    $sql .= "unit8='" . db_escape($db, $d_unit[7]). "',";
    $sql .= "unit9='" . db_escape($db, $d_unit[8]). "',";
    $sql .= "unit10='" . db_escape($db, $d_unit[9]). "',";
    $sql .= "unit11='" . db_escape($db, $d_unit[10]). "',";
    $sql .= "unit12='" . db_escape($db, $d_unit[11]). "',";
    $sql .= "unit13='" . db_escape($db, $d_unit[12]). "',";
    $sql .= "unit14='" . db_escape($db, $d_unit[13]). "',";
    $sql .= "unit15='" . db_escape($db, $d_unit[14]). "',";
    $sql .= "unit16='" . db_escape($db, $d_unit[15]). "',";
    $sql .= "unit17='" . db_escape($db, $d_unit[16]). "',";
    $sql .= "unit18='" . db_escape($db, $d_unit[17]). "',";
    $sql .= "unit19='" . db_escape($db, $d_unit[18]). "',";
    $sql .= "unit20='" . db_escape($db, $d_unit[19]). "'";
    $sql .= "WHERE matnumber='" . $id ."'";
    $sql .= "LIMIT 1";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
  }
function edit_unit_3($d_unit,$id){
    global $db;
  
    $sql = "UPDATE firstsemester2 SET ";
    $sql .= "unit1='" . db_escape($db, $d_unit[0]). "',";
    $sql .= "unit2='" . db_escape($db, $d_unit[1]). "',";
    $sql .= "unit3='" . db_escape($db, $d_unit[2]). "',";
    $sql .= "unit4='" . db_escape($db, $d_unit[3]). "',";
    $sql .= "unit5='" . db_escape($db, $d_unit[4]). "',";
    $sql .= "unit6='" . db_escape($db, $d_unit[5]). "',";
    $sql .= "unit7='" . db_escape($db, $d_unit[6]). "',";
    $sql .= "unit8='" . db_escape($db, $d_unit[7]). "',";
    $sql .= "unit9='" . db_escape($db, $d_unit[8]). "',";
    $sql .= "unit10='" . db_escape($db, $d_unit[9]). "',";
    $sql .= "unit11='" . db_escape($db, $d_unit[10]). "',";
    $sql .= "unit12='" . db_escape($db, $d_unit[11]). "',";
    $sql .= "unit13='" . db_escape($db, $d_unit[12]). "',";
    $sql .= "unit14='" . db_escape($db, $d_unit[13]). "',";
    $sql .= "unit15='" . db_escape($db, $d_unit[14]). "',";
    $sql .= "unit16='" . db_escape($db, $d_unit[15]). "',";
    $sql .= "unit17='" . db_escape($db, $d_unit[16]). "',";
    $sql .= "unit18='" . db_escape($db, $d_unit[17]). "',";
    $sql .= "unit19='" . db_escape($db, $d_unit[18]). "',";
    $sql .= "unit20='" . db_escape($db, $d_unit[19]). "'";
    $sql .= "WHERE matnumber='" . $id ."'";
    $sql .= "LIMIT 1";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
  }
function edit_unit_4($d_unit,$id){
    global $db;
  
    $sql = "UPDATE secondsemester2 SET ";
    $sql .= "unit1='" . db_escape($db, $d_unit[0]). "',";
    $sql .= "unit2='" . db_escape($db, $d_unit[1]). "',";
    $sql .= "unit3='" . db_escape($db, $d_unit[2]). "',";
    $sql .= "unit4='" . db_escape($db, $d_unit[3]). "',";
    $sql .= "unit5='" . db_escape($db, $d_unit[4]). "',";
    $sql .= "unit6='" . db_escape($db, $d_unit[5]). "',";
    $sql .= "unit7='" . db_escape($db, $d_unit[6]). "',";
    $sql .= "unit8='" . db_escape($db, $d_unit[7]). "',";
    $sql .= "unit9='" . db_escape($db, $d_unit[8]). "',";
    $sql .= "unit10='" . db_escape($db, $d_unit[9]). "',";
    $sql .= "unit11='" . db_escape($db, $d_unit[10]). "',";
    $sql .= "unit12='" . db_escape($db, $d_unit[11]). "',";
    $sql .= "unit13='" . db_escape($db, $d_unit[12]). "',";
    $sql .= "unit14='" . db_escape($db, $d_unit[13]). "',";
    $sql .= "unit15='" . db_escape($db, $d_unit[14]). "',";
    $sql .= "unit16='" . db_escape($db, $d_unit[15]). "',";
    $sql .= "unit17='" . db_escape($db, $d_unit[16]). "',";
    $sql .= "unit18='" . db_escape($db, $d_unit[17]). "',";
    $sql .= "unit19='" . db_escape($db, $d_unit[18]). "',";
    $sql .= "unit20='" . db_escape($db, $d_unit[19]). "'";
    $sql .= "WHERE matnumber='" . $id ."'";
    $sql .= "LIMIT 1";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
  }
function edit_unit_5($d_unit,$id){
    global $db;
  
    $sql = "UPDATE firstsemester3 SET ";
    $sql .= "unit1='" . db_escape($db, $d_unit[0]). "',";
    $sql .= "unit2='" . db_escape($db, $d_unit[1]). "',";
    $sql .= "unit3='" . db_escape($db, $d_unit[2]). "',";
    $sql .= "unit4='" . db_escape($db, $d_unit[3]). "',";
    $sql .= "unit5='" . db_escape($db, $d_unit[4]). "',";
    $sql .= "unit6='" . db_escape($db, $d_unit[5]). "',";
    $sql .= "unit7='" . db_escape($db, $d_unit[6]). "',";
    $sql .= "unit8='" . db_escape($db, $d_unit[7]). "',";
    $sql .= "unit9='" . db_escape($db, $d_unit[8]). "',";
    $sql .= "unit10='" . db_escape($db, $d_unit[9]). "',";
    $sql .= "unit11='" . db_escape($db, $d_unit[10]). "',";
    $sql .= "unit12='" . db_escape($db, $d_unit[11]). "',";
    $sql .= "unit13='" . db_escape($db, $d_unit[12]). "',";
    $sql .= "unit14='" . db_escape($db, $d_unit[13]). "',";
    $sql .= "unit15='" . db_escape($db, $d_unit[14]). "',";
    $sql .= "unit16='" . db_escape($db, $d_unit[15]). "',";
    $sql .= "unit17='" . db_escape($db, $d_unit[16]). "',";
    $sql .= "unit18='" . db_escape($db, $d_unit[17]). "',";
    $sql .= "unit19='" . db_escape($db, $d_unit[18]). "',";
    $sql .= "unit20='" . db_escape($db, $d_unit[19]). "'";
    $sql .= "WHERE matnumber='" . $id ."'";
    $sql .= "LIMIT 1";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
  }
function edit_unit_6($d_unit,$id){
    global $db;
  
    $sql = "UPDATE secondsemester3 SET ";
    $sql .= "unit1='" . db_escape($db, $d_unit[0]). "',";
    $sql .= "unit2='" . db_escape($db, $d_unit[1]). "',";
    $sql .= "unit3='" . db_escape($db, $d_unit[2]). "',";
    $sql .= "unit4='" . db_escape($db, $d_unit[3]). "',";
    $sql .= "unit5='" . db_escape($db, $d_unit[4]). "',";
    $sql .= "unit6='" . db_escape($db, $d_unit[5]). "',";
    $sql .= "unit7='" . db_escape($db, $d_unit[6]). "',";
    $sql .= "unit8='" . db_escape($db, $d_unit[7]). "',";
    $sql .= "unit9='" . db_escape($db, $d_unit[8]). "',";
    $sql .= "unit10='" . db_escape($db, $d_unit[9]). "',";
    $sql .= "unit11='" . db_escape($db, $d_unit[10]). "',";
    $sql .= "unit12='" . db_escape($db, $d_unit[11]). "',";
    $sql .= "unit13='" . db_escape($db, $d_unit[12]). "',";
    $sql .= "unit14='" . db_escape($db, $d_unit[13]). "',";
    $sql .= "unit15='" . db_escape($db, $d_unit[14]). "',";
    $sql .= "unit16='" . db_escape($db, $d_unit[15]). "',";
    $sql .= "unit17='" . db_escape($db, $d_unit[16]). "',";
    $sql .= "unit18='" . db_escape($db, $d_unit[17]). "',";
    $sql .= "unit19='" . db_escape($db, $d_unit[18]). "',";
    $sql .= "unit20='" . db_escape($db, $d_unit[19]). "'";
    $sql .= "WHERE matnumber='" . $id ."'";
    $sql .= "LIMIT 1";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
  }
function edit_unit_7($d_unit,$id){
    global $db;
  
    $sql = "UPDATE firstsemester4 SET ";
    $sql .= "unit1='" . db_escape($db, $d_unit[0]). "',";
    $sql .= "unit2='" . db_escape($db, $d_unit[1]). "',";
    $sql .= "unit3='" . db_escape($db, $d_unit[2]). "',";
    $sql .= "unit4='" . db_escape($db, $d_unit[3]). "',";
    $sql .= "unit5='" . db_escape($db, $d_unit[4]). "',";
    $sql .= "unit6='" . db_escape($db, $d_unit[5]). "',";
    $sql .= "unit7='" . db_escape($db, $d_unit[6]). "',";
    $sql .= "unit8='" . db_escape($db, $d_unit[7]). "',";
    $sql .= "unit9='" . db_escape($db, $d_unit[8]). "',";
    $sql .= "unit10='" . db_escape($db, $d_unit[9]). "',";
    $sql .= "unit11='" . db_escape($db, $d_unit[10]). "',";
    $sql .= "unit12='" . db_escape($db, $d_unit[11]). "',";
    $sql .= "unit13='" . db_escape($db, $d_unit[12]). "',";
    $sql .= "unit14='" . db_escape($db, $d_unit[13]). "',";
    $sql .= "unit15='" . db_escape($db, $d_unit[14]). "',";
    $sql .= "unit16='" . db_escape($db, $d_unit[15]). "',";
    $sql .= "unit17='" . db_escape($db, $d_unit[16]). "',";
    $sql .= "unit18='" . db_escape($db, $d_unit[17]). "',";
    $sql .= "unit19='" . db_escape($db, $d_unit[18]). "',";
    $sql .= "unit20='" . db_escape($db, $d_unit[19]). "'";
    $sql .= "WHERE matnumber='" . $id ."'";
    $sql .= "LIMIT 1";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
  }
function edit_unit_8($d_unit,$id){
    global $db;
  
    $sql = "UPDATE secondsemester4 SET ";
    $sql .= "unit1='" . db_escape($db, $d_unit[0]). "',";
    $sql .= "unit2='" . db_escape($db, $d_unit[1]). "',";
    $sql .= "unit3='" . db_escape($db, $d_unit[2]). "',";
    $sql .= "unit4='" . db_escape($db, $d_unit[3]). "',";
    $sql .= "unit5='" . db_escape($db, $d_unit[4]). "',";
    $sql .= "unit6='" . db_escape($db, $d_unit[5]). "',";
    $sql .= "unit7='" . db_escape($db, $d_unit[6]). "',";
    $sql .= "unit8='" . db_escape($db, $d_unit[7]). "',";
    $sql .= "unit9='" . db_escape($db, $d_unit[8]). "',";
    $sql .= "unit10='" . db_escape($db, $d_unit[9]). "',";
    $sql .= "unit11='" . db_escape($db, $d_unit[10]). "',";
    $sql .= "unit12='" . db_escape($db, $d_unit[11]). "',";
    $sql .= "unit13='" . db_escape($db, $d_unit[12]). "',";
    $sql .= "unit14='" . db_escape($db, $d_unit[13]). "',";
    $sql .= "unit15='" . db_escape($db, $d_unit[14]). "',";
    $sql .= "unit16='" . db_escape($db, $d_unit[15]). "',";
    $sql .= "unit17='" . db_escape($db, $d_unit[16]). "',";
    $sql .= "unit18='" . db_escape($db, $d_unit[17]). "',";
    $sql .= "unit19='" . db_escape($db, $d_unit[18]). "',";
    $sql .= "unit20='" . db_escape($db, $d_unit[19]). "'";
    $sql .= "WHERE matnumber='" . $id ."'";
    $sql .= "LIMIT 1";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
  }
?>