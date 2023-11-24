<!-- logout_action.php -->
<?php
        session_start();
        //세션 파괴
        $result = session_destroy();
        // 파괴되었다면 로그아웃 표시
        if($result) {
?>
        <script>
                alert("로그아웃 되었습니다.");
                // history.back();
                location.replace("./login.php");
        </script>
<?php   }
?>