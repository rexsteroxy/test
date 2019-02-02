<?php
function find_all_admin(){
  global $db;

  $sql = "SELECT * FROM admin ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}

function find_one_admin($id){
  global $db;
  
  $sql = "SELECT * FROM admin ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function find_admin_by_email($email){
  global $db;
  
  $sql = "SELECT * FROM admin ";
  $sql .= "WHERE email='". db_escape($db, $email)."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}


function delete_admin($id) {
    global $db;

    $sql = "DELETE FROM admin ";
   $sql .= "WHERE id='" . db_escape($db,$id) ."'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      $_SESSION['message'] = 'Admin deleted successful.';
     redirect_to(url_for('/admin/staff/index.php'));

    return true;
      
    } 
    else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  } 
//
//insert validation
function validate_admin($admin) {
    $errors = [];

    // admin_name
    if(is_blank($admin['name'])) {
      $errors[] = "Name cannot be blank.";
    } elseif(!has_length($admin['name'], ['min' => 2, 'max' => 255])) {
      $errors[] = "Name must be between 2 and 255 characters.";
    }
    elseif (!has_unique_name($admin['name'], $admin['id'] ?? 0)) {
      $errors[] = "Name not allowed. Try another.";
    }

    if(is_blank($admin['email'])) {
      $errors[] = "Email cannot be blank.";
    } 
     elseif (!has_valid_email_format($admin['email'])) {
      $errors[] = "Email must be a valid format.";
    }

    
      if(is_blank($admin['password'])) {
        $errors[] = "Password cannot be blank.";
      } elseif (!has_length($admin['password'], array('min' => 8))) {
        $errors[] = "Password must contain  or more characters";
      } elseif (!preg_match('/[A-Z]/', $admin['password'])) {
        $errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $admin['password'])) {
        $errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $admin['password'])) {
        $errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $admin['password'])) {
        $errors[] = "Password must contain at least 1 symbol";
      }

      if(is_blank($admin['confirm_password'])) {
        $errors[] = "Confirm password cannot be blank.";
      } elseif ($admin['password'] !== $admin['confirm_password']) {
        $errors[] = "Password and confirm password must match.";
      }
    
    return $errors;
  }
function insert_admin($admin){
    global $db;
  
    $errows = validate_admin($admin);
    if(!empty($errows)){
      return $errows;
    }
  
    $hashed_password = password_hash($admin['password'], PASSWORD_BCRYPT);
    
  
    $sql = "INSERT INTO admin ";
    $sql .= "(name,email,password,level)";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $admin['name']). "',";
    $sql .= "'" . db_escape($db, $admin['email']). "',";
    $sql .= "'" . db_escape($db, $hashed_password). "',";
    $sql .= "'" . db_escape($db, $admin['level']). "'";
    $sql .= ")";
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
  
    if($result){
    //echo "<script> alert('Registeration Successful') </script>";
    redirect_to(url_for('/admin/staff/index.php'));
    return true;
     }
  
    else{
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
    }


//for edit validation
function validate_edith($admin) {
    $errors = [];
  global $hashed_password;
    // admin_name
    if(is_blank($admin['name'])) {
      $errors[] = "Name cannot be blank.";
    } elseif(!has_length($admin['name'], ['min' => 2, 'max' => 255])) {
      $errors[] = "Name must be between 2 and 255 characters.";
    }

    if(is_blank($admin['email'])) {
      $errors[] = "Email cannot be blank.";
    } 
     elseif (!has_valid_email_format($admin['email'])) {
      $errors[] = "Email must be a valid format.";
    }


      if(is_blank($admin['new_password'])) {
        $errors[] = "New password cannot be blank.";
      } elseif (!has_length($admin['new_password'], array('min' => 8))) {
        $errors[] = "New password must contain 8 or more characters";
      } elseif (!preg_match('/[A-Z]/', $admin['new_password'])) {
        $errors[] = "New password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $admin['new_password'])) {
        $errors[] = "New password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $admin['new_password'])) {
        $errors[] = "New password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $admin['new_password'])) {
        $errors[] = "New password must contain at least 1 symbol";
      }

      if(is_blank($admin['c_new_password'])) {
        $errors[] = "Confirm new password cannot be blank.";
      } elseif ($admin['new_password'] !== $admin['c_new_password']) {
        $errors[] = "New passwords  must match.";
      }
    
    return $errors;
  }

function edith_admin($admin,$id){

  global $db;

  $errows = validate_edith($admin);
  
  if(!empty($errows)){
    return $errows;
  }

  $n_hashed_password = password_hash($admin['new_password'], PASSWORD_BCRYPT);
  $cn_hashed_password = password_hash($admin['c_new_password'], PASSWORD_BCRYPT);

  $sql = "UPDATE admin SET ";
  $sql .= "name='" . db_escape($db, $admin['name']) ."',";
  $sql .= "email='" . db_escape($db, $admin['email'])."',";
  $sql .= "password='" . db_escape($db, $n_hashed_password)."',";
  $sql .= "confirm_password='" . db_escape($db, $cn_hashed_password)."'";
  $sql .= "WHERE id='" . $id ."'";
  $sql .= "LIMIT 1";


  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  if($result){
     redirect_to(url_for('/admin/staff/show_admin.php?id=' .$id));
    return true;
  }else{
    echo mysqli_error($db);
      db_disconnect($db);
      exit;
  }
  }



//for  validating edit password
function find_admin_by_password($password){
  global $db;
  
  $sql = "SELECT * FROM admin ";
  $sql .= "WHERE password='". db_escape($db, $password)."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
//for firstsemester year one
function find_all_firstsemester(){
  global $db;

  $sql = "SELECT * FROM firstsemester ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}
function find_one_student_in_firstsemester($id){
  global $db;
  
  $sql = "SELECT * FROM firstsemester ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function delete_a_student_in_firstsemester($id) {
  global $db;

  $sql = "DELETE FROM firstsemester ";
 $sql .= "WHERE id='" . db_escape($db,$id) ."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    $_SESSION['message'] = 'Admin deleted successful.';
   redirect_to(url_for('/admin/result/f1/index.php'));

  return true;
    
  } 
  else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 
//for firstsemester year two
function find_all_firstsemester2(){
  global $db;

  $sql = "SELECT * FROM firstsemester2 ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}
function find_one_student_in_firstsemester2($id){
  global $db;
  
  $sql = "SELECT * FROM firstsemester2 ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function delete_a_student_in_firstsemester2($id) {
  global $db;

  $sql = "DELETE FROM firstsemester2 ";
 $sql .= "WHERE id='" . db_escape($db,$id) ."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    $_SESSION['message'] = 'Admin deleted successful.';
   redirect_to(url_for('/admin/result/f2/index.php'));

  return true;
    
  } 
  else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 
//for firstsemester year three
function find_all_firstsemester3(){
  global $db;

  $sql = "SELECT * FROM firstsemester3 ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}
function find_one_student_in_firstsemester3($id){
  global $db;
  
  $sql = "SELECT * FROM firstsemester3 ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function delete_a_student_in_firstsemester3($id) {
  global $db;

  $sql = "DELETE FROM firstsemester3 ";
 $sql .= "WHERE id='" . db_escape($db,$id) ."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    $_SESSION['message'] = 'Admin deleted successful.';
   redirect_to(url_for('/admin/result/f3/index.php'));

  return true;
    
  } 
  else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 
//for firstsemester year four
function find_all_firstsemester4(){
  global $db;

  $sql = "SELECT * FROM firstsemester4 ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}
function find_one_student_in_firstsemester4($id){
  global $db;
  
  $sql = "SELECT * FROM firstsemester4 ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function delete_a_student_in_firstsemester4($id) {
  global $db;

  $sql = "DELETE FROM firstsemester4 ";
 $sql .= "WHERE id='" . db_escape($db,$id) ."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    $_SESSION['message'] = 'Admin deleted successful.';
   redirect_to(url_for('/admin/result/f4/index.php'));

  return true;
    
  } 
  else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 
//for secondsemester year one
function find_all_secondsemester(){
  global $db;

  $sql = "SELECT * FROM secondsemester ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}
function find_one_student_in_secondsemester($id){
  global $db;
  
  $sql = "SELECT * FROM secondsemester ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function delete_a_student_in_secondsemester($id) {
  global $db;

  $sql = "DELETE FROM secondsemester ";
 $sql .= "WHERE id='" . db_escape($db,$id) ."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    $_SESSION['message'] = 'Admin deleted successful.';
   redirect_to(url_for('/admin/result/s1/index.php'));

  return true;
    
  } 
  else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 
//for secondsemseter year two
function find_all_secondsemester2(){
  global $db;

  $sql = "SELECT * FROM secondsemester2 ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}
function find_one_student_in_secondsemester2($id){
  global $db;
  
  $sql = "SELECT * FROM secondsemester2 ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function delete_a_student_in_secondsemester2($id) {
  global $db;

  $sql = "DELETE FROM secondsemester2 ";
 $sql .= "WHERE id='" . db_escape($db,$id) ."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    $_SESSION['message'] = 'Admin deleted successful.';
   redirect_to(url_for('/admin/result/s2/index.php'));

  return true;
    
  } 
  else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 
//for secondsemeter year three
function find_all_secondsemester3(){
  global $db;

  $sql = "SELECT * FROM secondsemester3 ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}
function find_one_student_in_secondsemester3($id){
  global $db;
  
  $sql = "SELECT * FROM secondsemester3 ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function delete_a_student_in_secondsemester3($id) {
  global $db;

  $sql = "DELETE FROM secondsemester3 ";
 $sql .= "WHERE id='" . db_escape($db,$id) ."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    $_SESSION['message'] = 'Admin deleted successful.';
   redirect_to(url_for('/admin/result/s3/index.php'));

  return true;
    
  } 
  else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 
//for secondsemester year four
function find_all_secondsemester4(){
  global $db;

  $sql = "SELECT * FROM secondsemester4 ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}
function find_one_student_in_secondsemester4($id){
  global $db;
  
  $sql = "SELECT * FROM secondsemester4 ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function delete_a_student_in_secondsemester4($id) {
  global $db;

  $sql = "DELETE FROM secondsemester4 ";
 $sql .= "WHERE id='" . db_escape($db,$id) ."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    $_SESSION['message'] = 'Admin deleted successful.';
   redirect_to(url_for('/admin/result/s4/index.php'));

  return true;
    
  } 
  else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 
//for student gp results
function find_all_gp(){
  global $db;

  $sql = "SELECT * FROM detail ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}
function find_one_result_in_all($id){
  global $db;
  
  $sql = "SELECT * FROM detail ";
  $sql .= "WHERE id='". db_escape($db,$id)."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}
function delete_a_result_in_all($id) {
  global $db;

  $sql = "DELETE FROM detail ";
 $sql .= "WHERE id='" . db_escape($db,$id) ."'";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);

  // For DELETE statements, $result is true/false
  if($result) {
    $_SESSION['message'] = 'Admin deleted successful.';
   redirect_to(url_for('/admin/result/s4/index.php'));

  return true;
    
  } 
  else {
    // DELETE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }
} 
?>