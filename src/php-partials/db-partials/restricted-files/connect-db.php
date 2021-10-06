<?php
    $connection = mysqli_connect("localhost", "root", "", "bdteste") or die (mysqli_error($connection));
    mysqli_set_charset($connection, 'utf8mb4');
?>