<?php
session_start(); // 初始化, 才能使用 $_SESSION


unset($_SESSION['pcart']);
header('Content-Type: application/json');
echo json_encode($_SESSION);
