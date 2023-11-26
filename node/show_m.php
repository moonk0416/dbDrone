<!-- show_m.php -->
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
                    <div to="/" class="mainTitle">
                        <a class="linkBtn" href="index.php" titleName Title>GEOSAT</a>
                    </div>
                </div>

                <nav class="navBtn">
                    <a href="index.php" class="Btn">HOME</a>
                    <a href="about.php" class="Btn">ABOUT</a>
                    <button type="button" class="logoutBtn textMain"
                        onclick="location.href='show_m.php'">MEASUREMENT</button>
                    <a href="mypage.php" class="Btn">MYPAGE</a>
                    <button type="button" class="logoutBtn textMain"
                        onclick="location.href='logout_action.php'">LOGOUT&ensp;</button>
                    <?php
            //database연결
            $connect = mysqli_connect('localhost', 'root', 'wjdansrud797', 'dbDrone') or die("connect fail");
            //SensorData테이블 내용을 불러오는 쿼리문
            $query = "select * from SensorData;";
            $result = $connect->query($query);
            $total = mysqli_num_rows($result);
            //로그인 된 userID를 불러오기 위한 세션 오픈
            session_start();
            //회원가입 때 입력한 userID를 불러온다.
            echo $_SESSION['userID']; ?>님
                </nav>
            </div>
        </header>
        <hero class="containerHero conHeroC">
            <button type="button" class="logoutBtn" onclick="location.href='insert_m.php'">INSERT</button>
            <form action="delete_action.php" method="POST">
                <input type="number" placeholder="삭제할 리스트 번호" name="listNum"/>
                <input type="submit" name="delete" value="DELETE" />
            </form>
            <div class="boardListWrap">
                <div class="boardList">
                    <div class="boardListHead textMain">
                        <div>List</div>
                        <div class="num">DroneNo</div>
                        <div class="tit">Pressure</div>
                        <div class="writer">Temperature</div>
                        <div class="date">Co</div>
                        <div class="location">Dust</div>
                        <!-- <div>Date</div> -->

                    </div>
                    <div class="boardListBody textMain">
                        <div class="item">
                            <?php
              // while문을 통해 SensorData 테이블 내용을 배열로 바꿔 출력
              while ($row = mysqli_fetch_array($result)) {
                  echo
                      '<div>'
                      . $row['listNum'] . '&nbsp'
                      . '</div>'
                      . '<div class = "num">'
                      . $row['DroneNum'] . '&nbsp'
                      . '</div>'
                      . '<div class = "tit">'
                      . $row['Pressure'] . '&nbsp'
                      . '</div>'
                      . '<div class = "writer">'
                      . $row['Temperature'] . '&nbsp'
                      . '</div>'
                      . '<div class = "date">'
                      . $row['Co'] . '&nbsp'
                      . '</div>'
                      . '<div class = "location">'
                      . $row['Dust'] . '&nbsp'
                      . '</div>'
                      ;
              }
              ?>
                        </div>
                    </div>
                </div>
            </div>
        </hero>
        <footer>
            <div class="container">
                <div>
                    <a href="index.php" class="Title FooterTitle">GEOSAT</a>
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