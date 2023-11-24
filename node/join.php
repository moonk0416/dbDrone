<!-- join.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/homeStyle.css"/>
  </head>
  <body>
    <form action = "../join_action.php" method="POST">
    <section class = "mainBg">
      <header>
        <div class = "container">
          <div class="Title">
            <div to="/" class="mainTitle">
              <a class = "linkBtn" href="/" titleName Title">GEOSAT</a>
            </div>
          </div>
          <nav class="navBtn">
            <a href="/" class="Btn">HOME</a>
            <a href="../about.php" class="Btn">ABOUT</a>
          </nav>
        </div>
      </header>
      <hero class = "containerHero">
        <div class="loginSec">
          <label class="loginBox loginBoxH" for="ID">
            <input
              class="inputBox Strong textMain"
              type="text"
              placeholder="ENTER ID"
              name ="userID"
              id="userID"
            />
            <span class = "textAlert"></span>
          </label>
          <label class="loginBox" for="PW">
            <input
              class="inputBox Strong textMain"
              type="password"
              placeholder="ENTER PASSWORD"
              name="PW"
              id="PW"
            />
          </label>
          <label class="loginBox loginBoxH" for="REPW">
            <input
              class="inputBox Strong textMain"
              type="password"
              placeholder="RETYPE PASSWORD"
              name="PW2"
              onchange = "pwCheck()"
              id="PW2"
            />
            <span id = "pwrecheck" class = "textAlert">PW가 일치하지 않습니다.</span>
          </label>
          <label class="loginBox" for="NAME">
            <input
              class="inputBox Strong textMain"
              type="text"
              placeholder="ENTER NAME"
              name="name"
              id="name"
            />
          </label>
          <label class="loginBox" for="OFFICE">
            <input
              class="inputBox Strong textMain"
              type="text"
              placeholder="ENTER YOUR OFFICE"
              name="office"
              id="office"
            />
          </label>
          <div class="BtnBox">
            <button class="loginBtn" id="signupBtn" type="submit">SIGNUP</button>
          </div>
        </div>
      </hero>

      <footer>
        <div class = "container">
            <div>
              <a href = "/" class="Title FooterTitle">GEOSAT</a>
            </div>

            <div class = "copyright">
                <p class = "Strong">국지형 기상관측 및 먼지지붕 관측</p>
                <p>© 2022 by Hanseo AeroSpace S/W DBLab</p>
                <p>CocoPig1028, moonk0416</p>
            </div>
        </div>
    </footer>
    </section>
    </form>
  </body>
  <script type = "text/javascript">
    function pwCheck() {
      var x = document.getElementById("pwrecheck");
      var p1 = document.getElementById("PW").value;
      var p2 = document.getElementById("PW2").value;

      if( p1 != p2 ) {
        x.style.display = 'block';
        var checkP = false;
        return false;
      }else {
        x.style.display = "";
        var checkP = true;
        return true;
      }
    }
  </script>
</html>
