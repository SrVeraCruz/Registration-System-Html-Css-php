<?php 
  session_start();
  // print_r($_SESSION);

  if((isset($_SESSION['email']) == true) and (isset($_SESSION['password']) == true)){
    $logado = $_SESSION['email'];
  } else {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Sistema | pvc</title>
</head>
<body class="session">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SISTEMA DO PVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="d-flex">
        <a href="./sair.php" class="btn btn-danger">Exit</a>
    </div>
  </nav>
  <?php 
    echo "<h1>Welcome <u>$logado<u> </h1>"
  ?>
</body>
</html>