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

          <div id="contactForm">
          <form method="post" action="jp_contact_action.php">
            <p style="font-weight: 600;">＊　記入必須項目</p>
            <p>名前：　＊<br>
              <input type="text" placeholder="名前を書いてください。" name="name" value="" maxlength="20"></p>
            <p>メールアドレス：　＊<br>
              <input type="email" placeholder="メールアドレスを書いてください。" name="email" value="" maxlength="20"></p>
            <p>件名： *<br>
              <input type="text" placeholder="メッセージの件名を書いてください。" name="subject" value="" maxlength="20"></p>
            <p>メッセージ：　＊<br>
              <input type="text" placeholder="メッセージを書いてください。" name="message" value="" maxlength="1000">
            </p>
            <p><input type="submit" value="送信"></p>
          </form>
        </div>
      </div>

    <!-- Footer -->
    <?php include("jp_footer.html") ?>

  </body>
</html>
