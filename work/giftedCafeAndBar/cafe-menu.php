<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GFTD CAFE & BAR</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav_style.css">
    <link rel="stylesheet" href="css/menu.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <?php include('navigation.html')?>

    <div class="white_container">
      <div class="menuWrapper">

        <div class="foodwrapper">
          <div id="menu_header">
            <h1>Cafe Menu</h1>
          </div>

          <div class="menu_food">
            <table>
              <tr>
                <td><h2>Food</h2></td>
                <!-- <td><img src="img/line.png"></td> -->
              </tr>
            </table>
          </div>

          <div id="seasonal">
            <img src="img/seasonal.png" alt=""><br>
            <h5>季節のメニュー</h5>
            <p>スタッフまでお問い合わせ下さい</p>
          </div>

          <div id="food1">
            <img src="img/curry.png" alt="こだわりカレー">
            <h5>こだわりカレー</h5>
            <p>￥900</p>
          </div>

          <div id="food2">
            <img src="img/pasta.png" alt="こだわりパスタ">
            <h5>こだわりパスタ</h5>
            <p>￥900</p>
          </div>

        </div>

        <div class="drinkwrapper">
          <div id="menu_text">
            <p>最高の空間にお客様に満足いただけるお食事と飲み物をご用意しております。</p>
          </div>

          <div class="menu_drink">
            <table>
              <tr>
                <td><h2>Drink</h2></td>
                <!-- <td><img src="img/line.png"></td> -->
              </tr>
            </table>
          </div>

          <div id="drink1">
            <img src="img/drink1.png" alt="">
            <h5>ドリンク１</h5>
            <p>￥900</p>
          </div>
          <div id="drink2">
            <img src="img/drink2.png" alt="">
            <h5>ドリンク２</h5>
            <p>￥900</p>
          </div>

          <div id="drink3">
            <img src="img/drink1.png" alt="">
            <h5>ドリンク３</h5>
            <p>￥900</p>
          </div>

          <div id="drink4">
            <img src="img/drink2.png" alt="">
            <h5>ドリンク４</h5>
            <p>￥900</p>
          </div>
        </div>

      </div>

      <?php include("footer.html")?>

    </div>


  </body>
</html>
