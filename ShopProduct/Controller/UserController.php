<?php
require 'DAO.php';
$sql="select * from users where username= '".$_POST['username']. "' and password = '".$_POST['password']."'";
$result=$connection->query($sql);
if($result->num_rows){
    echo "<h1>Dang nhap thanh cong</h1>";
}
else{
    echo "<h1>Dang Nhap khong thanh cong</h1>";
}