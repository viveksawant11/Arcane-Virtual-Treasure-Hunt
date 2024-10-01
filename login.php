<?php
    require 'connection.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $usrnm = $_POST['username'];
        $pass = $_POST['password'];
        $sql = "Select * from users where username = '$usrnm' and password = '$pass'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            session_start();
            $display = mysqli_fetch_array($result);
            $_SESSION['id'] = $display['user_srno'];
            $_SESSION['name'] = $display['name'];
            if($_SESSION['name'] == 'admin')
            {
                header("location:timeset.php");
            }
            else{
            header("location:question.php");
            }
        }
        else
        {
            echo "Login failed";
        }
    }
?>