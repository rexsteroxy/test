<?php
//for inserting grade to semester  table
function edit_grade_1($d_grade,$id){
    global $db;
  
    $sql = "UPDATE firstsemester SET ";
    $sql .= "grade1='" . db_escape($db, $d_grade[0]). "',";
    $sql .= "grade2='" . db_escape($db, $d_grade[1]). "',";
    $sql .= "grade3='" . db_escape($db, $d_grade[2]). "',";
    $sql .= "grade4='" . db_escape($db, $d_grade[3]). "',";
    $sql .= "grade5='" . db_escape($db, $d_grade[4]). "',";
    $sql .= "grade6='" . db_escape($db, $d_grade[5]). "',";
    $sql .= "grade7='" . db_escape($db, $d_grade[6]). "',";
    $sql .= "grade8='" . db_escape($db, $d_grade[7]). "',";
    $sql .= "grade9='" . db_escape($db, $d_grade[8]). "',";
    $sql .= "grade10='" . db_escape($db, $d_grade[9]). "',";
    $sql .= "grade11='" . db_escape($db, $d_grade[10]). "',";
    $sql .= "grade12='" . db_escape($db, $d_grade[11]). "',";
    $sql .= "grade13='" . db_escape($db, $d_grade[12]). "',";
    $sql .= "grade14='" . db_escape($db, $d_grade[13]). "',";
    $sql .= "grade15='" . db_escape($db, $d_grade[14]). "',";
    $sql .= "grade16='" . db_escape($db, $d_grade[15]). "',";
    $sql .= "grade17='" . db_escape($db, $d_grade[16]). "',";
    $sql .= "grade18='" . db_escape($db, $d_grade[17]). "',";
    $sql .= "grade19='" . db_escape($db, $d_grade[18]). "',";
    $sql .= "grade20='" . db_escape($db, $d_grade[19]). "'";
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
  
function edit_grade_2($d_grade,$id){
    global $db;
  
    $sql = "UPDATE secondsemester SET ";
    $sql .= "grade1='" . db_escape($db, $d_grade[0]). "',";
    $sql .= "grade2='" . db_escape($db, $d_grade[1]). "',";
    $sql .= "grade3='" . db_escape($db, $d_grade[2]). "',";
    $sql .= "grade4='" . db_escape($db, $d_grade[3]). "',";
    $sql .= "grade5='" . db_escape($db, $d_grade[4]). "',";
    $sql .= "grade6='" . db_escape($db, $d_grade[5]). "',";
    $sql .= "grade7='" . db_escape($db, $d_grade[6]). "',";
    $sql .= "grade8='" . db_escape($db, $d_grade[7]). "',";
    $sql .= "grade9='" . db_escape($db, $d_grade[8]). "',";
    $sql .= "grade10='" . db_escape($db, $d_grade[9]). "',";
    $sql .= "grade11='" . db_escape($db, $d_grade[10]). "',";
    $sql .= "grade12='" . db_escape($db, $d_grade[11]). "',";
    $sql .= "grade13='" . db_escape($db, $d_grade[12]). "',";
    $sql .= "grade14='" . db_escape($db, $d_grade[13]). "',";
    $sql .= "grade15='" . db_escape($db, $d_grade[14]). "',";
    $sql .= "grade16='" . db_escape($db, $d_grade[15]). "',";
    $sql .= "grade17='" . db_escape($db, $d_grade[16]). "',";
    $sql .= "grade18='" . db_escape($db, $d_grade[17]). "',";
    $sql .= "grade19='" . db_escape($db, $d_grade[18]). "',";
    $sql .= "grade20='" . db_escape($db, $d_grade[19]). "'";
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
function edit_grade_3($d_grade,$id){
    global $db;
  
    $sql = "UPDATE firstsemester2 SET ";
    $sql .= "grade1='" . db_escape($db, $d_grade[0]). "',";
    $sql .= "grade2='" . db_escape($db, $d_grade[1]). "',";
    $sql .= "grade3='" . db_escape($db, $d_grade[2]). "',";
    $sql .= "grade4='" . db_escape($db, $d_grade[3]). "',";
    $sql .= "grade5='" . db_escape($db, $d_grade[4]). "',";
    $sql .= "grade6='" . db_escape($db, $d_grade[5]). "',";
    $sql .= "grade7='" . db_escape($db, $d_grade[6]). "',";
    $sql .= "grade8='" . db_escape($db, $d_grade[7]). "',";
    $sql .= "grade9='" . db_escape($db, $d_grade[8]). "',";
    $sql .= "grade10='" . db_escape($db, $d_grade[9]). "',";
    $sql .= "grade11='" . db_escape($db, $d_grade[10]). "',";
    $sql .= "grade12='" . db_escape($db, $d_grade[11]). "',";
    $sql .= "grade13='" . db_escape($db, $d_grade[12]). "',";
    $sql .= "grade14='" . db_escape($db, $d_grade[13]). "',";
    $sql .= "grade15='" . db_escape($db, $d_grade[14]). "',";
    $sql .= "grade16='" . db_escape($db, $d_grade[15]). "',";
    $sql .= "grade17='" . db_escape($db, $d_grade[16]). "',";
    $sql .= "grade18='" . db_escape($db, $d_grade[17]). "',";
    $sql .= "grade19='" . db_escape($db, $d_grade[18]). "',";
    $sql .= "grade20='" . db_escape($db, $d_grade[19]). "'";
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
function edit_grade_4($d_grade,$id){
    global $db;
  
    $sql = "UPDATE secondsemester2 SET ";
    $sql .= "grade1='" . db_escape($db, $d_grade[0]). "',";
    $sql .= "grade2='" . db_escape($db, $d_grade[1]). "',";
    $sql .= "grade3='" . db_escape($db, $d_grade[2]). "',";
    $sql .= "grade4='" . db_escape($db, $d_grade[3]). "',";
    $sql .= "grade5='" . db_escape($db, $d_grade[4]). "',";
    $sql .= "grade6='" . db_escape($db, $d_grade[5]). "',";
    $sql .= "grade7='" . db_escape($db, $d_grade[6]). "',";
    $sql .= "grade8='" . db_escape($db, $d_grade[7]). "',";
    $sql .= "grade9='" . db_escape($db, $d_grade[8]). "',";
    $sql .= "grade10='" . db_escape($db, $d_grade[9]). "',";
    $sql .= "grade11='" . db_escape($db, $d_grade[10]). "',";
    $sql .= "grade12='" . db_escape($db, $d_grade[11]). "',";
    $sql .= "grade13='" . db_escape($db, $d_grade[12]). "',";
    $sql .= "grade14='" . db_escape($db, $d_grade[13]). "',";
    $sql .= "grade15='" . db_escape($db, $d_grade[14]). "',";
    $sql .= "grade16='" . db_escape($db, $d_grade[15]). "',";
    $sql .= "grade17='" . db_escape($db, $d_grade[16]). "',";
    $sql .= "grade18='" . db_escape($db, $d_grade[17]). "',";
    $sql .= "grade19='" . db_escape($db, $d_grade[18]). "',";
    $sql .= "grade20='" . db_escape($db, $d_grade[19]). "'";
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
function edit_grade_5($d_grade,$id){
    global $db;
  
    $sql = "UPDATE firstsemester3 SET ";
    $sql .= "grade1='" . db_escape($db, $d_grade[0]). "',";
    $sql .= "grade2='" . db_escape($db, $d_grade[1]). "',";
    $sql .= "grade3='" . db_escape($db, $d_grade[2]). "',";
    $sql .= "grade4='" . db_escape($db, $d_grade[3]). "',";
    $sql .= "grade5='" . db_escape($db, $d_grade[4]). "',";
    $sql .= "grade6='" . db_escape($db, $d_grade[5]). "',";
    $sql .= "grade7='" . db_escape($db, $d_grade[6]). "',";
    $sql .= "grade8='" . db_escape($db, $d_grade[7]). "',";
    $sql .= "grade9='" . db_escape($db, $d_grade[8]). "',";
    $sql .= "grade10='" . db_escape($db, $d_grade[9]). "',";
    $sql .= "grade11='" . db_escape($db, $d_grade[10]). "',";
    $sql .= "grade12='" . db_escape($db, $d_grade[11]). "',";
    $sql .= "grade13='" . db_escape($db, $d_grade[12]). "',";
    $sql .= "grade14='" . db_escape($db, $d_grade[13]). "',";
    $sql .= "grade15='" . db_escape($db, $d_grade[14]). "',";
    $sql .= "grade16='" . db_escape($db, $d_grade[15]). "',";
    $sql .= "grade17='" . db_escape($db, $d_grade[16]). "',";
    $sql .= "grade18='" . db_escape($db, $d_grade[17]). "',";
    $sql .= "grade19='" . db_escape($db, $d_grade[18]). "',";
    $sql .= "grade20='" . db_escape($db, $d_grade[19]). "'";
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
function edit_grade_6($d_grade,$id){
    global $db;
  
    $sql = "UPDATE secondsemester3 SET ";
    $sql .= "grade1='" . db_escape($db, $d_grade[0]). "',";
    $sql .= "grade2='" . db_escape($db, $d_grade[1]). "',";
    $sql .= "grade3='" . db_escape($db, $d_grade[2]). "',";
    $sql .= "grade4='" . db_escape($db, $d_grade[3]). "',";
    $sql .= "grade5='" . db_escape($db, $d_grade[4]). "',";
    $sql .= "grade6='" . db_escape($db, $d_grade[5]). "',";
    $sql .= "grade7='" . db_escape($db, $d_grade[6]). "',";
    $sql .= "grade8='" . db_escape($db, $d_grade[7]). "',";
    $sql .= "grade9='" . db_escape($db, $d_grade[8]). "',";
    $sql .= "grade10='" . db_escape($db, $d_grade[9]). "',";
    $sql .= "grade11='" . db_escape($db, $d_grade[10]). "',";
    $sql .= "grade12='" . db_escape($db, $d_grade[11]). "',";
    $sql .= "grade13='" . db_escape($db, $d_grade[12]). "',";
    $sql .= "grade14='" . db_escape($db, $d_grade[13]). "',";
    $sql .= "grade15='" . db_escape($db, $d_grade[14]). "',";
    $sql .= "grade16='" . db_escape($db, $d_grade[15]). "',";
    $sql .= "grade17='" . db_escape($db, $d_grade[16]). "',";
    $sql .= "grade18='" . db_escape($db, $d_grade[17]). "',";
    $sql .= "grade19='" . db_escape($db, $d_grade[18]). "',";
    $sql .= "grade20='" . db_escape($db, $d_grade[19]). "'";
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
function edit_grade_7($d_grade,$id){
    global $db;
  
    $sql = "UPDATE firstsemester4 SET ";
    $sql .= "grade1='" . db_escape($db, $d_grade[0]). "',";
    $sql .= "grade2='" . db_escape($db, $d_grade[1]). "',";
    $sql .= "grade3='" . db_escape($db, $d_grade[2]). "',";
    $sql .= "grade4='" . db_escape($db, $d_grade[3]). "',";
    $sql .= "grade5='" . db_escape($db, $d_grade[4]). "',";
    $sql .= "grade6='" . db_escape($db, $d_grade[5]). "',";
    $sql .= "grade7='" . db_escape($db, $d_grade[6]). "',";
    $sql .= "grade8='" . db_escape($db, $d_grade[7]). "',";
    $sql .= "grade9='" . db_escape($db, $d_grade[8]). "',";
    $sql .= "grade10='" . db_escape($db, $d_grade[9]). "',";
    $sql .= "grade11='" . db_escape($db, $d_grade[10]). "',";
    $sql .= "grade12='" . db_escape($db, $d_grade[11]). "',";
    $sql .= "grade13='" . db_escape($db, $d_grade[12]). "',";
    $sql .= "grade14='" . db_escape($db, $d_grade[13]). "',";
    $sql .= "grade15='" . db_escape($db, $d_grade[14]). "',";
    $sql .= "grade16='" . db_escape($db, $d_grade[15]). "',";
    $sql .= "grade17='" . db_escape($db, $d_grade[16]). "',";
    $sql .= "grade18='" . db_escape($db, $d_grade[17]). "',";
    $sql .= "grade19='" . db_escape($db, $d_grade[18]). "',";
    $sql .= "grade20='" . db_escape($db, $d_grade[19]). "'";
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
function edit_grade_8($d_grade,$id){
    global $db;
  
    $sql = "UPDATE secondsemester4 SET ";
    $sql .= "grade1='" . db_escape($db, $d_grade[0]). "',";
    $sql .= "grade2='" . db_escape($db, $d_grade[1]). "',";
    $sql .= "grade3='" . db_escape($db, $d_grade[2]). "',";
    $sql .= "grade4='" . db_escape($db, $d_grade[3]). "',";
    $sql .= "grade5='" . db_escape($db, $d_grade[4]). "',";
    $sql .= "grade6='" . db_escape($db, $d_grade[5]). "',";
    $sql .= "grade7='" . db_escape($db, $d_grade[6]). "',";
    $sql .= "grade8='" . db_escape($db, $d_grade[7]). "',";
    $sql .= "grade9='" . db_escape($db, $d_grade[8]). "',";
    $sql .= "grade10='" . db_escape($db, $d_grade[9]). "',";
    $sql .= "grade11='" . db_escape($db, $d_grade[10]). "',";
    $sql .= "grade12='" . db_escape($db, $d_grade[11]). "',";
    $sql .= "grade13='" . db_escape($db, $d_grade[12]). "',";
    $sql .= "grade14='" . db_escape($db, $d_grade[13]). "',";
    $sql .= "grade15='" . db_escape($db, $d_grade[14]). "',";
    $sql .= "grade16='" . db_escape($db, $d_grade[15]). "',";
    $sql .= "grade17='" . db_escape($db, $d_grade[16]). "',";
    $sql .= "grade18='" . db_escape($db, $d_grade[17]). "',";
    $sql .= "grade19='" . db_escape($db, $d_grade[18]). "',";
    $sql .= "grade20='" . db_escape($db, $d_grade[19]). "'";
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