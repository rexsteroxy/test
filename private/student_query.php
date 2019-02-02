<?php
function find_all_student(){
  global $db;

  $sql = "SELECT * FROM student ";
  $sql .= "ORDER BY id ASC";
  $student = mysqli_query($db, $sql);
  confirm_result_set($student);
  return $student;
}
function delete_student($id) {
    global $db;

    $sql = "DELETE FROM student ";
   $sql .= "WHERE id='" . db_escape($db,$id) ."'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      //$_SESSION['message'] = 'Admin deleted successful.';
     redirect_to(url_for('/admin/student/index.php'));

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