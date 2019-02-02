<?php
//function for validating students registeration
function validate_student($student) {
        $errors = [];
    
        
        if(is_blank($student['name'])) {
          $errors[] = "Name cannot be blank.";
        } elseif(!has_length($student['name'], ['min' => 2, 'max' => 255])) {
          $errors[] = "Name must be between 2 and 255 characters.";
        }
        elseif (!has_unique_name($student['matnumber'], $student['id'] ?? 0)) {
          $errors[] = "Matriculation Number Already In Use. Try another.";
        }
    
        if(is_blank($student['email'])) {
          $errors[] = "Email cannot be blank.";
        } 
         elseif (!has_valid_email_format($student['email'])) {
          $errors[] = "Email must be a valid format.";
        }
    
        
          if(is_blank($student['password'])) {
            $errors[] = "Password cannot be blank.";
          } elseif (!has_length($student['password'], array('min' => 6))) {
            $errors[] = "Password must contain 6 or more characters";
          } elseif (!preg_match('/[A-Z]/', $student['password'])) {
            $errors[] = "Password must contain at least 1 uppercase letter";
          } elseif (!preg_match('/[a-z]/', $student['password'])) {
            $errors[] = "Password must contain at least 1 lowercase letter";
          } elseif (!preg_match('/[0-9]/', $student['password'])) {
            $errors[] = "Password must contain at least 1 number";
          } elseif (!preg_match('/[^A-Za-z0-9\s]/', $student['password'])) {
            $errors[] = "Password must contain at least 1 symbol";
          }
    
          if(is_blank($student['confirm_password'])) {
            $errors[] = "Confirm password cannot be blank.";
          } elseif ($student['password'] !== $student['confirm_password']) {
            $errors[] = "Password and confirm password must match.";
          }
        
        return $errors;
      }

//function for students registeration
function insert_student($student){
	global $db;
    $errors = validate_student($student);
    if(!empty($errors)){
        return $errors;
    }
    $hashed_password=password_hash($student['password'], PASSWORD_BCRYPT);
	$sql = "INSERT INTO student ";
	$sql .= "(name,email,institution,department,matnumber,password)";
	$sql .= "VALUES (";
	$sql .= "'" . db_escape($db, $student['name']). "',";
	$sql .= "'" . db_escape($db, $student['email']). "',";
    $sql .= "'" . db_escape($db, $student['institution']). "',";
    $sql .= "'" . db_escape($db, $student['department']). "',";
    $sql .= "'" . db_escape($db, $student['matnumber']). "',";
	$sql .= "'" . db_escape($db, $hashed_password). "'";
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
//    i used this function at the profile page
function find_student_by_matnumber($matnumber){

    global $db;
    
    $sql = "SELECT * FROM student ";
    $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $student=mysqli_fetch_assoc($result);
      mysqli_free_result($result);
      return $student;
   }
//i used at the grade page when save is set(for Gp result insertion)
function find_detail_by_matnumber($matnumber){

    global $db;
    
    $sql = "SELECT * FROM detail ";
    $sql .= "WHERE matnumber='". db_escape($db, $matnumber)."'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $student=mysqli_fetch_assoc($result);
      mysqli_free_result($result);
      return $student;
   }
//i used this function at the profile page
function find_one_student($id){
    global $db;
    
    $sql = "SELECT * FROM student ";
    $sql .= "WHERE id='". db_escape($db,$id)."'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $student=mysqli_fetch_assoc($result);
      mysqli_free_result($result);
      return $student;
  }
//function for inserting matnumber into detail table
function insert_details($details){
    global $db;
    
	$sql = "INSERT INTO detail ";
  $sql .= "(matnumber)";
	$sql .= "VALUE (";
	$sql .= "'" . db_escape($db, $details['matnumber']). "'";
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
//functions for inserting GP results
function edit_detail_1($details,$id){
  global $db;

  $sql = "UPDATE detail SET ";
  $sql .= "firstone='" . db_escape($db, $details['gp']). "'";
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
function edit_detail_2($details,$id){
      global $db;
    
      $sql = "UPDATE detail SET ";
      $sql .= "secondone='" . db_escape($db, $details['gp']). "'";
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
function edit_detail_3($details,$id){
          global $db;
        
          $sql = "UPDATE detail SET ";
          $sql .= "firsttwo='" . db_escape($db, $details['gp']). "'";
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
function edit_detail_4($details,$id){
              global $db;
            
              $sql = "UPDATE detail SET ";
              $sql .= "secondtwo='" . db_escape($db, $details['gp']). "'";
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
function edit_detail_5($details,$id){
                  global $db;
                
                  $sql = "UPDATE detail SET ";
                  $sql .= "firstthree='" . db_escape($db, $details['gp']). "'";
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
function edit_detail_6($details,$id){
                      global $db;
                    
                      $sql = "UPDATE detail SET ";
                      $sql .= "secondthree='" . db_escape($db, $details['gp']). "'";
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

function edit_detail_7($details,$id){
                          global $db;
                        
                          $sql = "UPDATE detail SET ";
                          $sql .= "firstfour='" . db_escape($db, $details['gp']). "'";
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
function edit_detail_8($details,$id){
                              global $db;
                            
                              $sql = "UPDATE detail SET ";
                              $sql .= "secondfour='" . db_escape($db, $details['gp']). "'";
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
function edit_detail_9($details,$id){
                                  global $db;
                                
                                  $sql = "UPDATE detail SET ";
                                  $sql .= "firstfive='" . db_escape($db, $details['gp']). "'";
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
function edit_detail_10($details,$id){
                                      global $db;
                                    
                                      $sql = "UPDATE detail SET ";
                                      $sql .= "secondfive='" . db_escape($db, $details['gp']). "'";
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
//The ended here

//for displaying grade and course to the student
function find_cg_by_matnumber($matnumber){

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
function find_cg2_by_matnumber($matnumber){

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
function find_cg3_by_matnumber($matnumber){

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
function find_cg4_by_matnumber($matnumber){

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
function find_cg5_by_matnumber($matnumber){

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
function find_cg6_by_matnumber($matnumber){

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
function find_cg7_by_matnumber($matnumber){

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
function find_cg8_by_matnumber($matnumber){

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
?>