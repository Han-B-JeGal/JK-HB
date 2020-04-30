<!DOCTYPE>

<?php
// 한 페이지에 보여줄 리스트 수
$record_per_page = 15;
// 한 블럭에 보여줄 페이지 수
$page_per_block = 10;
// 현재 페이지
$now_page = ($_GET['page']) ? $_GET['page'] : 1; 
// 현재 블럭
$now_block = ceil($now_page / $page_per_block);

$connect = mysqli_connect('localhost', 'root', '123456', 'boardINFO') or die ("connect fail");

$sql = "select * from article order by number desc";
$result = $connect->query($query);

// 전체 리스트 수
$total_record = mysql_num_rows($result);

$sql = "select * from article order by number desc LIMIT ". $record_per_page * ($now_page - 1) .",". $record_per_page * $now_page;

$result = mysql_query($sql, $link) or die("SQL 에러");

?>
<html>
<head>
<meta charset="utf-8">
        <title>UuuU</title>
        <link rel="stylesheet" href="./mainDesign.css">
</head>
<body>
	<div>
		<table>
			<tr id="info">
				<td class="num">번호</td>
				<td class="title">제목</td>
				<td class="writer">작성자</td>
				<td class="date">날짜</td>
			</tr>
			<?php
			for ($i = 0; $i < $total_record; $i++) {
			  // 데이터 가져오기
			  mysql_data_seek($result, $i);       
			  $row = mysql_fetch_array($result);   
			?>
			<tr>
				<td class="num"><?= $row["num"] ?></td>
				<td class="title"><a href="read.php?num=<?=$row["num"]?>"> <?= $row["title"] ?></a></td>
				<td class="writer"><?= $row["name"] ?></td>
				<td class="date"><?= $row["wdate"] ?></td>
			</tr>
			<?php }?>
		</table>
		<form action="write.html">
			<input type="submit" value="글쓰기">
		</form>
	</div>
	<div>
	    <tr>
			<?php
                        // 전체 페이지 수
			$total_page = ceil($total_record / $record_per_page);
                        // 전체 블럭 수
			$total_block = ceil($total_page / $page_per_block);

                        // 현재 블럭이 1보다 클 경우
			if(1 < $now_block ) {
			  $pre_page = ($now_block - 1) * $page_per_block;
			  echo '<a href="list.php?page='.$pre_page.'">이전</a>';

			}

			$start_page = ($now_block - 1) * $page_per_block + 1;
			$end_page = $now_block * $page_per_block;

                        // 총 페이지와 마지막 페이지를 같게 하기, 즉 글이 있는 페이지까지만 설정
			if($end_page > $total_page) {
			  $end_page = $total_page;
			}

			?>
			    
			<?php for($i = $start_page; $i <= $end_page; $i++) {?>
			    <td><a href="list.php?page=<?= $i ?>"><?= $i ?></a></td>
			<?php }?>
			
			<?php
                        // 현재 블럭이 총 블럭 수 보다 작을 경우
			if($now_block < $total_block) {
			  $post_page = $now_block * $page_per_block + 1;
			  echo '<a href="list.php?page='.$post_page.'">다음</a>';
			}

			?>
		</tr>
	</div>
</body>
</html>