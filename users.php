<?php
require 'connection.php';
session_start();
    if($_SESSION['id'] != '1')
    {
        header("location:index.html");
    }
?>

<!DOCTYPE html>
<body>
    <h1> Participants' Data </h1>

    
        <fieldset>
        <form action="users.php" method="POST">
        
        

        <label for="name">Name:</label>
        <input class="input-field" type="text" name="name" size="40" placeholder="Name"> </br>
    </br>
</br>

        <label for="Username">Username:</label>
        <input class="input-field" type="text" name="username" size="40" placeholder="Username"> </br>
    </br>
</br>

        <label for="Password">Password:</label>
        <input class="input-field" type="text" name="password" size="40" placeholder="Password"> </br>
    </br>
</br>
    <button type="submit"> Submit </button>
        </fieldset>

        <?php
            require 'connection.php';
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sql = "INSERT INTO `users`(username, `password`, `name`) values ('$username', '$password', '$name');";
                $result = mysqli_query($conn, $sql);
                $sql3 = "select * from `users` where username = '$username';";
                $result3 = mysqli_query($conn, $sql3);
                $display = mysqli_fetch_array($result3);
                $sql2 = "INSERT INTO `questionare`(question, user_srno) values('1', '".$display['user_srno']."');";
                $result2 = mysqli_query($conn, $sql2);
                $sql4 = "INSERT INTO `leaderboard`(score, user_srno) values('0', '".$display['user_srno']."');";
                $result4 = mysqli_query($conn, $sql4);
            }
        ?>
</body>
</html>