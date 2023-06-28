<?php 
session_start();
// print_r($_REQUEST);

if(isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != ''){
  include_once('config.php');

  $email = $_POST['email'];
  $password = $_POST['password'];

  // print_r('Email: ' . $email);
  // print_r('<br>');
  // print_r('Password: ' . $password);

  $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";

  $result = $conection->query($sql);

  // print_r($result);

  if(mysqli_num_rows($result) < 1){
    // print_r('Nenhum resultado');

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location: login.php');

  } else {
    // print_r('Existe ' . mysqli_num_rows($result) . ' resultado');

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('Location: session.php');

  }

} else {
  header('Location: login.php');
}

?>