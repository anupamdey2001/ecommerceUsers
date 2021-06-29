<?php
$username = 'root';
$password = '';
$database = 'user';
$server = 'localhost';
$connect = mysqli_connect($server ,$username ,$password ,$database) or die($connect . mysqli_connect_error());
?>