<?php
session_start();

$conn = mysqli_connect('localhost','root','123456','boardINFO') or die("fail");

$userID = $_POST['userID'];
$userPW = $_POST['userPW'];

$query = "select * from userINFO where userID='$userID'";
$result = $conn->query($query);


if(mysqli_num_rows($result)==1) {
   
    $row=mysqli_fetch_assoc($result);

    if($row['userPW']==$userPW){
        $_SESSION['userID']=$userID;
        if(isset($_SESSION['userID'])){
            ?>
            <script>
                alert("로그인 되었습니다.");
                // TODO 로그인 성공시 가는 페이지
                location.replace("./index.php");
        </script>

<?php
        }
        else{
            echo "session fail";
        }
    }

        else{
    ?>         <script>
                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                history.back();
            </script>
        <?php
        }
    }
    
    else{
    ?>
        <script>
        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
        history.back();
        </script>
        <?php
    }
    ?>






/*
$sql = "select * from userINFO where userID = '".$userID."' AND password = '".$userPW."'";



    $result = mysqli_query($conn,$sql);
    
    $row = mysqli_fetch_array($result);
                $article = array(
                    'userID' => $row['userID'],
                    'userPW' => $row['userPW']
                );
                if(empty($article['userID']) && empty($article['userPW'])) 
                {
                    echo '로그인 실패';
                    echo '<a href = "index.php">돌아가기</a>';
                }
                else 
                {
                    echo "아이디 : ".$article['userID']." 비밀번호 : ".$article['userPW']."</br>";
                    echo '성공했습니다. <a href = "index.php">돌아가기</a>';
                }
?>

*/