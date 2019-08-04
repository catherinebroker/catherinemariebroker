<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Code Queen: Catherine Broker</title>

			<meta name="description" content="I am a Tokyo based web developer expanding the web presence of businesses and organizations, one line of code at a time!">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/nav_style.css">
    <link rel="stylesheet" href="css/foot_style.css">

    <!-- Script -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <!-- Libraries -->
    <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/favicon.png"/>
  </head>

  <body>
    <!-- Starshine -->
    <div id="starshine"><div class="template shine"></div></div>

    <!--NAVIGATION -->
    <?php include("jp_navigation.html"); ?>

    <!-- Top Section -->
    <section id="section_top">
      <div id="codequeen">
        <img src="images/full_logo.png" alt="Code Queen" >
      </div>
      <h1>ブローカキャサリン・ウエッブエンジニア・東京</h1>
    </section>

    <!-- Services Section -->
    <section id="section_services">
      <div class="banner">
      <h2>Services</h2>
      </div>

      <div class="details_wrapper">
      <div class="details_box service_detail">
        <img src="images/coding_graphic.png"><br>
        <h3>CODING</h3>
        <p>HTML & CSS<br>
          Front end development</p>
      </div>

      <div class="details_box service_detail">
        <img style="height: 85px ; width: 85px" src="images/js_logo.png"><br>
        <h3>DEVELOPMENT</h3>
          <p>Javascript<br>
            JQuery<br>
            PHP<br>
            MySQL</p>
      </div>

      <div class="details_box service_detail">
        <img style="height: 85px ; width: 85px"  src="images/wordpress_logo.png"><br>
        <h3>FRAMEWORKS</h3>
        <p>Wordpress<br>
          Bootstrap</p>
      </div>
      </div>
    </section>


    <!-- Work Section -->
    <section id="section_work">
      <div class="banner">
      <h2>Work</h2>
      </div>

      <div class="details_wrapper">
        <div class="details_box work_detail" id="work_detail">
          <a href="work/circusRoppongi/index.html" target="_blank"><img src="images/circus.png" style="width: 233px;"></a><br>
          <h3>Circus Roppongi</h3>
          <a href="work/circusRoppongi/index.html" target="_blank"><h4>もっとを見る</h4></a>
        </div>

        <div class="details_box work_detail" id="work_detail">
          <a href="work/ezeeBuy/index.html" target="_blank" ><img src="images/ezeebuy.png" style="width: 233px;"></a><br>
          <h3>EZEE Buy</h3>
          <a href="work/ezeeBuy/index.html" target="_blank" ><h4>もっとを見る</h4></a>
        </div>

        <div class="details_box work_detail" id="work_detail">
          <a href="work/giftedCafeAndBar/index.php" target="_blank"><img src="images/giftedcafe.png" style="width: 233px;"></a><br>
          <h3>GFTD CAFE &amp; BAR</h3>
          <a href="#" target="_blank"><h4>(開発途中)</h4></a>
          </div>
        </div>
    </section>


<!-- Footer -->
<?php include("jp_footer.html"); ?>
  </body>
</html>
