<?php
require 'connection.php';
$name = "admin";
$username = "maverick";
$password = "maverickbodh";
$sql3 = "select * from `users` where username = '$username';";
$result3 = mysqli_query($conn, $sql3);
$num = mysqli_num_rows($result3);
if($num == 0)
{
$sql = "INSERT INTO `users`(username, `password`, `name`) values ('$username', '$password', '$name');";
$result = mysqli_query($conn, $sql);
$sql3 = "select * from `users` where username = '$username';";
$result3 = mysqli_query($conn, $sql3);
$display = mysqli_fetch_array($result3);
$sql2 = "INSERT INTO `questionare`(question, user_srno) values('1', '".$display['user_srno']."');";
$result2 = mysqli_query($conn, $sql2);
$sql4 = "INSERT INTO `leaderboard`(score, user_srno) values('0', '".$display['user_srno']."');";
$result4 = mysqli_query($conn, $sql4);
header("location:index.html");
}
?>