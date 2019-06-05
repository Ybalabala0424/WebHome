<html>
<head>
    <!-- 解决弹窗对话框乱码问题 -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<?php
header( 'Content-Type:text/html;charset=utf-8' );
$passagename = $_POST["passagename"];
$content1    = $_POST["content1"];
$content2    = $_POST["content2"];
$userid      = $_GET['userid'];
$tag         = $_POST["tag"];
if ( $passagename == "" || $content1 == "" || $content2 == "" ||$tag=="") {
	echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
} else {
	//连接数据库
	$servername = "127.0.0.1";
	$username   = "root";
	$password   = "";
	$dbname     = "project1";
	$likes      = 0;
	$commentsnum= 0;
	// 创建连接
	$conn = new mysqli( $servername, $username, $password, $dbname );
	mysql_query( "set names utf8" );
	//SQL语句
	mysql_query( "set character_set_client=utf8" );
	mysql_query( "set character_set_results=utf8" );
	$sql_insert = "insert into article (passagename,likes,content1,content2,tag,commentsnum) values('$passagename','$likes','$content1','$content2','$tag','$commentsnum')";
	$res_insert = $conn->query( $sql_insert );
	$num_insert = $res_insert->num_rows;
	if ( $res_insert ) {
		echo "<script>alert('发帖成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	} else {
		echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
	}
}