<?php
$conn = mysqli_connect('localhost','123456','123456','boardINFO');

$userID = $_POST['uname'];
$userPW = $_POST['upass'];

$sql = "select * from userINFO where userID = '".$userID."' AND password = '".$userPW."'";

    $result = mysqli_query($conn,$sql);
    
    $row = mysqli_fetch_array($result);
                $article = array(
                    'userID' => $row['userID'],
                    'userPW' => $row['userPW']
                );
                if(empty($article['userID']) && empty($article['userPW'])) {
                    echo '로그인 실패';
                    echo '<a href = "index.php">돌아가기</a>';
                }
                else {
                    echo "아이디 : ".$article['userID']." 비밀번호 : ".$article['userPW']."</br>";
                    echo '성공했습니다. <a href = "index.php">돌아가기</a>';
                }
?>
