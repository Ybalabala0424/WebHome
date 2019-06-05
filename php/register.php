<html>
<head>
    <!-- 解决弹窗对话框乱码问题 -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<?php
header('Content-Type:text/html;charset=utf-8');
if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册"){
    $userid = $_POST["userid"];
    $username = $_POST["username"];
    $psw = $_POST["password"];
    $psw_confirm = $_POST["confirm"];
    if($userid == "" || $username == "" || $psw == "" || $psw_confirm == ""){
        echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
    }else{
        if($psw == $psw_confirm){
            //连接数据库
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "project1";
            // 创建连接
            $conn = new mysqli($servername, $username, $password,$dbname);
           mysql_query("set names utf8");
            //SQL语句
            $sql = "select userid from user where userid = '$userid'";
            //执行SQL语句
            $result = $conn->query($sql);
            //统计执行结果影响的行数
            $num = $result->num_rows;
            //如果已经存在该用户
            if($num){
                echo "<script>alert('用户名已存在'); history.go(-1);</script>";
            }else{
                //不存在当前注册用户名称
	            mysql_query("set character_set_client=utf8");
	            mysql_query("set character_set_results=utf8");
                $sql_insert = "insert into user(userid,password,username) values('$userid','$psw','$username')";
                $res_insert = $conn->query($sql_insert);
                $num_insert = $res_insert->num_rows;
                if($res_insert){
                    echo "<script>alert('注册成功！'); history.go(-1);</script>";
                }else{
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
                }
            }
        }else{
            echo "<script>alert('密码不一致！'); history.go(-1);</script>";
        }
    }
}else{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
