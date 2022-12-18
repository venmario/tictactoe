<?php
require_once 'koneksi.php';
session_start();
if (isset($_SESSION['username'])){
    echo $_SESSION['username'];
}