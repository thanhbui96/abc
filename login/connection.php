<?php
$server_password = "admin";
$server_host = "localhost:3306";
$database = 'smartgarden';
$server_username= 'root';
 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
?>