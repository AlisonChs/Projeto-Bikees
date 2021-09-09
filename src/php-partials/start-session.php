<?php
    session_start();
    if (isset($_SESSION['url'])) {
        unset($_SESSION['url']);
    }
?>