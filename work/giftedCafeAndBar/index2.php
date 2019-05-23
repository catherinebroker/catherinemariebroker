<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GFTD CAFE & BAR</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav_style.css">
    <link rel="stylesheet" href="css/index.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <div id="top_bg">
      <?php include('navigation.html')?>

      <div class="index_container">
        <div class="headline">
          <h1>タダで使える、みんなの場所</h1>
        </div>

        <div class="news">
          <table>
            <tr>
              <td>2019/08/31</td>
              <td>◆年末年始のお休み◆<br>
                12月30日(日)〜1月6日(日)までお休み致します。<br>
                (1月7日(月)より通常通りの営業となります。)</td>
            </tr>
            <tr>
              <td>2019/08/31</td>
              <td>◆年末年始のお休み◆</td>
            </tr>
          </table>
        </div>

        <div class="views">

          <a href="#" onclick="backgroundChange1()"><img class="shop_thumbnail" src="img/shop_thumbnail1.png" alt=""></a>
          <a href="#" onclick="backgroundChange2()"><img class="shop_thumbnail" src="img/shop_thumbnail2.png" alt=""></a>
          <a href="#" onclick="backgroundChange3()"><img class="shop_thumbnail" src="img/shop_thumbnail2.png" alt=""></a><br>

          <img class="thumb360" src="img/360_icon.png" alt="">
        </div>

      </div>
    </div>
    <?php include("footer.html")?>

    <script type="text/javascript">
    var image = document.getElementById("logo");
    image.src = "img/logo_icon_white.png";
    </script>

  </body>
</html>
