<?php

$c = new mysqli("localhost", "root", "", "tictactoe");

if ($c->connect_errno) {
    die("Failed to connect to MySQL: " . $c->connect_error);
}