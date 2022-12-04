<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="icon" type="image/png" href="../Images/alps_favicon.png">
  <meta name="description" content="Log into the website">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/login.css">
  <!-- google fonts api -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>


  <?php
  require_once "config.php";
  ?>



  <!-- background video -->
  <video autoplay muted loop id="backgroundVideo" src="../1740027379.mp4"></video>
  <video autoplay muted loop src="../video1.mp4" alt="Mobile-Image" id="backgroundImage"></video>

  <!-- title of website -->
  <div class="Site-Title"><a href="../index.html" class="Text">MERA BHARAT</a></div>




  <?php

  dbConnect();
  session_start();

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userquery = "SELECT * FROM users WHERE username = '$username'";
    $userres = $conn->query($userquery);

    $_SESSION["username"] = $username;

    if ($userres->num_rows > 0) {
  ?>

      <script>
        location.replace("homepage.php");
      </script>

      <!-- header('Location:home.php'); -->

  <?php
    }
  } else {
    //   echo '<script> alert("Invalid Details Or blocked by Admin Please try Again!")</script>';
    // echo "<script type='text/javascript'> document.location = '../index.html';</script>";

    $_SESSION['message'] = 'Invalid Details OR blocked by Admin';

    if (isset($_SESSION['message'])) {
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    }
  }


  $conn->close();

  ?>



  <!-- login form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="login-form">
    <div class="login-box">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="username" id="username" required>
      </div>
      <div class="textbox">
        <i class="fas fa-key"></i>
        <input type="password" placeholder="Password" name="password" id="password" required>
      </div>
      <!-- <div class="forgot-password">
        <a href="#">Forgot Password?</a>
      </div> -->

      <input class="btn" type="submit" value="Sign In" name="login">
      <hr>
      <div class="Acc">
        Don't have an account?
        <a href="../signUp.php">Create one!</a>
      </div>
    </div>
  </form>

</body>

</html>