<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>UuuU</title>
<!--
<style>
td {font-size : 9pt;}
A:link {font : 9pt; color : black; text-decoration : none;
font-family : 굴림; font-size : 9pt;}
A:visited {text-decoration : none; color : black; font-size : 9pt;}
A:hover {text-decoration : underline; color : black;
font-size : 9pt;}
</style>
</head>
!-->
<body topmargin=0 leftmargin=0 text=#464646>

<?php
    session_start();
 //session에 데이터가 없다면 로그인 화면으로 GO
 if (!isset($_SESSION['userID'])) {
    header('Location : http://127.0.0.1/index.php');
}
// 글 정보 가져오기
$number = $_GET['number'];
$connect = mysqli_connect('localhost', 'root', '123456', 'boardINFO') or die ("connect fail");
$query = "SELECT * FROM article WHERE number=$number";
$result=$connect->query($query);
$row=mysql_fetch_array($result);   
?>
<table width=580 border=0 cellpadding=2 cellspacing=1
bgcolor=#777777>
<tr>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>글번호</td>
    <td width=240 bgcolor=white><?php echo $row[number]?></td>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>제 목</td>
    <td width=240 bgcolor=white><?php echo $row[title]?></td>
</tr>
<tr>
    <td bgcolor=white colspan=4>
    <font color=black>
    <pre><?php echo $row[content]?></pre>
    </font>
    </td>
</tr>

<td width=50 height=20 align=center bgcolor=#EEEEEE>글쓴이</td>
    <td width=240 bgcolor=white><?php echo $row[id]?></td>

<tr>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>
    날&nbsp;&nbsp;&nbsp;짜</td><td width=240
    bgcolor=white><?php echo $row[date]?></td>
    <td width=50 height=20 align=center bgcolor=#EEEEEE>조회수</td>
    <td width=240 bgcolor=white><?php echo $row[hit]?></td>
</tr>

    </body>     
</html>
