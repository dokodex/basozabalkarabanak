<?php
  if (!isset($_SESSION['languages'])){
    session_start();
    $_SESSION['languages']='eus';

    if(isset($_GET['language'])){
      $_SESSION['languages']=$_GET['language'];
    }
  }

  $language=$_SESSION['languages'];
?>