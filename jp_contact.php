<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Code Queen: Catherine Broker</title>

		<meta property="og:title" content="Code Queen: Catherine Brokerにメールする" />
		<meta property="og:description" content="ビジネスとセールスが融合している現代では、インパクトのあるWEBサイトが必須です。日々テクノロジーは進化し、WEBサイトにアクセスできる新しい機器が作られています。企業の方々はよりもいいが必要です。企業とお客さんを繋げるためのWEBサイトを作成します。" />
		<meta property="og:image" content="https://catherinemariebroker.com/images/CodeQueenMeta_jp.png" />
		<meta property="og:image:width" content="700" />
		<meta property="og:image:height" content="500" />
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://catherinemariebroker.com/jp_contact.php" />
		<meta property="og:site_name" content="Code Queen: Catherine Broker" />
		<meta property="og:locale" content="ja_JP" />
		<meta property="og:locale:alternate" content="en_US" />

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
            <h2>Contact</h2>
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
