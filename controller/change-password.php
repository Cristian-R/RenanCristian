<?php
require_once (__DIR__ . "/../model/config.php");

     $npassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
     
    $nsalt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

$nhashedPassword = crypt($npassword, $nsalt);
      
      $query = $_SESSION["connection"]->query("UPDATE users SET password='$nhashedPassword', salt='$nsalt' WHERE username='$user'");
      
      if($query){
          echo 'successfully changed database';
      }else{
          echo "<p>" . $_SESSION["connection"]->error . "</p>";
      }