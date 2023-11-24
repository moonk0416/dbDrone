<!-- insert_m.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/measureStyle.css" />
    <link rel="stylesheet" href="../css/homeStyle.css" />
  </head>
  <body>
    <section class="mainBg">
      <header>
        <div class="container">
          <div class="Title">
            <div to="/" class="mainTitle">
              <a class = "linkBtn" href="../html/index.html" titleName Title">GEOSAT</a>
            </div>
          </div>
          <nav class="navBtn">
            <a href="/" class="Btn">HOME</a>
            <a href="/about.php" class="Btn">ABOUT</a>
            <a href="/show_m.php" class="Btn">MEASURMENT</a>
            <a href="/mypage.php" class="Btn">MYPAGE</a>
            <button type="button" class="logoutBtn textMain" onclick = "location.href='logout_action.php'">LOGOUT&ensp;</button>
<?php
//아래의 userID를 불러오기 위한 세션 오픈
session_start();
//회원가입 때 입력한 userID를 불러온다.
echo $_SESSION['userID']; ?>님 
<?php
//database연결
$connect = mysqli_connect('localhost', 'root', 'wjdansrud797', 'dbDrone') or die("connect fail");
//SensorData테이블 내용을 불러오는 쿼리문
$query = "select * from SensorData;";
$result = $connect->query($query);
$total = mysqli_num_rows($result);
?>
          </nav>
        </div>
      </header>
      <hero class="containerHero conHeroC">
      <div class = "insertM">
      <form action="/insert_m_action.php" method="POST">
        <input class="inputBox Strong textMain" type="number" placeholder="DroneNumber" name="DroneNum"/>
        <input class="inputBox Strong textMain" type="text" placeholder="Pressure" name="pressure" id="userID" />
        <input class="inputBox Strong textMain" type="text" placeholder="Temperature" name="temperature" id="userID" />
        <input class="inputBox Strong textMain" type="text" placeholder="Co" name="co" id="userID" />
        <input class="inputBox Strong textMain" type="text" placeholder="Dust" name="dust" id="userID" />
        <input class="inputBox Strong textMain" type="date" placeholder="date" name="date" id="userID" />
        <!-- submit 타입으로 input값을 POST 방식으로 넘겨준다. -->
        <input class="enroll" type="submit" name="update" value="ENROLL"/>
    </form>
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
