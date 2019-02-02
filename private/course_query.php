<?php 
//Functions for checking if matnumber is set at the grade page line 142
function find_course_by_matnumber_1($matnumber){
    global $db;
      
      $sql = "SELECT * FROM firstsemester ";
      $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
      $sql .= "LIMIT 1";
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
      $student=mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $student;
     }
function find_course_by_matnumber_2($matnumber){
      global $db;
        
        $sql = "SELECT * FROM secondsemester ";
        $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        $student=mysqli_fetch_assoc($result);
          mysqli_free_result($result);
          return $student;
       }
function find_course_by_matnumber_3($matnumber){
        global $db;
          
          $sql = "SELECT * FROM firstsemester2 ";
          $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
          $sql .= "LIMIT 1";
          $result = mysqli_query($db, $sql);
          confirm_result_set($result);
          $student=mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            return $student;
         }
function find_course_by_matnumber_4($matnumber){
          global $db;
            
            $sql = "SELECT * FROM secondsemester2 ";
            $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
            $sql .= "LIMIT 1";
            $result = mysqli_query($db, $sql);
            confirm_result_set($result);
            $student=mysqli_fetch_assoc($result);
              mysqli_free_result($result);
              return $student;
           }
function find_course_by_matnumber_5($matnumber){
            global $db;
              
              $sql = "SELECT * FROM firstsemester3 ";
              $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
              $sql .= "LIMIT 1";
              $result = mysqli_query($db, $sql);
              confirm_result_set($result);
              $student=mysqli_fetch_assoc($result);
                mysqli_free_result($result);
                return $student;
             }
function find_course_by_matnumber_6($matnumber){
              global $db;
                
                $sql = "SELECT * FROM secondsemester3 ";
                $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
                $sql .= "LIMIT 1";
                $result = mysqli_query($db, $sql);
                confirm_result_set($result);
                $student=mysqli_fetch_assoc($result);
                  mysqli_free_result($result);
                  return $student;
               }
function find_course_by_matnumber_7($matnumber){
                global $db;
                  
                  $sql = "SELECT * FROM firstsemester4 ";
                  $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
                  $sql .= "LIMIT 1";
                  $result = mysqli_query($db, $sql);
                  confirm_result_set($result);
                  $student=mysqli_fetch_assoc($result);
                    mysqli_free_result($result);
                    return $student;
                 }
function find_course_by_matnumber_8($matnumber){
                  global $db;
                    
                    $sql = "SELECT * FROM secondsemester4 ";
                    $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
                    $sql .= "LIMIT 1";
                    $result = mysqli_query($db, $sql);
                    confirm_result_set($result);
                    $student=mysqli_fetch_assoc($result);
                      mysqli_free_result($result);
                      return $student;
                   }
//for inserting matnumber into firstsemester year one when not set
function insert_course_matnumber_1($courses){
    global $db;
      
      $sql = "INSERT INTO firstsemester ";
    $sql .= "(matnumber)";
      $sql .= "VALUE (";
      $sql .= "'" . db_escape($db, $courses['matnumber']). "'";
      $sql .= ")";
  
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
  
      if($result){
         
          return true;
      }
      else{
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
      }
  }
function insert_course_matnumber_2($courses){
    global $db;
      
      $sql = "INSERT INTO secondsemester ";
    $sql .= "(matnumber)";
      $sql .= "VALUE (";
      $sql .= "'" . db_escape($db, $courses['matnumber']). "'";
      $sql .= ")";
  
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
  
      if($result){
         
          return true;
      }
      else{
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
      }
  }
function insert_course_matnumber_3($courses){
    global $db;
      
      $sql = "INSERT INTO firstsemester2 ";
    $sql .= "(matnumber)";
      $sql .= "VALUE (";
      $sql .= "'" . db_escape($db, $courses['matnumber']). "'";
      $sql .= ")";
  
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
  
      if($result){
         
          return true;
      }
      else{
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
      }
  }
function insert_course_matnumber_4($courses){
    global $db;
      
      $sql = "INSERT INTO secondsemester2 ";
    $sql .= "(matnumber)";
      $sql .= "VALUE (";
      $sql .= "'" . db_escape($db, $courses['matnumber']). "'";
      $sql .= ")";
  
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
  
      if($result){
         
          return true;
      }
      else{
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
      }
  }
function insert_course_matnumber_5($courses){
    global $db;
      
      $sql = "INSERT INTO firstsemester3 ";
    $sql .= "(matnumber)";
      $sql .= "VALUE (";
      $sql .= "'" . db_escape($db, $courses['matnumber']). "'";
      $sql .= ")";
  
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
  
      if($result){
         
          return true;
      }
      else{
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
      }
  }
function insert_course_matnumber_6($courses){
    global $db;
      
      $sql = "INSERT INTO secondsemester3 ";
    $sql .= "(matnumber)";
      $sql .= "VALUE (";
      $sql .= "'" . db_escape($db, $courses['matnumber']). "'";
      $sql .= ")";
  
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
  
      if($result){
         
          return true;
      }
      else{
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
      }
  }
function insert_course_matnumber_7($courses){
    global $db;
      
      $sql = "INSERT INTO firstsemester4 ";
    $sql .= "(matnumber)";
      $sql .= "VALUE (";
      $sql .= "'" . db_escape($db, $courses['matnumber']). "'";
      $sql .= ")";
  
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
  
      if($result){
         
          return true;
      }
      else{
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
      }
  }
function insert_course_matnumber_8($courses){
    global $db;
      
      $sql = "INSERT INTO secondsemester4 ";
    $sql .= "(matnumber)";
      $sql .= "VALUE (";
      $sql .= "'" . db_escape($db, $courses['matnumber']). "'";
      $sql .= ")";
  
      $result = mysqli_query($db, $sql);
      confirm_result_set($result);
  
      if($result){
         
          return true;
      }
      else{
          echo mysqli_error($db);
          db_disconnect($db);
          exit;
      }
  }

//for inserting courses to semester tables
function edit_course_1($d_courses,$id){
    global $db;
  
    $sql = "UPDATE firstsemester SET ";
    $sql .= "course1='" . db_escape($db, $d_courses[0]). "',";
    $sql .= "course2='" . db_escape($db, $d_courses[1]). "',";
    $sql .= "course3='" . db_escape($db, $d_courses[2]). "',";
    $sql .= "course4='" . db_escape($db, $d_courses[3]). "',";
    $sql .= "course5='" . db_escape($db, $d_courses[4]). "',";
    $sql .= "course6='" . db_escape($db, $d_courses[5]). "',";
    $sql .= "course7='" . db_escape($db, $d_courses[6]). "',";
    $sql .= "course8='" . db_escape($db, $d_courses[7]). "',";
    $sql .= "course9='" . db_escape($db, $d_courses[8]). "',";
    $sql .= "course10='" . db_escape($db, $d_courses[9]). "',";
    $sql .= "course11='" . db_escape($db, $d_courses[10]). "',";
    $sql .= "course12='" . db_escape($db, $d_courses[11]). "',";
    $sql .= "course13='" . db_escape($db, $d_courses[12]). "',";
    $sql .= "course14='" . db_escape($db, $d_courses[13]). "',";
    $sql .= "course15='" . db_escape($db, $d_courses[14]). "',";
    $sql .= "course16='" . db_escape($db, $d_courses[15]). "',";
    $sql .= "course17='" . db_escape($db, $d_courses[16]). "',";
    $sql .= "course18='" . db_escape($db, $d_courses[17]). "',";
    $sql .= "course19='" . db_escape($db, $d_courses[18]). "',";
    $sql .= "course20='" . db_escape($db, $d_courses[19]). "'";
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
function edit_course_2($d_courses,$id){
    global $db;
  
    $sql = "UPDATE secondsemester SET ";
    $sql .= "course1='" . db_escape($db, $d_courses[0]). "',";
    $sql .= "course2='" . db_escape($db, $d_courses[1]). "',";
    $sql .= "course3='" . db_escape($db, $d_courses[2]). "',";
    $sql .= "course4='" . db_escape($db, $d_courses[3]). "',";
    $sql .= "course5='" . db_escape($db, $d_courses[4]). "',";
    $sql .= "course6='" . db_escape($db, $d_courses[5]). "',";
    $sql .= "course7='" . db_escape($db, $d_courses[6]). "',";
    $sql .= "course8='" . db_escape($db, $d_courses[7]). "',";
    $sql .= "course9='" . db_escape($db, $d_courses[8]). "',";
    $sql .= "course10='" . db_escape($db, $d_courses[9]). "',";
    $sql .= "course11='" . db_escape($db, $d_courses[10]). "',";
    $sql .= "course12='" . db_escape($db, $d_courses[11]). "',";
    $sql .= "course13='" . db_escape($db, $d_courses[12]). "',";
    $sql .= "course14='" . db_escape($db, $d_courses[13]). "',";
    $sql .= "course15='" . db_escape($db, $d_courses[14]). "',";
    $sql .= "course16='" . db_escape($db, $d_courses[15]). "',";
    $sql .= "course17='" . db_escape($db, $d_courses[16]). "',";
    $sql .= "course18='" . db_escape($db, $d_courses[17]). "',";
    $sql .= "course19='" . db_escape($db, $d_courses[18]). "',";
    $sql .= "course20='" . db_escape($db, $d_courses[19]). "'";
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
function edit_course_3($d_courses,$id){
    global $db;
  
    $sql = "UPDATE firstsemester2 SET ";
    $sql .= "course1='" . db_escape($db, $d_courses[0]). "',";
    $sql .= "course2='" . db_escape($db, $d_courses[1]). "',";
    $sql .= "course3='" . db_escape($db, $d_courses[2]). "',";
    $sql .= "course4='" . db_escape($db, $d_courses[3]). "',";
    $sql .= "course5='" . db_escape($db, $d_courses[4]). "',";
    $sql .= "course6='" . db_escape($db, $d_courses[5]). "',";
    $sql .= "course7='" . db_escape($db, $d_courses[6]). "',";
    $sql .= "course8='" . db_escape($db, $d_courses[7]). "',";
    $sql .= "course9='" . db_escape($db, $d_courses[8]). "',";
    $sql .= "course10='" . db_escape($db, $d_courses[9]). "',";
    $sql .= "course11='" . db_escape($db, $d_courses[10]). "',";
    $sql .= "course12='" . db_escape($db, $d_courses[11]). "',";
    $sql .= "course13='" . db_escape($db, $d_courses[12]). "',";
    $sql .= "course14='" . db_escape($db, $d_courses[13]). "',";
    $sql .= "course15='" . db_escape($db, $d_courses[14]). "',";
    $sql .= "course16='" . db_escape($db, $d_courses[15]). "',";
    $sql .= "course17='" . db_escape($db, $d_courses[16]). "',";
    $sql .= "course18='" . db_escape($db, $d_courses[17]). "',";
    $sql .= "course19='" . db_escape($db, $d_courses[18]). "',";
    $sql .= "course20='" . db_escape($db, $d_courses[19]). "'";
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
function edit_course_4($d_courses,$id){
    global $db;
  
    $sql = "UPDATE secondsemester2 SET ";
    $sql .= "course1='" . db_escape($db, $d_courses[0]). "',";
    $sql .= "course2='" . db_escape($db, $d_courses[1]). "',";
    $sql .= "course3='" . db_escape($db, $d_courses[2]). "',";
    $sql .= "course4='" . db_escape($db, $d_courses[3]). "',";
    $sql .= "course5='" . db_escape($db, $d_courses[4]). "',";
    $sql .= "course6='" . db_escape($db, $d_courses[5]). "',";
    $sql .= "course7='" . db_escape($db, $d_courses[6]). "',";
    $sql .= "course8='" . db_escape($db, $d_courses[7]). "',";
    $sql .= "course9='" . db_escape($db, $d_courses[8]). "',";
    $sql .= "course10='" . db_escape($db, $d_courses[9]). "',";
    $sql .= "course11='" . db_escape($db, $d_courses[10]). "',";
    $sql .= "course12='" . db_escape($db, $d_courses[11]). "',";
    $sql .= "course13='" . db_escape($db, $d_courses[12]). "',";
    $sql .= "course14='" . db_escape($db, $d_courses[13]). "',";
    $sql .= "course15='" . db_escape($db, $d_courses[14]). "',";
    $sql .= "course16='" . db_escape($db, $d_courses[15]). "',";
    $sql .= "course17='" . db_escape($db, $d_courses[16]). "',";
    $sql .= "course18='" . db_escape($db, $d_courses[17]). "',";
    $sql .= "course19='" . db_escape($db, $d_courses[18]). "',";
    $sql .= "course20='" . db_escape($db, $d_courses[19]). "'";
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
function edit_course_5($d_courses,$id){
    global $db;
  
    $sql = "UPDATE firstsemester3 SET ";
    $sql .= "course1='" . db_escape($db, $d_courses[0]). "',";
    $sql .= "course2='" . db_escape($db, $d_courses[1]). "',";
    $sql .= "course3='" . db_escape($db, $d_courses[2]). "',";
    $sql .= "course4='" . db_escape($db, $d_courses[3]). "',";
    $sql .= "course5='" . db_escape($db, $d_courses[4]). "',";
    $sql .= "course6='" . db_escape($db, $d_courses[5]). "',";
    $sql .= "course7='" . db_escape($db, $d_courses[6]). "',";
    $sql .= "course8='" . db_escape($db, $d_courses[7]). "',";
    $sql .= "course9='" . db_escape($db, $d_courses[8]). "',";
    $sql .= "course10='" . db_escape($db, $d_courses[9]). "',";
    $sql .= "course11='" . db_escape($db, $d_courses[10]). "',";
    $sql .= "course12='" . db_escape($db, $d_courses[11]). "',";
    $sql .= "course13='" . db_escape($db, $d_courses[12]). "',";
    $sql .= "course14='" . db_escape($db, $d_courses[13]). "',";
    $sql .= "course15='" . db_escape($db, $d_courses[14]). "',";
    $sql .= "course16='" . db_escape($db, $d_courses[15]). "',";
    $sql .= "course17='" . db_escape($db, $d_courses[16]). "',";
    $sql .= "course18='" . db_escape($db, $d_courses[17]). "',";
    $sql .= "course19='" . db_escape($db, $d_courses[18]). "',";
    $sql .= "course20='" . db_escape($db, $d_courses[19]). "'";
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
function edit_course_6($d_courses,$id){
    global $db;
  
    $sql = "UPDATE secondsemester3 SET ";
    $sql .= "course1='" . db_escape($db, $d_courses[0]). "',";
    $sql .= "course2='" . db_escape($db, $d_courses[1]). "',";
    $sql .= "course3='" . db_escape($db, $d_courses[2]). "',";
    $sql .= "course4='" . db_escape($db, $d_courses[3]). "',";
    $sql .= "course5='" . db_escape($db, $d_courses[4]). "',";
    $sql .= "course6='" . db_escape($db, $d_courses[5]). "',";
    $sql .= "course7='" . db_escape($db, $d_courses[6]). "',";
    $sql .= "course8='" . db_escape($db, $d_courses[7]). "',";
    $sql .= "course9='" . db_escape($db, $d_courses[8]). "',";
    $sql .= "course10='" . db_escape($db, $d_courses[9]). "',";
    $sql .= "course11='" . db_escape($db, $d_courses[10]). "',";
    $sql .= "course12='" . db_escape($db, $d_courses[11]). "',";
    $sql .= "course13='" . db_escape($db, $d_courses[12]). "',";
    $sql .= "course14='" . db_escape($db, $d_courses[13]). "',";
    $sql .= "course15='" . db_escape($db, $d_courses[14]). "',";
    $sql .= "course16='" . db_escape($db, $d_courses[15]). "',";
    $sql .= "course17='" . db_escape($db, $d_courses[16]). "',";
    $sql .= "course18='" . db_escape($db, $d_courses[17]). "',";
    $sql .= "course19='" . db_escape($db, $d_courses[18]). "',";
    $sql .= "course20='" . db_escape($db, $d_courses[19]). "'";
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
function edit_course_7($d_courses,$id){
    global $db;
  
    $sql = "UPDATE firstsemester4 SET ";
    $sql .= "course1='" . db_escape($db, $d_courses[0]). "',";
    $sql .= "course2='" . db_escape($db, $d_courses[1]). "',";
    $sql .= "course3='" . db_escape($db, $d_courses[2]). "',";
    $sql .= "course4='" . db_escape($db, $d_courses[3]). "',";
    $sql .= "course5='" . db_escape($db, $d_courses[4]). "',";
    $sql .= "course6='" . db_escape($db, $d_courses[5]). "',";
    $sql .= "course7='" . db_escape($db, $d_courses[6]). "',";
    $sql .= "course8='" . db_escape($db, $d_courses[7]). "',";
    $sql .= "course9='" . db_escape($db, $d_courses[8]). "',";
    $sql .= "course10='" . db_escape($db, $d_courses[9]). "',";
    $sql .= "course11='" . db_escape($db, $d_courses[10]). "',";
    $sql .= "course12='" . db_escape($db, $d_courses[11]). "',";
    $sql .= "course13='" . db_escape($db, $d_courses[12]). "',";
    $sql .= "course14='" . db_escape($db, $d_courses[13]). "',";
    $sql .= "course15='" . db_escape($db, $d_courses[14]). "',";
    $sql .= "course16='" . db_escape($db, $d_courses[15]). "',";
    $sql .= "course17='" . db_escape($db, $d_courses[16]). "',";
    $sql .= "course18='" . db_escape($db, $d_courses[17]). "',";
    $sql .= "course19='" . db_escape($db, $d_courses[18]). "',";
    $sql .= "course20='" . db_escape($db, $d_courses[19]). "'";
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
function edit_course_8($d_courses,$id){
    global $db;
  
    $sql = "UPDATE secondsemester4 SET ";
    $sql .= "course1='" . db_escape($db, $d_courses[0]). "',";
    $sql .= "course2='" . db_escape($db, $d_courses[1]). "',";
    $sql .= "course3='" . db_escape($db, $d_courses[2]). "',";
    $sql .= "course4='" . db_escape($db, $d_courses[3]). "',";
    $sql .= "course5='" . db_escape($db, $d_courses[4]). "',";
    $sql .= "course6='" . db_escape($db, $d_courses[5]). "',";
    $sql .= "course7='" . db_escape($db, $d_courses[6]). "',";
    $sql .= "course8='" . db_escape($db, $d_courses[7]). "',";
    $sql .= "course9='" . db_escape($db, $d_courses[8]). "',";
    $sql .= "course10='" . db_escape($db, $d_courses[9]). "',";
    $sql .= "course11='" . db_escape($db, $d_courses[10]). "',";
    $sql .= "course12='" . db_escape($db, $d_courses[11]). "',";
    $sql .= "course13='" . db_escape($db, $d_courses[12]). "',";
    $sql .= "course14='" . db_escape($db, $d_courses[13]). "',";
    $sql .= "course15='" . db_escape($db, $d_courses[14]). "',";
    $sql .= "course16='" . db_escape($db, $d_courses[15]). "',";
    $sql .= "course17='" . db_escape($db, $d_courses[16]). "',";
    $sql .= "course18='" . db_escape($db, $d_courses[17]). "',";
    $sql .= "course19='" . db_escape($db, $d_courses[18]). "',";
    $sql .= "course20='" . db_escape($db, $d_courses[19]). "'";
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