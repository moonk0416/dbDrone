<!-- mypage.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/homeStyle.css" />
</head>

<body>
    <section class="mainBg">
        <header>
            <div class="container">
                <div class="Title">
                    <div to="/" class="mainTitle">
                        <a class="linkBtn" href="/index.php" titleName Title">GEOSAT</a>
                    </div>
                </div>

                <nav class="navBtn">
                    <a href="/index.php" class="Btn">HOME</a>
                    <a href="/about.php" class="Btn">About</a>
                    <a href="/show_m.php" class="Btn">MEASURMENT</a><a href="/mypage.php" class="Btn">MYPAGE</a>
                    <button type="button" class="logoutBtn textMain"
                        onclick="location.href='logout_action.php'">LOGOUT&ensp;</button>
                    <?php
                    //아래의 userID를 불러오기 위한 세션 오픈
                    session_start();
                    $userID = $_SESSION['userID'];
                    //회원가입 때 입력한 userID를 불러온다.
                    echo $userID; ?>님
                </nav>
            </div>
        </header>
        <hero class="containerHero">
            <div class="loginSec">
                <?php
                //database연결
                $connect = mysqli_connect('localhost', 'root', 'wjdansrud797', 'dbDrone') or die("connect fail");
                //member 테이블에서 현재 로그인 된 userID를 불러온다.
                $query = "select * from member where userID='$userID'";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
                // DB 내용을 배열화해서 while문을 통해 현재 로그인 된 userID가 가진 정보를 불러온다.
                while ($row = mysqli_fetch_array($result)) {
                    echo
                        '<div class = "textMain">'
                        . $row['userID'] . '&nbsp'
                        . '</div>'
                        . '<div class = "textMain">'
                        . $row['name'] . '&nbsp'
                        . '</div>'
                        . '<div class = "textMain">'
                        . $row['office'] . '&nbsp'
                        . '</div>'
                        ;
                }
                ?>
                </br> </br>
            </div>
            <div>
                <!-- 드론목록 -->
                <form action="/enroll_drone_action.php" method="POST">
                    <input class="inputBox Strong textMain" type="text" placeholder="Enter your drone number"
                        name="DroneNum" />
                    <input class="enrollBtn Btn" type="submit" name="update" value="UPDATE" />
                </form>
            </div>
            <!-- 아래부터 추가된 것들 -->
            <div> 
                <!-- 비밀번호 변경 -->
                <form action="/update_action.php" method="POST">
                    <input class = "inputBox" type="password" placeholder="변경할 비밀번호를 입력하세요" name="newPW"/>
                    <input class = "enrollBtn Btn" type="submit" name="update" value="update" />
                </form>
            <?php
            $userID = $_SESSION['userID'];
            //userID가 drone 테이블에서 일치하는 것을 가져온다.
            $query = "select * from drone where userID='$userID'";
            $result = $connect->query($query);
            $total = mysqli_num_rows($result);
            // 로그인 된 userID가 가진 droneNum을 배열로 보여준다.
            while ($row = mysqli_fetch_array($result)) {
                echo
                    '<div class = "textMain">'
                    . $row['DroneNum'].'&nbsp'
                    . '</div>'
                    ;
            }
            ?>
            </div>
        </hero>
        <footer>
            <div class="container">
                <div>
                    <a href="/html/index.html" class="Title FooterTitle">GEOSAT</a>
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