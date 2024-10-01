<?php
    require 'connection.php';
    session_start();
    $sql = "UPDATE `imp` set `start` = '0';";
    $result = mysqli_query($conn, $sql);
    header("location:congrats1.php");
?>