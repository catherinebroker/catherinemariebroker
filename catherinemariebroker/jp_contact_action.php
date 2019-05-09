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
    $nameErr = "＊ 名前は記入必須です。";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "＊ メールアドレスは記入必須です。";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "＊ 記入されたメールアドレスは無効です。";
    }
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "＊ 件名は記入必須です。";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $messageErr = "＊ メッセージは記入必須です。";
  } else {
    $message = test_input($_POST["message"]);
  }

  // Check input values and send if everything is cool.
  if (empty($_POST["name"]) || empty($_POST["email"]) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($_POST["subject"]) || empty($_POST["message"])) {
    $messageStatus = "全部の記入項目が完成されてメールアドレスが有効かどうかを確認してください。";
    $tryAgainButton = "書き直し";

  } else {
    $messageStatus = "メッセージ頂いて有難うございました。 下記の情報が送られました。";
    mail($to,$subject,$message,$email);
    $tryAgainButton = "他のメッセージを送る";
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
    <?php include("jp_navigation.html") ?>


      <!-- Contact Form -->
      <div id="section_contact">
        <div class="banner">
          <h1>Contact</h1>
        </div>

        <div id="contactResults">

        <div id="contactForm">
          <p style="font-weight: 600; font-size: 1.2em"><?=$messageStatus;?></p>

          <p style="margin-bottom: 10px; text-transform: uppercase;">名前：</p>
            <p style="color: gray; margin: 0;"><span><?=$name;?></span><span class="error"><?=$nameErr;?></span></p>

          <p style="margin-bottom: 10px; text-transform: uppercase;">メールアドレス：</p>
            <p style="color: gray; margin: 0;"><span><?=$email;?></span><span class="error"><?=$emailErr;?></span></p>

          <p style="margin-bottom: 10px; text-transform: uppercase;">件名：</p>
          <p style="color: gray; margin: 0;"><span><?=$subject;?></span><span class="error"><?=$subjectErr;?></span></p>

          <p style="margin-bottom: 10px; text-transform: uppercase;">メッセージ：</p>
            <p style="color: gray; margin: 0;"><span><?=$message;?></span><span class="error"><?=$messageErr;?></span></p>
        </div>
        <a href="contact.php" id="tryAgainButton"><?=$tryAgainButton?></a>
        </div>
      </div>



    <!-- Footer -->
    <?php include("jp_footer.html") ?>

  </body>
</html>
