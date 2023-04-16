<!doctype html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .image-row {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            height: 500px;
            margin: 30px 0;
        }

        .inner {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-box {
            width: 370px;
            height: 210px;
            box-shadow: 0 0 10px black;
            margin: 5px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: Ubuntu, serif;
            font-size: 25px;
            font-weight: 900;
            color: white;
            text-align: center;

        }

        .box1 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/virus-spread-image.jpg');
        }

        .box2 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/wear-mask-image.jpg');
        }

        .box3 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/vaccined-image.jpg');
        }

        .box4 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/sanitization-image.jpg');
        }

        .box5 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/protect-yourself-image.jpg');
        }

        .box6 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/virus01.jpg');
        }

        .box7 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/virus02.jpg');
        }

        .box8 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/virus03.jpg');
        }

        .image-box:hover {
            cursor: pointer;
        }
        .icon-row .fa-solid{
            font-size: 35px;
            color: blue;
            margin: 5px;
        }

    </style>
</head>
<body>
<div class="icon-row text-center mt-5">
    <i class="fa-solid fa-virus-covid"></i>
    <i class="fa-solid fa-lungs-virus"></i>
    <i class="fa-solid fa-head-side-virus"></i>
    <i class="fa-solid fa-head-side-mask"></i>
    <i class="fa-solid fa-shield-virus"></i>
</div>
<div class="image-row">
    <div class="img-all">
        <div class="inner">
            <div class="image-box box1"> Virus Spreading Whole Over The World</div>
            <div class="image-box box2">Wear A Mask Everytime</div>
            <div class="image-box box3">Get Vaccine As Soon As Possible</div>
            <div class="image-box box4">Use A Sanitizer</div>
        </div>
    </div>
    <div class="img-all">
        <div class="inner">
            <div class="image-box box5">Get Medicine. Protect Your-Self</div>
            <div class="image-box box6">Corona Virus</div>
            <div class="image-box box7">Corona Virus</div>
            <div class="image-box box8">Corona Virus <br>+</div>
        </div>
    </div>
</div>


</body>
</html>
