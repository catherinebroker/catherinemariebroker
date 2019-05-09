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
            <h1>Contact</h1>
          </div>

          <div id="contactForm">
          <form method="post" action="contact_action.php">
            <p style="font-weight: 600;">* required field</p>
            <p>Name: *<br>
              <input type="text" placeholder="Write your name here." name="name" value="" maxlength="20"></p>
            <p>Email Address: *<br>
              <input type="email" placeholder="Write your email address here." name="email" value="" maxlength="20"></p>
            <p>Subject: *<br>
              <input type="text" placeholder="Write the subject of your message here." name="subject" value="" maxlength="20"></p>
            <p>Message: *<br>
              <input type="text" placeholder="Write your message here." name="message" value="" maxlength="1000"></input>
            </p>
            <p><input type="submit" value="Submit"></p>
          </form>
        </div>
      </div>
    </div>

    </div>
  </div>

    <!-- Footer -->
    <?php include("footer.html") ?>

  </body>
</html>
