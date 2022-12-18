<?php
require_once 'koneksi.php';
session_start();

// $sql = 'select * from users where username = '.$username;
$sql = "select * from users where username = 'miok'";
$res = $c->query($sql);

if($res->num_rows > 0){
    $_SESSION['username'] = 'miok';
}
else{
    header('Location: login.php');
}