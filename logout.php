<?php
    session_start();
    if (isset($_SESSION['username'])){
        unset($_SESSION['username']);
        unset($_SESSION['credentials']);
         unset($_SESSION['unauthorized']);
      
        header('Location:index.php');
    }
 ?>
