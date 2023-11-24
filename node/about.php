<!-- about.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/aboutStyle.css" />
  </head>
  <body>
    <section class="mainBg">
      <header>
        <div class="container">
          <div class="Title">
            <div to="/" class="mainTitle">
              <a class = "linkBtn" href="/" titleName Title">GEOSAT</a>
            </div>
          </div>
          <nav class="navBtn">
            <a href="/" class="Btn">HOME</a>
            <a href="/about.php" class="Btn">ABOUT</a>
          </nav>
          <?php
//session 명령어를 사용하기 위해 session_start();
session_start();

//로그인이 되었다면 회원가입 때 입력한 userID를 불러와 로그인 정보 표시
if (isset($_SESSION['userID'])) {
    ?>
    <!-- 로그인 되었다면 버튼 표출 -->
    <button type="button" class="logoutBtn textMain" onclick ="location.href='show_m.php'">&ensp;MEASUREMENT</button>
    <a href="/mypage.php" class = "Btn" >MYPAGE</a>
    <button type="button" class="logoutBtn textMain" onclick = "location.href='logout_action.php'">LOGOUT&ensp;</button>
    <?php echo $_SESSION['userID']; ?>님

<?php
//로그인이 되어있지 않으면 무조건 로그인 먼저 하도록
} else {
        ?> 
<button class = "Btn textMain headerLoginBtn" onclick="location.href='/login.php'">LOGIN</button>
<br />
<?php } ?>
        </div>
      </header>
      <hero class="containerHero">
        <div class = "aboutSec">
          <div>
            <img class = "geosatImg" src="../img/GEOSATRN.png" alt="">
          </div>
          <h2 class = "textMain">기상 관측 및 예보 사이트</h2>
          <br/>
          <p class = "textMain">당신의 원활한 연구를 위해 기상데이터 및 자료를 제공합니다.</p>
          <p class = "textMain">온도, 습도, 강수량 뿐만이 아닌 이상기체의 농도 미세먼지 농도 등의 정보를 제공합니다.</p>
          <p class = "textMain">의뢰를 통하여 국지의 기상관측을 요청할 수 있습니다.</p>
          <br/>
          <span class = "textMain">- Hanseo Univ. DB LAB -</span>
        </div>
      </hero>
      <footer>
        <div class="container">
          <div>
            <a href = "/" class="Title FooterTitle">GEOSAT</a>
          </div>

          <div class="copyright">
            <p class="Strong">국지형 기상관측 및 먼지지붕 관측</p>
            <p>© 2022 by Hanseo AeroSpace S/W DBLab</p>
            <p>CocoPig1028, moonk0416</p>
          </div>
        </div>
      </footer>
    </section>
  </body>
</html>
