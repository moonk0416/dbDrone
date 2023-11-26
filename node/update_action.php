<!-- update_action.php -->
<?php
        $connect = mysqli_connect('localhost', 'root', 'wjdansrud797', 'dbDrone') or die("fail");
        //POST로 
        $newPW=$_POST['newPW'];
        session_start();
        $userID=$_SESSION['userID'];
        //현재 로그인 한 userID의 PW를 입력한 newPW로 바꾼다.
        $query = "update member set PW='$newPW' where userID='$userID'";
        $result = $connect->query($query);
        if($result) {
        ?>      <script>
                alert('비밀번호가 변경되었습니다.');
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