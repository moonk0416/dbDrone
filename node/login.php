<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/homeStyle.css" />
  </head>
  <body>
      <section class="mainBg">
        <header>
          <div class="container">
            <div class="Title">
              <div to="index.php" class="mainTitle">
                <a class = "linkBtn" href="index.php" titleName Title">GEOSAT</a>
              </div>
            </div>
  
            <nav class="navBtn">
              <a href="index.php" class="Btn">HOME</a>
              <a href="about.php" class="Btn">About</a>
            </nav>
          </div>
        </header>
  
        <hero class="containerHero">
          <div class="weatherAPI">
            <div>
              <img class = "geosatImg" src="img/GEOSATRN.png" alt="">
            </div>
          </div>
          <div class="loginSec">
            <form action="login_action.php" method="POST">
            <label class="loginBox" for="ID">
              <input
                class="inputBox Strong textMain"
                type="text"
                placeholder="ENTER ID"
                name="userID"
              />
            </label>
            <label class="loginBox" for="PW">
              <input
                class="inputBox Strong textMain"
                type="password"
                placeholder="ENTER PASSWORD"
                name="PW"
              />
            </label>
            <div class = "BtnBox">
            <input class="loginBtn" type="submit" name="login" value="Sign In"/>
            </div>
            </form>
            <div class="BtnBox">
              <div class = "subloginBtn" >
                <button class = "subloginBtn textMain Btn" href="find.html">Find ID/PW</button>
                <button class = "subloginBtn textMain Btn" onclick="location.href='join.php'">SIGN UP</button>
              </div>
            </div>
          </div>
        </hero>
  
        <footer>
          <div class="container">
            <div>
              <a href = "index.html" class="Title FooterTitle">GEOSAT</a>
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
