<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="./css/index.css" type="text/css">
</head>
<body>
  <a href="./index.php" class="returnBtn">return</a>
  <div class="login_container">
    <form action="./test_login.php" method="POST">
      <h1>Login</h1>
      <input type="email" name="email" id="email" placeholder="Email">
      <br><br>
      <input type="password" name="password" id="password" placeholder="Senha">
      <br><br>
      <input type="submit" name="submit" value="submit" class="btn">
    </form>
  </div>
</body>
</html>