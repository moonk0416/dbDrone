<!-- login_action.php -->
<?php
        session_start();
        $connect = mysqli_connect("localhost", "root", "wjdansrud797", "dbDrone") or die("fail");
 
        //POST로 login.php에서 입력한 userID와 PW정보를 불러온다.
        $userID=$_POST['userID'];
        $PW=$_POST['PW'];
 
        //쿼리문으로 아이디가 있는지 검사
        $query = "select * from member where userID='$userID'";
        $result = $connect->query($query);
        //아이디가 있다면 비밀번호를 검사한다.
        if(mysqli_num_rows($result)==1) {
                $row=mysqli_fetch_assoc($result);
                //비밀번호가 맞다면 로그인을 유지하기 위해 userID 세션을 생성한다.
                if($row['PW']==$PW){
                        $_SESSION['userID']=$userID;
                        if(isset($_SESSION['userID'])){
                        ?>
                <script>
                alert("로그인 되었습니다.");
                //로그인되면 메인화면(index.php)로 이동
                location.replace("./index.php");
                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
                //틀렸을 경우
                else {
        ?>
<script>
  //틀렸을 경우
  alert("아이디 혹은 비밀번호가 잘못되었습니다.");
  history.back();
</script>
<?php
                }
        }
                //틀렸을 경우
                else{
?>
<script>
  //틀렸을 경우
  alert("아이디 혹은 비밀번호가 잘못되었습니다.");
  history.back();
</script>
<?php
        }
?>