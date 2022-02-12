<?php

session_start();

if(!isset($_SESSION['email'])) {
    header("Location: /php2022/challenges/auth/login.php");
    exit;
}