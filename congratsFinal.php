<?php
    session_start();
    require 'connection.php';
    $sql2 = "select * from questionare where user_srno = '".$_SESSION['id']."';";
    $result2 = mysqli_query($conn, $sql2);
    $display2 = mysqli_fetch_array($result2);
    $sql = "select * from `imp` where 1;";
    $result = mysqli_query($conn, $sql);
    $display = mysqli_fetch_array($result);
    if($display['curr_round'] == 2 and $display['rnd_que'] < $display2['question'] and $display['claim'] == 0)
    {
        $sql = "UPDATE `imp` SET claim = '1'";
        $sql2 = "UPDATE `imp` SET winner = '".$_SESSION['id']."'";
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        $sql3 = "update leaderboard set score = '15000' where user_srno = '".$_SESSION['id']."';";
        $result3 = mysqli_query($conn, $sql3);
    }
    else
    {
        header("location:index.html");
    }
     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>congrats final</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700%7cMarcellus+SC" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- GODLIKE -->
    <link rel="stylesheet" href="assets/css/godlike.css">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>


</head>

<body>

    <div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true"
        data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0"
        data-video-pause-on-page-leave="false" style="background-image: url('assets/images/page-background.jpg');"></div>

    <div class="nk-page-background-audio d-none" data-audio="assets/mp3/purpleplanetmusic-desolation.mp3"
        data-audio-volume="100" data-audio-autoplay="true" data-audio-loop="true" data-audio-pause-on-page-leave="true">
    </div>

    <div class="nk-page-border">
        <div class="nk-page-border-t"></div>
        <div class="nk-page-border-r"></div>
        <div class="nk-page-border-b"></div>
        <div class="nk-page-border-l"></div>
    </div>
    <div class="nk-main">

        <div class="container">
            <div class="nk-gap-2"></div>
            <div class="jumbotron" style="background-color: rgba(30, 30, 30, 0.6); text-align: center;">
               <!-- <h1>Congratulations !!</h1> -->
               <!-- <br> -->
               <h1>HURRAYY !!!</h1>
               <p>🙌You have successfully completed the hunt today🙌</p>
               
               <!-- <p></p> -->
               <br>
               <p> Click the button to get the treasure</p>
               <a href="congrats1.php" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                    <span>Unlock the Treasure</span>
                </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>

        <!-- START: Scripts -->
        <!-- Bootstrap -->
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>


        <!-- Jarallax -->
        <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

        <!-- GODLIKE -->
        <script src="assets/js/godlike.min.js"></script>
        <script src="assets/js/godlike-init.js"></script>
        <!-- END: Scripts -->



</body>

</html>