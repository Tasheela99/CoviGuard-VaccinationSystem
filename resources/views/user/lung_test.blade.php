<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Covi Guard</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .container-fluid {
            width: 100%;
            height: 100vh;
        }

        .body-outer {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url("/images/background2.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        .body-inner {
            width: 1000px;
            height: 700px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: transparent;
            z-index: 1;

        }

        .title {
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px;

        }

        .title h2 {
            font-family: Ubuntu;
            color: blue;
            font-weight: 900;
            font-size: 50px;
        }

        .timer {
            width: 100%;
            height: 100%;
        / / box-shadow: 0 0 10 px black;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .left {
            width: 30%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .how-to-test {
            margin-bottom: 20px;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 10px black;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .how-to-test ol li {
            font-size: 13px;
            font-family: Ubuntu;
            text-transform: capitalize;
            font-weight: 800;
        }

        .test-results {
            width: 100%;
            height: 100%;
            box-shadow: 0 0 10px black;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .result-title {
            width: 100%;
            height: 20%;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .result-title h3 {
            font-family: Ubuntu;
            font-weight: 800;
            text-transform: uppercase;
            color: blue;
        }

        .result-pane {
            width: 100%;
            height: 80%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .result-box {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            font-weight: 900;
        }

        .result-name {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 15px;
        }

        .rst1 {
            color: red;
        }

        .rst2 {
            color: yellow
        }

        .rst3 {
            color: rgb(9, 244, 17)
        }

        .rst4 {
            color: blue
        }

        .rst1:hover {
            cursor: pointer;
            font-size: 20px;
            font-weight: 900;
            transition-duration: 2s;
        }

        .rst2:hover {
            cursor: pointer;
            font-size: 20px;
            font-weight: 900;
            transition-duration: 2s;
        }

        .rst3:hover {
            cursor: pointer;
            font-size: 20px;
            font-weight: 900;
            transition-duration: 2s;
        }

        .rst4:hover {
            cursor: pointer;
            font-size: 20px;
            font-weight: 900;
            transition-duration: 2s;
        }

        .box {
            width: 150px;
            height: 20px;
            margin: 5px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }


        /*testing circle*/

        .test-round {
            width: 70%;
            height: 100%;
            box-shadow: 0 0 10px black;
            margin-left: 20px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .base-timer {
            position: relative;
            width: 400px;
            height: 400px;
        }

        .base-timer__svg {
            transform: scaleX(-1);
        }

        .base-timer__circle {
            fill: none;
            stroke: none;
        }

        .base-timer__path-elapsed {
            stroke-width: 0px;
            stroke: grey;
        }

        .base-timer__path-remaining {
            stroke-width: 10px;
            stroke-linecap: round;
            transform: rotate(90deg);
            transform-origin: center;
            transition: 1s linear all;
            fill-rule: nonzero;
            stroke: currentColor;
        }

        .base-timer__path-remaining.green {
            color: green;
        }

        .base-timer__path-remaining.yellow {
            color: yellow;
        }

        .base-timer__path-remaining.red {
            color: red;
        }

        .base-timer__path-remaining.blue {
            color: blue;
        }

        .base-timer__label {
            position: absolute;
            width: 200px;
            height: 200px;
            top: 100px;
            left: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 70px;
            font-weight: 900;
            color: red;
            border: 1px solid black;
            background-color: black;
            color: white;
            border-radius: 50%;
        }

        .backarrow {
            height: 30px;
            width: 30px;
            border: 2px solid black;
            border-radius: 50%;
            margin: 5px 5px;
        }

        .back {
            margin: 0 10px 550px 0;
        }

        .btn-sm {
            width: 120px;
            font-family: Ubuntu, serif;
            font-size: 15px;
            font-weight: 900;
            margin: 5px 0px;
        }

        #btn {
            width: 250px;
            font-family: Ubuntu, serif;
            font-size: 15px;
            font-weight: 900;
            margin: 0 0 20px 0;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="body-outer">
        <div class="body-inner">
            <div class="title">
                <h2>Let's Test Your Lungs...</h2>
            </div>
            <div class="timer">
                <div class="back">
                    <a href="{{route('userDashBoard')}}"><img src="/images/arrow-back.png" class="backarrow" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover"></a>
                </div>
                <div class="back">
                    <a href="{{route('vaccination_appointments')}}"><img src="/images/arrow-back.png" class="backarrow"></a>
                </div>
                <div class="left">
                    <div class="how-to-test">
                        <ol>
                            <li>hold your breath</li>
                            <li>Touch the test lung button</li>
                            <li>keep your breath until you can</li>
                            <li>count the time & color</li>
                            <li>from the color you can test lungs</li>
                        </ol>
                    </div>
                    <div class="test-results">
                        <div class="result-title">
                            <h3>test results</h3>
                        </div>
                        <div class="result-pane">
                            <div class="result-box">
                                <div class="results rst1">
                                    <button type="button" class="btn btn-danger btn-sm">Red</button>
                                </div>
                                <div class="results rst2">
                                    <button type="button" class="btn btn-warning btn-sm">Yellow</button>
                                </div>
                                <div class="results rst3">
                                    <button type="button" class="btn btn-success btn-sm">Green</button>
                                </div>
                                <div class="results rst4">
                                    <button type="button" class="btn btn-primary btn-sm">Blue</button>
                                </div>
                            </div>
                            <div class="result-name">
                                <div class="results rst1">
                                    <button type="button" class="btn btn-outline-danger btn-sm">Weak Lungs</button>
                                </div>
                                <div class="results rst2">
                                    <button type="button" class="btn btn-outline-warning btn-sm">Normal Lungs</button>
                                </div>
                                <div class="results rst3">
                                    <button type="button" class="btn btn-outline-success btn-sm">Good Lungs</button>
                                </div>
                                <div class="results rst4">
                                    <button type="button" class="btn btn-outline-primary btn-sm">Best Lungs</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="test-round">
                    <button type="button" class="btn btn-outline-dark" value="lung test" id="btn">Click Me To Test
                    </button>
                    <div id="app"></div>
                    <script src="test.js"></script>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="lungtest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script>
    function test() {
        const FULL_DASH_ARRAY = 283;
        const NORMAL_THRESHOLD = 45;
        const GOOD_THRESHOLD = 30;
        const STRONG_THRESHOLD = 15;

        const COLOR_CODES = {
            weak: {
                color: "red"
            }
            , normal: {
                color: "yellow"
                , threshold: NORMAL_THRESHOLD
            }
            , good: {
                color: "green"
                , threshold: GOOD_THRESHOLD
            }
            , strong: {
                color: "blue"
                , threshold: STRONG_THRESHOLD
            }
        };

        const TIME_LIMIT = 60;
        let timePassed = 0;
        let timeLeft = TIME_LIMIT;
        let timerInterval = null;
        let remainingPathColor = COLOR_CODES.weak.color;

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

                if (timeLeft === 0) {
                    onTimesUp();
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
            const {
                weak
                , normal
                , good
                , strong
            } = COLOR_CODES;
            if (timeLeft <= normal.threshold) {
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(weak.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(normal.color);
            }

            if (timeLeft <= good.threshold) {
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(normal.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(good.color);
            }

            if (timeLeft <= strong.threshold) {
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.remove(good.color);
                document
                    .getElementById("base-timer-path-remaining")
                    .classList.add(strong.color);
            }
        }

        function calculateTimeFraction() {
            const rawTimeFraction = timeLeft / TIME_LIMIT;
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
    }


    document.querySelector('#btn').addEventListener('click', test)

</script>
</body>
</html>
