<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
    <link rel="stylesheet" href="assets/css/leaderboard.css">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
   
    <title>LEADERBOARD</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300i,400,400i,700%7cMarcellus+SC" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">

     <!-- GODLIKE -->
     <link rel="stylesheet" href="assets/css/godlike.css">
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>

    <script>
    window.setInterval('refresh()', 3000); 	

    // Refresh or reload page.
   // function refresh() {
       // window .location.reload();
   // }
</script>

</head>
<body>

<!-- START: Page Border -->
<div class="nk-page-border">
        <div class="nk-page-border-t"></div>
        <div class="nk-page-border-r"></div>
        <div class="nk-page-border-b"></div>
        <div class="nk-page-border-l"></div>
    </div>

    <header class="nk-header nk-header-opaque">
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
            <div class="container">
                <div class="nk-nav-table">

                    <a href="index.html" class="nk-nav-logo" style="text-decoration:none;">
                        <!-- <img src="assets/images/logo.svg" alt="" width="90"> -->
                        <div style="width: 20vh;">
                            <span class="display-4" style="font-size: 20px;">Arcane</span>
                            <span class="display-4 nk-btn-color-main-1" style="font-size: 20px;">2.0</span>
                        </div>
                    </a>


                    <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                        <li class="">
                            <a href="index.html">
                                Home</a>
                        </li>
                        <li class="">
                            <a href="rules.php">
                                Rules</a>

                        </li>
                        <li class="active">
                            <a href="leaderboard.php">
                                Leaderboard</a>
                    </ul>

                    <ul class="nk-nav nk-nav-right nk-nav-icons">

                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->

    </header>
    <div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/images/page-background.jpg');"></div>
    
    <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content d-lg-none">
        <div class="nano">
            <div class="nano-content">
                <a href="index.html" class="nk-nav-logo">
                    <!-- <img src="assets/images/logo.svg" alt="" width="90"> -->
                    <span class="display-4" style="font-size: 20px;">Arcane</span>
                            <span class="display-4 nk-btn-color-main-1" style="font-size: 20px;">2.0</span>
                </a>
                <div class="nk-navbar-mobile-content">
                    <ul class="nk-nav">
                        <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Navbar Mobile -->
  <?php
  require 'connection.php';
  $sql = "select * from `imp` where 1";
  $result = mysqli_query($conn, $sql);
  $display = mysqli_fetch_array($result);
  if($display['winner'] != 0)
  {
      $sql2 = "select * from users where user_srno = '".$display['winner']."';";
      $result2 = mysqli_query($conn, $sql2);
      $display2 = mysqli_fetch_array($result2);
      echo"
      <div>
     <div style='display:flex; justify-content:center; margin-top:5vh'>
         <h1>Winner</h1>
     </div>
     <div style='display:flex; justify-content:center'>
         <img src='/assets/images/treasure.png' style='height:300px'>
     </div>
     <div style='display:flex; justify-content:center;  margin-bottom:5vh'>
         <h3>".$display2['name']."</h3>
     </div> </div>";
  }
 ?>
 
 
<div class="align-items-lg-center container mytable" style=' text-justify:center'>
    <div class="row align-items-lg-center">
        <div class="col">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row" >
                        <div class="col col-sm-3 col-xs-12 col-lg-12 col-xlg-12">
                           <h4 class="title" style="display:flex;justify-content:center">ARCANE 2.0 LEADERBOARD</h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            
                            <tr>
                                <th>Rank</th>
                                <th>Full Name</th>
                                <th>Score</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            require 'connection.php';
                            $sr = 1;
                            $sql = "select * from leaderboard where 1 order by score desc;";
                            $result = mysqli_query($conn, $sql);
                            while($display = mysqli_fetch_array($result))
                            {
                                $sql2 = "select * from users where user_srno = '".$display['user_srno']."';";
                                $result2 = mysqli_query($conn, $sql2);
                                $display2 = mysqli_fetch_array($result2);
                                    echo"<tr>
                                            <td>".$sr."</td>
                                            <td>".$display2['name']."</td>
                                            <td>".$display['score']."</td>
                                        </tr>";
                                        $sr = $sr + 1;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</div>

<script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>
<script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
    <script src="assets/vendor/moment/min/moment.min.js"></script>
    <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
    <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
    <script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
<script src="assets/js/godlike.js"></script>
    <script src="assets/js/godlike.min.js"></script>
    <script src="assets/js/godlike-init.js"></script>
</body>
</html>
