<!-- enroll_drone_action.php -->
<?php
        $connect = mysqli_connect('localhost', 'root', 'wjdansrud797', 'dbDrone') or die("fail");
        session_start();
        //SESSION으로 userID를 불러온다.
        $userID=$_SESSION['userID'];
        //mypage에서 등록한 DroneNum을 불러온다.
        $DroneNum=$_POST['DroneNum'];
        //DroneNum이 일치하는지 확인
        $query = "select * from Drone where Dronenum='$DroneNum'";
        $result = $connect->query($query);
        //일치한다면 이미 등록된 번호라고 경고문을 띄운다.
        if(mysqli_num_rows($result)==1) {
            ?><script>
                alert('이미 존재하는 드론 번호입니다.');
                location.replace("mypage.php");
            </script>
<?php
        }
        // 새로운 드론 번호라면 insert
        $query2 = "insert into Drone (userID, DroneNum) values ('$userID', '$DroneNum')";
        $result = $connect->query($query2);
        if($result) {
        ?>      <script>
                alert('드론 번호가 등록 되었습니다.');
                location.replace("mypage.php");
                </script>
<?php   }
        else{
?>              <script>
                        alert("fail");
                </script>
<?php   }
 
        mysqli_close($connect);
?>