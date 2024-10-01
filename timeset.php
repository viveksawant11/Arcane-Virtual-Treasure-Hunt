<?php
require 'connection.php';
session_start();
    if($_SESSION['name'] !== 'admin')
    {
        header("location:index.html");
    }
?>

<!DOCTYPE html>
<body>
    <h1> Set Timer </h1>

    
        <fieldset>
        <form action="timeset.php" method='POST' >
            <label for="round">Round:</label>
            <input class="input-field" type="text" name="rnd"  placeholder="round no"> </br>
        </br>
        <label for="no_of_q">No. of questions:</label>
        <input class="input-field" type="text" name="q"  placeholder="number of questions"> </br>
    </br>
    <h4>Set Timer</h4>
        
        <label for="Hrs">Hours:</label>
        <input class="input-field" type="text" name="hrs" placeholder="hours"> </br>
    </br>


        <label for="Minutes">Minutes:</label>
        <input class="input-field" type="text" name="min"  placeholder="minutes"> </br>
    </br>


        <label for="sec">Seconds:</label>
        <input class="input-field" type="text" name="sec"  placeholder="seconds"> </br>
    </br>

    <button class="button" type="submit">START !!!</button>
</form>
        </fieldset>

        <?php
            require 'connection.php';
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $rnd = $_POST['rnd'];
                if($rnd == 2)
                {
                    $sql2= "update `questionare` set question = '1';";
                    $result2 = mysqli_query($conn, $sql2);
                    $sql3 = "update `leaderboard` set score ='0'";
                    $result3 = mysqli_query($conn, $sql3);
                }
                $q = $_POST['q'];
                $hrs = $_POST['hrs'];
                $min = $_POST['min'];
                $sec = $_POST['sec'];
                $total = $hrs *60 *60 + $min * 60 + $sec;
                $sql = "Update `imp` set `timing` ='$total', `start` = '1', `curr_round` = '$rnd', `rnd_que` = '$q' where 1;";
                $result = mysqli_query($conn, $sql);
            }
        ?>
</body>
</html>