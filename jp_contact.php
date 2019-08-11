<?php
// define variables and set to empty values
$to = "catherinemariebroker@gmail.com";
$name = $email = $subject = $message = "";
$nameErr = $emailErr = $subjectErr = $messageErr = $messageStatus = "";
$page_flag = 0;

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
    $nameErr = "＊ 名前は記入必須です。";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "＊ メールアドレスは記入必須です。";
  } else if ($email != $mailCheck){
		$emailErr = "* 同じメールアドレスを入力してください。";
	} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// check if e-mail address is well-formed
		$emailErr = "* 正しいメールアドレスを入力してください。";
	} else {
    $email = test_input($_POST["email"]);
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
}

// Check input values and send if everything is cool.
if ((empty($name) || empty($email) || empty($subject) || empty($message) || $email != $mailCheck)) {
$messageStatus = "以下の項目を全て入力してください。";
} else {
$page_flag = 1;
}

// Confirmation
if ($confirmed == 'true') {
	$page_flag = 2;
}

// Send Mail
if($page_flag == 2) {
    mail($to, $subject, $message, $email);
}
 ?>

 <!-- End PHP Action -->

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
						<?php if($page_flag == 0): ?>
							<?php include('jp_contact-form.php'); ?>
						<?php elseif ($page_flag == 1): ?>
							<?php include('jp_confirm.php'); ?>
						<?php else: ?>
							<div id="contactResults">
							<p class="thankyou">お問い合わせ頂き有難う御座います！<br>
								3営業日以内にご連絡させて頂きます。
							</p>
							<a href="contact.php"><button type="button" id="anotherMessage" name="">別のお問い合わせをする</button></a>
							</div>
						<?php endif ?>
        	</div>
      </div>

    <!-- Footer -->
    <?php include("jp_footer.html") ?>

  </body>
</html>
