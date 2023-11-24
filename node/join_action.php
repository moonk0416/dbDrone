<!-- join_action.php -->
<?php
        $connect = mysqli_connect('localhost', 'root', 'wjdansrud797', 'dbDrone') or die("fail");
        //POST로 받아옴
        $userID=$_POST['userID'];
        $PW=$_POST['PW'];
        $office=$_POST['office'];
        $name=$_POST['name'];
        //입력받은 데이터를 DB에 저장한다.
        $query = "insert into member (name, userID, office, PW) values ('$name', '$userID', '$office', '$PW')";
        $result = $connect->query($query);
        //저장이 됬다면 (result = true) 가입 완료
        if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("./login.php");
                </script>
 
<?php   }
        else{
?>              <script>
                        alert("fail");
                </script>
<?php   }
 
        mysqli_close($connect);
?>