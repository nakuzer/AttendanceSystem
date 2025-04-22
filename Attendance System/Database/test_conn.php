<?php
  include 'database.php';

  $database = new Database();

  $db = $database->getConnection();

  if(!$db){
    return "Status: Not success";
  }
  else{
    return "Status: Success";
  }
?>