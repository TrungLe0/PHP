<?php
  require ('model.php');
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    createAccount($_POST);
  }
?>