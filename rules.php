<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rules</title>
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

    <link rel="stylesheet" href="assets/css/timer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <style>
        .jumbotron{
            background: linear-gradient(to right, #d3670f, #5e1b0b);
        }
    </style>

</head>
<body>
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
                        <div style="width: 20vh; height:auto">
                            <span class="display-4" style="font-size: 20px;">Arcane</span>
                            <span class="display-4 nk-btn-color-main-1" style="font-size: 20px;">2.0</span>
                        </div>
                    </a>


                    <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                        <li class="">
                            <a href="index.html">
                                Home</a>
                        </li>
                        <li class=" active">
                            <a href="rules.php">
                                Rules</a>
                        </li>
                        <li class="">
                            <a href="leaderboard.php">
                                Leaderboard</a>
                        </li>

                        
                    </ul>

                    <ul class="nk-nav nk-nav-right nk-nav-icons">

                        <li class="single-icon d-lg-none">
                            <a href="#"  data-nav-toggle="#nk-nav-mobile">
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

    <div class="nk-page-background op-5" data-video="https://youtu.be/UkeDo1LhUqQ" data-video-loop="true" data-video-mute="true" data-video-volume="0" data-video-start-time="0" data-video-end-time="0" data-video-pause-on-page-leave="true" style="background-image: url('assets/images/page-background.jpg');"></div>

    <div class="nk-page-background-audio d-none" data-audio="assets/mp3/purpleplanetmusic-desolation.mp3" data-audio-volume="100" data-audio-autoplay="true" data-audio-loop="true" data-audio-pause-on-page-leave="true">
    </div>

    <div class="nk-page-border">
        <div class="nk-page-border-t"></div>
        <div class="nk-page-border-r"></div>
        <div class="nk-page-border-b"></div>
        <div class="nk-page-border-l"></div>
    </div>
    <div class="nk-main">

        <div class="container">
            <div class="nk-gap-1"></div>
            <div class="jumbotron" style="background-color: rgba(30, 30, 30, 0.6); ">
                    <h1 style="text-align: center;">RULES</h1>
                    <br>
            <ul style="text-align: justify;">
                <li>There will be 2 rounds in the Treasure Hunt</li>
                <li>First round consists of 10 questions (easy level)</li>
                <li>Second round consists of 5 questions (medium/hard level)</li>
                <li>Every question is interlinked in a single set, next question will be displayed only after solving
                    the prior one.</li>
                <li>You will get 60 minutes to solve each round.</li>
                <li>For every question the clue will be displayed on discord server after certain amount of time </li>
                <li>There will be elimination after first round based on score</li>
                <li>You can login through ONLY ONE device </li>
            </ul>
                </div>
            </div>
            <!-- <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div> -->

        </div>


        <!-- START: Scripts -->
        <!-- GSAP -->
    <script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
    <script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

    <!-- Popper -->
    <!-- <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script> -->

    <!-- Bootstrap -->
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>


    <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>


    <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
    <script src="assets/vendor/moment/min/moment.min.js"></script>
    <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

    <script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>


    <script src="assets/js/godlike.js"></script>
    <script src="assets/js/godlike.min.js"></script>
    <script src="assets/js/godlike-init.js"></script>



</body>

</html>