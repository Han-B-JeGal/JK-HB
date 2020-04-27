<!-- 
 -->
 <?php
 
 $connect = mysqli_connect('localhost', 'root', '123456', 'boardINFO') or die("fail");

 $userID = $_POST['userID'];
 $userPW = $_POST['userPW'];
 $checkPW = $_POST['checkPW'];

 //입력받은 데이터를 DB에 저장
 $query = "insert into userINFO (userID, userPW) values ('$userID', '$userPW')";

 if($userPW == $checkPW){

     $result = $connect->query($query);

 //저장이 됐다면 (result = true) 가입 완료
 if($result) {
 ?>      <script>
         alert('가입 되었습니다.');
         location.replace("./index.php");
         </script>

<?php   }
 else{
?>              <script>
                 
                 alert("FAIL");
         </script>
<?php   }
 
 mysqli_close($connect);
 }
else{
    ?>
    <script>
    alert("비밀번호 불일치");
    history.back(-1); //-1값 넣으면 틀리기전으로 이동
    </script>
    <?php
}
?>