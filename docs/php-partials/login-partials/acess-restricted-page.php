<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] != "sim") {
      header('location: ../../log-in.php');
    } else {
      header('location: ../../restricted-page.php');
    }
} else {
  header('location: ../../log-in.php');
}
?>