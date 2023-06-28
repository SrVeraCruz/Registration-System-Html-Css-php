<?php

if(isset($_POST['submit'])){
  // print_r('Name: ' . $_POST['inputName']);
  // print_r('<br>');
  // print_r('Password: ' . $_POST['inputPass']);
  // print_r('<br>');
  // print_r('Email: ' . $_POST['inputEmail']);
  // print_r('<br>');
  // print_r('Number: ' . $_POST['inputPhone']);
  // print_r('<br>');
  // print_r('Gender: ' . $_POST['gender']);
  // print_r('<br>');
  // print_r('Birth: ' . $_POST['inputBirth']);
  // print_r('<br>');
  // print_r('City: ' . $_POST['inputCity']);
  // print_r('<br>');
  // print_r('State: ' . $_POST['inputState']);
  // print_r('<br>');
  // print_r('Address: ' . $_POST['inputAddress']);

  include_once('./config.php');

  $name = $_POST['inputName'];
  $password = $_POST['inputPass'];
  $email = $_POST['inputEmail'];
  $phoneNumber = $_POST['inputPhone'];
  $gender = $_POST['gender'];
  $birth = $_POST['inputBirth'];
  $city = $_POST['inputCity'];
  $state = $_POST['inputState'];
  $address = $_POST['inputAddress'];

  $result = mysqli_query($conection, "INSERT INTO users(name,password,email,phone_num,sex,birth_date,city,state,address)
  VALUES ('$name','$password','$email','$phoneNumber','$gender','$birth','$city','$state','$address')");

  header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario | PVC</title>
  <link rel="stylesheet" href="./css/index.css">
</head>
<body>
  <a href="./index.php" class="returnBtn">return</a>
  <div class="container">
    <form action="./cadastro.php" method="POST">
      <fieldset>
        <legend>constumer form</legend>

        <div class="inputBox">
          <input type="text" name="inputName" id="inputName" class="inputUser" required autocomplete="off">
          <label for="inputName" id="labelName" name="labelName" class="labelInput">full name</label>
        </div>
        <div class="inputBox">
          <input type="text" name="inputPass" id="inputPass" class="inputUser" required autocomplete="off">
          <label for="inputPass" id="labelPass" name="labelPass" class="labelInput">password</label>
        </div>
        <div class="inputBox">
          <input type="email" name="inputEmail" id="inputEmail" class="inputUser" required autocomplete="off">
          <label for="inputEmail" id="labelEmail" name="labelEmail" class="labelInput">email</label>
        </div>
        <div class="inputBox">
          <input type="text" name="inputPhone" id="inputPhone" class="inputUser" required autocomplete="off">
          <label for="inputPhone" id="labelPhone" name="labelPhone" class="labelInput">phone number</label>
        </div>

        <div class="gender">
          <p>sex:</p>
          <div>
            <input type="radio" name="gender" id="feminine" value="feminine" required>
            <label for="feminine">feminine</label>
          </div>
          <div>
            <input type="radio" name="gender" id="masculine" value="masculine" required>
            <label for="masculine">masculine</label>
          </div>
          <div>
            <input type="radio" name="gender" id="other" value="other" required>
            <label for="other">other</label>
          </div>
        </div>

        <div class="birth">
          <label for="inputBirth" name="labelBirth" id="labelBirth">birth date:</label>
          <input type="date" name="inputBirth" id="inputBirth" required>
        </div>

        <div class="inputBox">
          <input type="text" name="inputCity" id="inputCity" class="inputUser" required autocomplete="off">
          <label for="inputCity" id="labelCity" name="labelCity" class="labelInput">city</label>
        </div>
        <div class="inputBox">
          <input type="text" name="inputState" id="inputState" class="inputUser" required autocomplete="off">
          <label for="inputState" id="labelState" name="labelState" class="labelInput">state</label>
        </div>
        <div class="inputBox">
          <input type="text" name="inputAddress" id="inputAddress" class="inputUser" required autocomplete="off">
          <label for="inputAddress" id="labelAddress" name="labelAddress" class="labelInput">address</label>
        </div>

        <input type="submit" name="submit" value="submit">
      </fieldset>
    </form>
  </div>
</body>
</html>