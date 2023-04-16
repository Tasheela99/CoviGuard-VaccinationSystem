<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

        @-webkit-keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        .slider {
            background: transparent;
            height: 400px;
            margin: 0;
            overflow: hidden;
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .slider .slide-track {
            -webkit-animation: scroll 120s linear infinite;
            animation: scroll 120s linear infinite;
            display: flex;
            width: calc(250px * 10);
        }

        .slider-outer{
            padding: 0 20px;
            border: 1px solid black;
            border-radius: 5px;
        }

        .news-box {
            width: 400px;
            height: 300px;
            margin: 10px;
            border-radius: 5px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .news-box1{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/13.jpg');}
        .news-box2{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/15.jpg');}
        .news-box3{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/16.jpg');}
        .news-box4{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/17.jpg');}
        .news-box5{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/18.jpg');}
        .news-box6{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/19.jpg');}
        .news-box7{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/20.jpg');}
        .news-box8{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/21.jpg');}
        .news-box9{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/22.jpg');}
        .news-box10{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/23.jpg');}
        .news-box11{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/24.jpg');}
        .news-box12{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/25.jpg');}
        .news-box13{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/26.jpg');}
        .news-box14{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/27.jpg');}
        .news-box15{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/28.jpg');}
        .news-box16{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/29.jpg');}
        .news-box17{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/30.jpg');}
        .news-box18{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/31.jpg');}
        .news-box19{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/32.jpg');}
        .news-box20{background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/news_page_images/33.jpg');}

    </style>
</head>
<body>
<div class="slider-outer">
    <div class="slider">
        <div class="slide-track">
            <div class="slide"><div class="news-box news-box1"></div></div>
            <div class="slide"><div class="news-box news-box2"></div></div>
            <div class="slide"><div class="news-box news-box3"></div></div>
            <div class="slide"><div class="news-box news-box4"></div></div>
            <div class="slide"><div class="news-box news-box5"></div></div>
            <div class="slide"><div class="news-box news-box6"></div></div>
            <div class="slide"><div class="news-box news-box7"></div></div>
            <div class="slide"><div class="news-box news-box8"></div></div>
            <div class="slide"><div class="news-box news-box9"></div></div>
            <div class="slide"><div class="news-box news-box10"></div></div>
            <div class="slide"><div class="news-box news-box11"></div></div>
            <div class="slide"><div class="news-box news-box12"></div></div>
            <div class="slide"><div class="news-box news-box13"></div></div>
            <div class="slide"><div class="news-box news-box14"></div></div>
            <div class="slide"><div class="news-box news-box15"></div></div>
            <div class="slide"><div class="news-box news-box16"></div></div>
            <div class="slide"><div class="news-box news-box17"></div></div>
            <div class="slide"><div class="news-box news-box18"></div></div>
            <div class="slide"><div class="news-box news-box19"></div></div>
            <div class="slide"><div class="news-box news-box20"></div></div>
        </div>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\laragon\www\CoviGuardFinal\resources\views/user/News/news-page-carousal.blade.php ENDPATH**/ ?>