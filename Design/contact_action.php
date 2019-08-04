<?php
// define variables and set to empty values
$to = "catherinemariebroker@gmail.com";
$name = $email = $subject = $message = "";
$subjectErr = $messageErr = $nameErr = $emailErr = $messageStatus = $tryAgainButton = "";

//Protect input values from malicious code
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//Error messages
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "* Name is required.";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "* An email address is required.";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "* Invalid email format";
    }
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "* A subject is required.";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $messageErr = "* A message is required.";
  } else {
    $message = test_input($_POST["message"]);
  }

  // Check input values and send if everything is cool.
  if (empty($_POST["name"]) || empty($_POST["email"]) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($_POST["subject"]) || empty($_POST["message"])) {
    $messageStatus = "Please check that every box has been completed and that the email address entered is valid.";
    $tryAgainButton = "Click to try again";

  } else {
    $messageStatus = "Thank you for your message! The following information has been sent!";
    mail($to,$subject,$message,$email);
    $tryAgainButton = "Send another message";
  }

//How to merge input page and displayed results on the same page but under different conditions?
 }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Code Queen: Catherine Broker</title>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/nav_style.css">
        <link rel="stylesheet" href="css/foot_style.css">

        <!-- Script -->
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>

        <!-- Libraries -->
        <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

        <link rel="shortcut icon" href="images/favicon.png"/>

  </head>
  <body>

    <!--NAVIGATION -->
    <?php include("navigation.html") ?>


      <!-- Contact Form -->
      <div id="section_contact">
        <div class="banner">
          <h2>Contact</h2>
        </div>

        <div id="contactResults">

        <div id="contactForm">
          <p style="font-weight: 600; font-size: 1.2em"><?=$messageStatus;?></p>

          <p style="margin-bottom: 10px; text-transform: uppercase;">Name:</p>
            <p style="color: gray; margin: 0;"><span><?=$name;?></span><span class="error"><?=$nameErr;?></span></p>

          <p style="margin-bottom: 10px; text-transform: uppercase;">Email Address:</p>
            <p style="color: gray; margin: 0;"><span><?=$email;?></span><span class="error"><?=$emailErr;?></span></p>

          <p style="margin-bottom: 10px; text-transform: uppercase;">Subject:</p>
          <p style="color: gray; margin: 0;"><span><?=$subject;?></span><span class="error"><?=$subjectErr;?></span></p>

          <p style="margin-bottom: 10px; text-transform: uppercase;">Message:</p>
            <p style="color: gray; margin: 0;"><span><?=$message;?></span><span class="error"><?=$messageErr;?></span></p>
        </div>
        <a href="contact.php" id="tryAgainButton"><?=$tryAgainButton?></a>
        </div>
      </div>



    <!-- Footer -->
    <?php include("footer.html") ?>

  </body>
</html>
