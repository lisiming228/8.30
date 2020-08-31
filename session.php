<?php
//将信息存储到服务器，给客户端返回一个加密的cookie
//session前面不能有输出 是头信息
//打开
//session_id(md5("abcd"));
//session_name("myid");
//session_start();
//setcookie("myid",md5("abcd"),time()+10);
echo session_id();
echo "<br>";
echo session_name();

//$_SESSION["name"]="zhangsan";
//unset($_SESSION["name"]);//卸载一个
//echo $_SESSION["name"];

//$_SESSION["age"]=12;
//$_SESSION["sex"]="man";
//echo $_SESSION["age"];
//echo $_SESSION["sex"];
//session_destroy();//一次性全卸载

