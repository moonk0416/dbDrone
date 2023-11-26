<!-- insert_m_action.php -->
<?php
//userID를 넘겨주기 위해 session_start()를 작성
session_start();
//database 연결
$connect = mysqli_connect('localhost', 'root', 'wjdansrud797', 'dbDrone') or die("fail");
//POST = insert_m.php에서 입력한 변수값들을 불러온다.
$userID=$_SESSION['userID'];
$DroneNum = $_POST['DroneNum'];
$pressure = $_POST['pressure'];
$temperature = $_POST['temperature'];
$co = $_POST['co'];
$dust = $_POST['dust'];
// $date = $_POST['date'];
// DroneNum이 일치하는지 확인
$query = "select * from Drone where DroneNum='$DroneNum'";
$result = $connect->query($query);
// 일치한다면 sensordata 입력
// listnum은 자동 증가 속성을 넣어서 null로 입력하면 자동으로 번호가 올라간다.
if (mysqli_num_rows($result) == 1) {
    $query2 = "insert into SensorData (listNum, DroneNum, pressure, temperature, co, dust)
                    values (null, '$DroneNum', '$pressure', '$temperature', '$co', '$dust')";
    $regist = $connect->query($query2);
    if ($regist) {
?>
        <script>
            alert('등록되었습니다.');
            location.replace("show_m.php");
        </script>
<?php
    }
}
else {
        ?>
<script>
    alert("존재하지 않는 드론 번호입니다. 드론 번호 등록을 먼저 해주시길 바랍니다.");
    location.replace("mypage.php");
</script>
<?php }
//database 연결 해제
mysqli_close($connect);
?>