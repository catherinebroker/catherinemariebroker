<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Code Queen: Catherine Broker</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
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
    <!-- Starshine -->
    <div id="starshine"><div class="template shine"></div></div>

    <!--NAVIGATION -->
    <?php include("navigation.html"); ?>

    <div id="section_about">
      <div class="about_banner">
        <div class="banner">
          <h1>About</h1>
        </div>
    </div>

      <div id="profile_pic">
        <img src="images/profilepic_square.png" alt="A photo of the Queen herself.">
      </div>

      <div id="about_introduction">
        <div id="catchphrase">
          <h3>"Expanding the web presence of businesses and organizations, one line of code at a time!"</h3>
        </div>

        <article>
          <h4>About Me: Catherine Broker</h4>
          <p>Building an interactive, compelling website is a necessary component to increase business and sales in this day and age. Each day technology is improving, and multiple devices that can access the web are being created. A strong web presence is more vital now than ever before. I am dedicated to creating websites that help companies connect with their clients and consumers.</p>
        </article>

        <div class="resumesWrapper">
          <div class="resume_link">
            <a href="documents/Catherine_Marie_Broker_English_Resume.pdf" target="_blank">English Resume</a>
          </div>
            <div class="resume_link">
              <a href="documents/Catherine_Marie_Broker_Japanese_Resume.pdf" target="_blank">Japanese Resume</a>
            </div>
            <div class="resume_link">
              <a href="https://jp.linkedin.com/in/catherine-marie-broker" target="_blank"><i class="fab fa-linkedin"></i> Linked In</a>
            </div>
        </div>
      </div>

      <div class="skills_banner">
        <div class="banner">
          <h1>Skills</h1>
        </div>
      </div>

      <div id="skills">
      <div class="skills_wrapper">
        <div class="skillset">
            <label>HTML5<label><br><br>
            <div class="progress-bar">
              <span id="html5" style="width:100%;"></span>
            </div><br>

            <label>CSS3<label><br><br>
            <div class="progress-bar">
              <span id="css3" style="width:80%;"></span>
            </div><br>

            <label>JavaScript<label><br><br>
            <div class="progress-bar">
              <span id="javascript" style="width:60%;"></span>
            </div><br>

            <label>jQuery<label><br><br>
            <div class="progress-bar">
              <span id="jquery" style="width: 60%;"></span>
            </div><br>

            <label>PHP<label><br><br>
            <div class="progress-bar">
              <span id="php" style="width: 60%;"></span>
            </div>
          </div>

        <div class="skillset">
          <label>WordPress<label><br><br>
          <div class="progress-bar">
            <span id="wordpress" style="width: 80%;"></span>
          </div><br>

          <label>Adobe Cloud<label><br><br>
          <div class="progress-bar">
            <span id="adobecloud" style="width: 80%;"></span>
          </div><br>

          <label>mySQL<label><br><br>
          <div class="progress-bar">
            <span id="mysql" style="width: 40%;"></span>
          </div><br>

          <label>Bootstrap<label><br><br>
          <div class="progress-bar">
            <span id="bootstrap" style="width: 50%;"></span>
          </div><br>

          <label>Japanese<label><br><br>
          <div class="progress-bar">
            <span class="japanese" style="width: 70%;"></span>
          </div><br>
      </div>
    </div>
  </div>
</div>
</div>

    <!-- Footer -->
    <?php include("footer.html"); ?>

  </body>
</html>
