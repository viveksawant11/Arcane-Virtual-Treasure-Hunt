<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Question</title>
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

</head>
<body>

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
            <div class="nk-gap-2"></div>
            <div class="jumbotron" style="background-color: rgba(30, 30, 30, 0.6); ">
                <div class="row">
                    
                    <div class="col-6">
                        <div id="app"></div>
                        <script>
const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 180;
const ALERT_THRESHOLD = 60;

const COLOR_CODES = {
  info: {
    color: "green"
  },
  warning: {
    color: "orange",
    threshold: WARNING_THRESHOLD
  },
  alert: {
    color: "red",
    threshold: ALERT_THRESHOLD
  }
};

// const TIME_LIMIT = localStorage.getItem("mytime");
var TIME_LIMIT = 300;

// localStorage.setItem()
let timePassed = 0;
let timeLeft = TIME_LIMIT;
let timerInterval = null;
let remainingPathColor = COLOR_CODES.info.color;

document.getElementById("app").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div>
`;



startTimer();

function onTimesUp() {
  clearInterval(timerInterval);
}

function startTimer() {
  timerInterval = setInterval(() => {
    timePassed = timePassed += 1;
    timeLeft = TIME_LIMIT - timePassed;
    document.getElementById("base-timer-label").innerHTML = formatTime(
      timeLeft
    );
    setCircleDasharray();
    setRemainingPathColor(timeLeft);

    localStorage.setItem("mytime", timeLeft);
    if (timeLeft === 0) {
      onTimesUp();
      window.location.replace("congratsDemo.html");
    }
  }, 1000);
}

function formatTime(time) {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  if (seconds < 10) {
    seconds = `0${seconds}`;
  }

  return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
  const { alert, warning, info } = COLOR_CODES;
  if (timeLeft <= alert.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(warning.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(alert.color);
  } else if (timeLeft <= warning.threshold) {
    document
      .getElementById("base-timer-path-remaining")
      .classList.remove(info.color);
    document
      .getElementById("base-timer-path-remaining")
      .classList.add(warning.color);
  }
}

function calculateTimeFraction() {
  var rawTimeFraction = timeLeft / TIME_LIMIT;
  return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
}

function setCircleDasharray() {
  const circleDasharray = `${(
    calculateTimeFraction() * FULL_DASH_ARRAY
  ).toFixed(0)} 283`;
  document
    .getElementById("base-timer-path-remaining")
    .setAttribute("stroke-dasharray", circleDasharray);
}
</script>

                    </div>
                    <div class="col-6">
                        <h5 style="text-align:right;">Question : 1</h5> 
                        <h3 style="text-align: right;">Demo</h3>                    
                        <h5 style="text-align: right;">Score : 1524</h5>    
                    </div>
                </div>
                <br>
                <div style="display: flex;justify-content: center;">
                    <img src='arc/q1com.jpg' width='350vh' height='350vh'>
                </div>
                <?php
                    require 'connection.php';
                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                        $ans = $_POST['answer'];
                        $sql = "Select * from `demo` where queno='1'";
                        $result= mysqli_query($conn, $sql);
                        $display = mysqli_fetch_array($result);
                        $answer = $display['ans'];
                        if($answer == $ans)
                        {
                            echo"<div style='display: flex;justify-content: center; margin-top: 50px;'>
                            <input class='form-control' type='text' name='answer' value = '".$ans."' placeholder='Enter your answer here !' style='width: 400px; background-color:green'>
                        </div>
                        <div class='row' style='margin-top:20px'>    
                            <div class='col' style='display:flex; justify-content: center'>
                            <a href='congratsDemo.html' class='nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4'>
                            <span>Next</span>
                        </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </form>";
                        }
                        else 
                        {
                            echo "<form method='post' action='demoquestion.php'>
                        <div style='display: flex;justify-content: center; margin-top: 50px;'>
                            <input class='form-control' type='text' name='answer' value = '".$ans."' placeholder='Enter your answer here !' style='width: 400px; background-color:red'>
                        </div>
                        <div class='row' style='margin-top:20px'>
                            <div class='col' style='display:flex; justify-content: center;'>
                                <button class='nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4' type='submit'>
                                    <span>Check</span>
                                </button>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </form>";
                        }
                    }
                    else{
                        echo "<form method='post' action='demoquestion.php'>
                        <div style='display: flex;justify-content: center; margin-top: 50px;'>
                            <input class='form-control' type='text' name='answer' placeholder='Enter your answer here !' style='width: 400px;'>
                        </div>
                        <div class='row' style='margin-top:20px'>
                            <div class='col' style='display:flex; justify-content: center;'>
                                <button class='nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4' type='submit'>
                                    <span>Check</span>
                                </button>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </form>";
                    }
                ?>




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