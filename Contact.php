<?php
        require_once "php/config.php";
       ?>

  <?php
  dbConnect();

  if(isset($_POST['name'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

    

        $sql = "INSERT INTO `contact_us` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";
        if ($con->query($sql) == true) {
          echo "submitted sucessfully!";
        } else {
          echo "ERROR: $sql <br> $conn->error";
        }
        


      
    $conn->close();
      }

  ?>










<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact Us</title>
  <link rel="icon" type="image/png" href="../Images/alps_favicon.png">
  <meta name="description" content="Connect with people over travelling">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/contactUs.css">
  <!-- google font api -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>



  <section class="contact">
    <div class="container">
      <!-- contact information of the company -->
      <div class="contact-info">
        <a href="index.html">
          <h2>MERA BHARAT</h2>
        </a>
        <div class="box">
          <div class="icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="text">
            <h3>Address</h3>
            <p>JAIN (DEEMED-to-be) UNIVERSITY, BANGELURU</p>
          </div>
        </div>

        <div class="box">
          <div class="icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="text">
            <h3>SANKALP SHRIVASTAVA</h3>
            <h3>PRANAV JHA</h3>
            <H3>G DARSHAN</H3>
            <p></p>
          </div>
        </div>

        <div class="box">
          <div class="icon">
            <i class="fas fa-phone"></i>
          </div>
          <div class="text">
            <h3>Phone</h3>
            <p>7898108247</p>
          </div>
        </div>
      </div>

      <!-- the actual form -->
      <div class="contact-form">
        <!-- <form action="php/Contact.php" method="POST"> -->



          

          <h2>Send Message</h2>
          <div class="input-box">
            <input type="text" name="name" value="" required>
            <span>Name</span>
          </div>
          <div class="input-box">
            <input type="text" name="email" value="" required>
            <span>Email</span>
          </div>
          <div class="input-box">
            <textarea name="message" required></textarea>
            <span>Message</span>
          </div>
          <div class="input-box">
            <input type="submit" name="sub" value="Send">
          </div>
        </form>
      </div>
    </div>
  </section>

</body>

</html>