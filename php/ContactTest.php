<?php
  require_once "php/config.php";
  ?>

  <?php
  dbConnect();
  if (isset($_POST['Send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);
    

    

        $sql = "INSERT INTO `contact_us` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            echo("message sent!");

            header('Location:Contact.php');
          } 
    $conn->close();
        }

  ?>
