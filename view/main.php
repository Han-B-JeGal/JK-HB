<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>UuuU</title>
        <link rel="stylesheet" href="./mainDesign.css">
    </head>
    <?php
                $connect = mysqli_connect('localhost', 'root', '123456', 'boardINFO') or die ("connect fail");
                $query ="select * from article order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
 
        ?>
        <h1 align=center>게시판</h1>
        <table align = center>
        <thead align = "center">
        <form class="box">
        <tr>
        <td width = "50" align="center">번호</td>
        <td width = "500" align = "center">제목</td>
        <td width = "100" align = "center">작성자</td>
        <td width = "200" align = "center">날짜</td>
        <td width = "50" align = "center">조회수</td>
        </tr>
        </thead>
        </form>
 
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                <td width = "50" align = "center"><?php echo $total?></td>
                <td width = "500" align = "center">
                <a href = "viewArticle.php?number=<?php echo $rows['number']?>">
                <?php echo $rows['title']?></td>
                  <td width = "100" align = "center"><?php echo $rows['id']?></td>
                <td width = "200" align = "center"><?php echo $rows['date']?></td>
                <td width = "50" align = "center"><?php echo $rows['hit']?></td>
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>
 
        <div class = text>
           <!-- TODO !-->
        <font style="cursor: hand"onClick="location.href='./writeArticle.php'">글쓰기</font> 
        </div> 
    </body>     
</html>