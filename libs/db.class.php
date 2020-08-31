<?php
namespace libs;
class db{
    function __construct(){
        global $config;
        $host=isset($config["database"]["host"])?$config["database"]["host"]:"locahost";
        $username=isset($config["database"]["username"])?$config["database"]["username"]:"root2";
        $password=isset($config["database"]["password"])?$config["database"]["password"]:"123456";
        $dbname=isset($config["database"]["dbname"])?$config["database"]["dbname"]:"wui2006";
        $port=isset($config["database"]["port"])?$config["database"]["port"]:"3306";

        $db=@ new \mysqli($host,$username,$password,$dbname,$port);
        if($db->connect_error){
            die ("数据库连接错误");
        }
        $db->query("set names utf8");

        $this->db=$db;

    }
    function close(){
        mysqli_close($this->db);
    }
}