<!-- delete_action.php -->
<?php
        //database 연결
        $connect = mysqli_connect('localhost', 'root', 'wjdansrud797', 'dbDrone') or die("fail");
        // show_m.php에서 입력한 listNum변수를 받아온다.
        $listNum = $_POST['listNum'];
        //sensordata 테이블에서 listnum이 일치하는지 확인
        $query = "select * from SensorData where listNum='$listNum'";
        $result = $connect->query($query);
        //일치한다면 일치하는 listNum을 찾아서 삭제
        if(mysqli_num_rows($result)==1) {
            $query = "delete from SensorData where listNum='$listNum'";
            mysqli_query($connect, $query);
            //db 연결 해제
            mysqli_close($connect);
            ?>
                <script>
                    alert("삭제되었습니다.");
                    location.href = "show_m.php";
                </script>
                <?php
        }
        else {
            ?>
            <script>
                alert('존재하지 않는 리스트 번호입니다.');
                location.href = "show_m.php";
            </script>
            <?php
        }
?>