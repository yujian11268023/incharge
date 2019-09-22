<?php
$link = new mysqli(‘localhost’,’root’,’xinqing8023’,’test’);

$link->set_charset(“utf8”);

if($link->connect_error){
    die(“连接失败:”.$link->connect_error);
}

$sql=“select * from type”;
$res = $link->query($sql);

$data = $res->fetch_all();

echo json_encode($data);

?>