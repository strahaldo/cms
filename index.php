<?php
session_start();
require 'app/main.php';


if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$res = $db->prepare("
  SELECT * FROM users 
  WHERE username=:username and password=:password
  ");
$res->execute([
  'username' => $username,
  'password' => $password
  ]);

$count = $res->fetchColumn();

if ($count == 1){
$_SESSION['username'] = $username;
}else{

echo "Invalid Login Credentials.";
}
}


if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
  
  header('Location: start.php');

}




require VIEW_ROOT . '/admin/login.php';