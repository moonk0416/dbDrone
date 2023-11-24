<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/homeStyle.css" />
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
<?php
session_start();
//로그인이 되었다면 userID를 불러와 로그인 정보 표시
if (isset($_SESSION['userID'])) {
    ?>
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
<?php }
        ?>
          </nav>
        </div>
      </header>
      <hero class="containerHero">
      <div class = "weatherSec">
      <div class="search">
      <input type="text" class="search-bar inputBox textMain" placeholder="Search">
      <button class = "wtSearchBtn"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1.5em"
          width="1.5em" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
          </path>
        </svg></button>
    </div>
    <div class="weather loading">
      <h2 class="city textMain">Weather in Denver</h2>
      <h1 class="temp textMain">51°C</h1>
      <div class="flex">
        <img src="https://openweathermap.org/img/wn/04n.png" alt="" class="icon" />
        <div class="description textMain">Cloudy</div>
      </div>
      <div class="humidity textMain">Humidity: 60%</div>
      <div class="wind textMain">Wind speed: 6.2 km/h</div>
    </div>
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
  <script>
        let weather = {
  apiKey: "376b97ef5bd5220867886a0b05429a37",
  fetchWeather: function (city) {
    fetch(
      "https://api.openweathermap.org/data/2.5/weather?q=" +
        city +
        "&units=metric&appid=" +
        this.apiKey
    )
      .then((response) => {
        if (!response.ok) {
          alert("No weather found.");
          throw new Error("No weather found.");
        }
        return response.json();
      })
      .then((data) => this.displayWeather(data));
  },
  displayWeather: function (data) {
    const { name } = data;
    const { icon, description } = data.weather[0];
    const { temp, humidity } = data.main;
    const { speed } = data.wind;
    document.querySelector(".city").innerText = "Weather in " + name;
    document.querySelector(".icon").src =
      "https://openweathermap.org/img/wn/" + icon + ".png";
    document.querySelector(".description").innerText = description;
    document.querySelector(".temp").innerText = temp + "°C";
    document.querySelector(".humidity").innerText =
      "Humidity: " + humidity + "%";
    document.querySelector(".wind").innerText =
      "Wind speed: " + speed + " km/h";
    document.querySelector(".weather").classList.remove("loading");
  },
  search: function () {
    this.fetchWeather(document.querySelector(".search-bar").value);
  },
};

document.querySelector(".search button").addEventListener("click", function () {
  weather.search();
});

document
  .querySelector(".search-bar")
  .addEventListener("keyup", function (event) {
    if (event.key == "Enter") {
      weather.search();
    }
  });

weather.fetchWeather("Denver");
  </script>
</html>
