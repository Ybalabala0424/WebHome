<html>
<head>
	<!-- 解决弹窗对话框乱码问题 -->
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<?php
header( 'Content-Type:text/html;charset=utf-8' );
$comment = $_POST["comment"];
$userid      = $_GET['userid'];
$articleId         = $_GET["articleId"];
if ( $comment == "") {
	echo "<script>alert('还没有评论噢！'); history.go(-1);</script>";
} else {
	//连接数据库
	$servername = "127.0.0.1";
	$username   = "root";
	$password   = "";
	$dbname     = "project1";
	// 创建连接
	$conn = new mysqli( $servername, $username, $password, $dbname );
	mysql_query( "set names utf8" );
	//SQL语句
	mysql_query( "set character_set_client=utf8" );
	mysql_query( "set character_set_results=utf8" );
	$sql_insert = "insert into comment (articleId,commentContent,commentUser) values('$articleId','$comment','$userid')";
	$sql_update = "UPDATE article SET likes = likes + 1 WHERE id = '$articleId'";
	$res_insert = $conn->query( $sql_insert );
	$res_update = $conn->query($sql_update);
	// $num_insert = $res_insert->num_rows;
	if ( $res_insert && $res_update ) {
		echo "<script>alert('发帖成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	} else {
		echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
	}
}