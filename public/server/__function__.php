<?php

session_start();
include_once('./db_config.php');
$DB = new Database;
$arr = array();
$msg;

if (isset($_POST['Confirm_Order'])) {
  $user_name = trim($_POST['user_name']);
  $user_location = trim($_POST['user_location']);
  $user_phone = trim($_POST['user_phone']);
  echo $user_name."   ".$user_location."   ".$user_phone;
}

if (isset($_POST['Registration'])) {
  $user_name = trim($_POST['user_name']);
  $user_email = trim($_POST['user_email']);
  $user_password = trim($_POST['user_password']);
  echo $user_name."   ".$user_location."   ".$user_phone;
}

echo $_POST['product_name'];



?>