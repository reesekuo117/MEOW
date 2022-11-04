<?php
session_start(); // 初始化, 才能使用 $_SESSION
session_destroy();

echo 'OK';
