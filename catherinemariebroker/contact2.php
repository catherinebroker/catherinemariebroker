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
        <link rel="stylesheet" href="css/mediaqueries.css">

        <!-- Script -->
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>

        <!-- Libraries -->
        <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

        <link rel="shortcut icon" href="images/favicon.png"/>

  </head>
  <body>
  <div id="wrap">
    <div id="main" class="clearfix">

    <!--NAVIGATION -->
      <?php include("navigation.html") ?>

        <!-- Contact Form -->
        <div id="section_contact">
          <div class="banner">
            <h1>Contact</h1>
          </div>

          <div id="contactForm">
            <?php
            $action = "";
              $action = $_REQUEST["action"];
              if ($action=="") /* display the contact form */{
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                Your name:<br>
                <input name="name" type="text" value="" size="30"/><br>
                Your email:<br>
                <input name="email" type="text" value="" size="30"/><br>
                Your message:<br>
                <textarea name="message" rows="7" cols="30"></textarea><br>
                <input type="submit" value="Send email"/>
                </form>
                <?php
              } else/* send the submitted data */ {
                $name=$_REQUEST['name'];
                $email=$_REQUEST['email'];
                $message=$_REQUEST['message'];

                  if (($name=="")||($email=="")||($message=="")) {
                    echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                  } else {
                      $from="From: $name<$email>\r\nReturn-path: $email";
                      $subject="Message sent using your contact form";
                      mail("youremail@yoursite.com", $subject, $message, $from);
                      echo "Email sent!";
                    }
                }
                ?>

    </div>
  </div>

    <!-- Footer -->
    <?php include("footer.html") ?>

  </body>
</html>
