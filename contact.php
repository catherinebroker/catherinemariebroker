<?php
// define variables and set to empty values
$to = "catherinemariebroker@gmail.com";
$name = $email = $subject = $message = "";
$nameErr = $emailErr = $subjectErr = $messageErr = $messageStatus = "";

//Protect input values from malicious code
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
	$mailCheck = test_input($_POST["mailCheck"]);
  $subject = test_input($_POST["subject"]);
  $message = test_input($_POST["message"]);
	$confirmed = $_POST["confirmed"];
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
    $emailErr = "* Email address is required.";
  } else if ($email != $mailCheck){
		$emailErr = "* Email addresses must match.";
	} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// check if e-mail address is well-formed
		$emailErr = "* Invalid email format.";
	} else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "* Subject is required.";
  } else {
    $subject = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $messageErr = "* Message is required.";
  } else {
    $message = test_input($_POST["message"]);
  }
}

$page_flag = 0;

// Check input values and send if everything is cool.
if ((empty($name) || empty($email) || empty($subject) || empty($message) || $email != $mailCheck)) {
$messageStatus = "Please check that every box has been completed, the email addresses match, and that the email address entered is valid.";
} else {
$page_flag = 1;
}

// mail send
if($page_flag == 1 && $confirmed == 'true') {
    mail($to, $subject, $message, $email);
    $page_flag = 2;
}
 ?>

 <!-- End PHP Action -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Code Queen: Contact Catherine Broker</title>

		<meta name="description" content="Send me a message and we can start on the perfect web solution to suit your business needs!">

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
					<?php var_dump($page_flag); ?>
					<?php var_dump($confirmed); ?>
					<div id="contactForm">
					<?php if($page_flag == 0): ?>
						<?php include('contact-form.php'); ?>
					<?php elseif ($page_flag == 1): ?>
						<?php include('confirm.php'); ?>

					<?php else: ?>
						<p>Thank you for your message!</p>
					<?php endif ?>
				</div>
      </div>

    <!-- Footer -->
    <?php include("footer.html") ?>


		<script type="text/javascript">
			function submitForm() {
				alert("<?= $messageStatus?><?= $nameErr?><?= $emailErr?><?= $messageErr?>");
			}
		</script>
  </body>
</html>
