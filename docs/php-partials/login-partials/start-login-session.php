<?php
    session_start();
    if (!isset($_SESSION['url'])) {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $_SESSION['url'] = $_SERVER['HTTP_REFERER'];
        } else {
            $_SESSION['url'] = './index.php';
        }
    }
?>