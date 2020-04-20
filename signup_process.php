<?php
$conn = mysqli_connect('localhost','123456','123456','boardINFO');

$userID = $_POST['uname'];
$userPW = $_POST['upass'];

$sql = "insert into user(userID, userPW) VALUES('{$userID},'{$userPW}')";

    $result = mysqli_query($conn,$sql);
    if($result == true)
    {
        echo '성공했습니다. <a href = "index.php">돌아가기</a>';
    }
    else {
        echo '저장하는 과정에 문제가 생겼습니다.';
        error_log(mysqli_error($conn));
    }
?>