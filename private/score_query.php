<?php
//for inserting score to semester  table
function edit_score_1($d_score,$id){
    global $db;
  
    $sql = "UPDATE firstsemester SET ";
    $sql .= "score1='" . db_escape($db, $d_score[0]). "',";
    $sql .= "score2='" . db_escape($db, $d_score[1]). "',";
    $sql .= "score3='" . db_escape($db, $d_score[2]). "',";
    $sql .= "score4='" . db_escape($db, $d_score[3]). "',";
    $sql .= "score5='" . db_escape($db, $d_score[4]). "',";
    $sql .= "score6='" . db_escape($db, $d_score[5]). "',";
    $sql .= "score7='" . db_escape($db, $d_score[6]). "',";
    $sql .= "score8='" . db_escape($db, $d_score[7]). "',";
    $sql .= "score9='" . db_escape($db, $d_score[8]). "',";
    $sql .= "score10='" . db_escape($db, $d_score[9]). "',";
    $sql .= "score11='" . db_escape($db, $d_score[10]). "',";
    $sql .= "score12='" . db_escape($db, $d_score[11]). "',";
    $sql .= "score13='" . db_escape($db, $d_score[12]). "',";
    $sql .= "score14='" . db_escape($db, $d_score[13]). "',";
    $sql .= "score15='" . db_escape($db, $d_score[14]). "',";
    $sql .= "score16='" . db_escape($db, $d_score[15]). "',";
    $sql .= "score17='" . db_escape($db, $d_score[16]). "',";
    $sql .= "score18='" . db_escape($db, $d_score[17]). "',";
    $sql .= "score19='" . db_escape($db, $d_score[18]). "',";
    $sql .= "score20='" . db_escape($db, $d_score[19]). "'";
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
  
function edit_score_2($d_score,$id){
    global $db;
  
    $sql = "UPDATE secondsemester SET ";
    $sql .= "score1='" . db_escape($db, $d_score[0]). "',";
    $sql .= "score2='" . db_escape($db, $d_score[1]). "',";
    $sql .= "score3='" . db_escape($db, $d_score[2]). "',";
    $sql .= "score4='" . db_escape($db, $d_score[3]). "',";
    $sql .= "score5='" . db_escape($db, $d_score[4]). "',";
    $sql .= "score6='" . db_escape($db, $d_score[5]). "',";
    $sql .= "score7='" . db_escape($db, $d_score[6]). "',";
    $sql .= "score8='" . db_escape($db, $d_score[7]). "',";
    $sql .= "score9='" . db_escape($db, $d_score[8]). "',";
    $sql .= "score10='" . db_escape($db, $d_score[9]). "',";
    $sql .= "score11='" . db_escape($db, $d_score[10]). "',";
    $sql .= "score12='" . db_escape($db, $d_score[11]). "',";
    $sql .= "score13='" . db_escape($db, $d_score[12]). "',";
    $sql .= "score14='" . db_escape($db, $d_score[13]). "',";
    $sql .= "score15='" . db_escape($db, $d_score[14]). "',";
    $sql .= "score16='" . db_escape($db, $d_score[15]). "',";
    $sql .= "score17='" . db_escape($db, $d_score[16]). "',";
    $sql .= "score18='" . db_escape($db, $d_score[17]). "',";
    $sql .= "score19='" . db_escape($db, $d_score[18]). "',";
    $sql .= "score20='" . db_escape($db, $d_score[19]). "'";
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
function edit_score_3($d_score,$id){
    global $db;
  
    $sql = "UPDATE firstsemester2 SET ";
    $sql .= "score1='" . db_escape($db, $d_score[0]). "',";
    $sql .= "score2='" . db_escape($db, $d_score[1]). "',";
    $sql .= "score3='" . db_escape($db, $d_score[2]). "',";
    $sql .= "score4='" . db_escape($db, $d_score[3]). "',";
    $sql .= "score5='" . db_escape($db, $d_score[4]). "',";
    $sql .= "score6='" . db_escape($db, $d_score[5]). "',";
    $sql .= "score7='" . db_escape($db, $d_score[6]). "',";
    $sql .= "score8='" . db_escape($db, $d_score[7]). "',";
    $sql .= "score9='" . db_escape($db, $d_score[8]). "',";
    $sql .= "score10='" . db_escape($db, $d_score[9]). "',";
    $sql .= "score11='" . db_escape($db, $d_score[10]). "',";
    $sql .= "score12='" . db_escape($db, $d_score[11]). "',";
    $sql .= "score13='" . db_escape($db, $d_score[12]). "',";
    $sql .= "score14='" . db_escape($db, $d_score[13]). "',";
    $sql .= "score15='" . db_escape($db, $d_score[14]). "',";
    $sql .= "score16='" . db_escape($db, $d_score[15]). "',";
    $sql .= "score17='" . db_escape($db, $d_score[16]). "',";
    $sql .= "score18='" . db_escape($db, $d_score[17]). "',";
    $sql .= "score19='" . db_escape($db, $d_score[18]). "',";
    $sql .= "score20='" . db_escape($db, $d_score[19]). "'";
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
function edit_score_4($d_score,$id){
    global $db;
  
    $sql = "UPDATE secondsemester2 SET ";
    $sql .= "score1='" . db_escape($db, $d_score[0]). "',";
    $sql .= "score2='" . db_escape($db, $d_score[1]). "',";
    $sql .= "score3='" . db_escape($db, $d_score[2]). "',";
    $sql .= "score4='" . db_escape($db, $d_score[3]). "',";
    $sql .= "score5='" . db_escape($db, $d_score[4]). "',";
    $sql .= "score6='" . db_escape($db, $d_score[5]). "',";
    $sql .= "score7='" . db_escape($db, $d_score[6]). "',";
    $sql .= "score8='" . db_escape($db, $d_score[7]). "',";
    $sql .= "score9='" . db_escape($db, $d_score[8]). "',";
    $sql .= "score10='" . db_escape($db, $d_score[9]). "',";
    $sql .= "score11='" . db_escape($db, $d_score[10]). "',";
    $sql .= "score12='" . db_escape($db, $d_score[11]). "',";
    $sql .= "score13='" . db_escape($db, $d_score[12]). "',";
    $sql .= "score14='" . db_escape($db, $d_score[13]). "',";
    $sql .= "score15='" . db_escape($db, $d_score[14]). "',";
    $sql .= "score16='" . db_escape($db, $d_score[15]). "',";
    $sql .= "score17='" . db_escape($db, $d_score[16]). "',";
    $sql .= "score18='" . db_escape($db, $d_score[17]). "',";
    $sql .= "score19='" . db_escape($db, $d_score[18]). "',";
    $sql .= "score20='" . db_escape($db, $d_score[19]). "'";
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
function edit_score_5($d_score,$id){
    global $db;
  
    $sql = "UPDATE firstsemester3 SET ";
    $sql .= "score1='" . db_escape($db, $d_score[0]). "',";
    $sql .= "score2='" . db_escape($db, $d_score[1]). "',";
    $sql .= "score3='" . db_escape($db, $d_score[2]). "',";
    $sql .= "score4='" . db_escape($db, $d_score[3]). "',";
    $sql .= "score5='" . db_escape($db, $d_score[4]). "',";
    $sql .= "score6='" . db_escape($db, $d_score[5]). "',";
    $sql .= "score7='" . db_escape($db, $d_score[6]). "',";
    $sql .= "score8='" . db_escape($db, $d_score[7]). "',";
    $sql .= "score9='" . db_escape($db, $d_score[8]). "',";
    $sql .= "score10='" . db_escape($db, $d_score[9]). "',";
    $sql .= "score11='" . db_escape($db, $d_score[10]). "',";
    $sql .= "score12='" . db_escape($db, $d_score[11]). "',";
    $sql .= "score13='" . db_escape($db, $d_score[12]). "',";
    $sql .= "score14='" . db_escape($db, $d_score[13]). "',";
    $sql .= "score15='" . db_escape($db, $d_score[14]). "',";
    $sql .= "score16='" . db_escape($db, $d_score[15]). "',";
    $sql .= "score17='" . db_escape($db, $d_score[16]). "',";
    $sql .= "score18='" . db_escape($db, $d_score[17]). "',";
    $sql .= "score19='" . db_escape($db, $d_score[18]). "',";
    $sql .= "score20='" . db_escape($db, $d_score[19]). "'";
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
function edit_score_6($d_score,$id){
    global $db;
  
    $sql = "UPDATE secondsemester3 SET ";
    $sql .= "score1='" . db_escape($db, $d_score[0]). "',";
    $sql .= "score2='" . db_escape($db, $d_score[1]). "',";
    $sql .= "score3='" . db_escape($db, $d_score[2]). "',";
    $sql .= "score4='" . db_escape($db, $d_score[3]). "',";
    $sql .= "score5='" . db_escape($db, $d_score[4]). "',";
    $sql .= "score6='" . db_escape($db, $d_score[5]). "',";
    $sql .= "score7='" . db_escape($db, $d_score[6]). "',";
    $sql .= "score8='" . db_escape($db, $d_score[7]). "',";
    $sql .= "score9='" . db_escape($db, $d_score[8]). "',";
    $sql .= "score10='" . db_escape($db, $d_score[9]). "',";
    $sql .= "score11='" . db_escape($db, $d_score[10]). "',";
    $sql .= "score12='" . db_escape($db, $d_score[11]). "',";
    $sql .= "score13='" . db_escape($db, $d_score[12]). "',";
    $sql .= "score14='" . db_escape($db, $d_score[13]). "',";
    $sql .= "score15='" . db_escape($db, $d_score[14]). "',";
    $sql .= "score16='" . db_escape($db, $d_score[15]). "',";
    $sql .= "score17='" . db_escape($db, $d_score[16]). "',";
    $sql .= "score18='" . db_escape($db, $d_score[17]). "',";
    $sql .= "score19='" . db_escape($db, $d_score[18]). "',";
    $sql .= "score20='" . db_escape($db, $d_score[19]). "'";
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
function edit_score_7($d_score,$id){
    global $db;
  
    $sql = "UPDATE firstsemester4 SET ";
    $sql .= "score1='" . db_escape($db, $d_score[0]). "',";
    $sql .= "score2='" . db_escape($db, $d_score[1]). "',";
    $sql .= "score3='" . db_escape($db, $d_score[2]). "',";
    $sql .= "score4='" . db_escape($db, $d_score[3]). "',";
    $sql .= "score5='" . db_escape($db, $d_score[4]). "',";
    $sql .= "score6='" . db_escape($db, $d_score[5]). "',";
    $sql .= "score7='" . db_escape($db, $d_score[6]). "',";
    $sql .= "score8='" . db_escape($db, $d_score[7]). "',";
    $sql .= "score9='" . db_escape($db, $d_score[8]). "',";
    $sql .= "score10='" . db_escape($db, $d_score[9]). "',";
    $sql .= "score11='" . db_escape($db, $d_score[10]). "',";
    $sql .= "score12='" . db_escape($db, $d_score[11]). "',";
    $sql .= "score13='" . db_escape($db, $d_score[12]). "',";
    $sql .= "score14='" . db_escape($db, $d_score[13]). "',";
    $sql .= "score15='" . db_escape($db, $d_score[14]). "',";
    $sql .= "score16='" . db_escape($db, $d_score[15]). "',";
    $sql .= "score17='" . db_escape($db, $d_score[16]). "',";
    $sql .= "score18='" . db_escape($db, $d_score[17]). "',";
    $sql .= "score19='" . db_escape($db, $d_score[18]). "',";
    $sql .= "score20='" . db_escape($db, $d_score[19]). "'";
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
function edit_score_8($d_score,$id){
    global $db;
  
    $sql = "UPDATE secondsemester4 SET ";
    $sql .= "score1='" . db_escape($db, $d_score[0]). "',";
    $sql .= "score2='" . db_escape($db, $d_score[1]). "',";
    $sql .= "score3='" . db_escape($db, $d_score[2]). "',";
    $sql .= "score4='" . db_escape($db, $d_score[3]). "',";
    $sql .= "score5='" . db_escape($db, $d_score[4]). "',";
    $sql .= "score6='" . db_escape($db, $d_score[5]). "',";
    $sql .= "score7='" . db_escape($db, $d_score[6]). "',";
    $sql .= "score8='" . db_escape($db, $d_score[7]). "',";
    $sql .= "score9='" . db_escape($db, $d_score[8]). "',";
    $sql .= "score10='" . db_escape($db, $d_score[9]). "',";
    $sql .= "score11='" . db_escape($db, $d_score[10]). "',";
    $sql .= "score12='" . db_escape($db, $d_score[11]). "',";
    $sql .= "score13='" . db_escape($db, $d_score[12]). "',";
    $sql .= "score14='" . db_escape($db, $d_score[13]). "',";
    $sql .= "score15='" . db_escape($db, $d_score[14]). "',";
    $sql .= "score16='" . db_escape($db, $d_score[15]). "',";
    $sql .= "score17='" . db_escape($db, $d_score[16]). "',";
    $sql .= "score18='" . db_escape($db, $d_score[17]). "',";
    $sql .= "score19='" . db_escape($db, $d_score[18]). "',";
    $sql .= "score20='" . db_escape($db, $d_score[19]). "'";
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