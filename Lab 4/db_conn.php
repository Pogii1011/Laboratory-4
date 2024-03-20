<?php 
https://github.com/Lewdlinguini/Test3.1
$name = "localhost";
$uname = "root";
$password = "";
$db_name = "IPT101";

$conn = mysqli_connect($name, $uname, $password, $db_name);

if(!$conn){
    echo "connection failed!";
}