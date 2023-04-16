<!doctype html>
<html lang="en">

<head>
    <title>Covi Guard</title>
    <style>
        .col {
            height: 250px;
            border: 2px solid black;
            margin: 10px;

        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .col h1 {
            font-size: 30px;
            font-weight: 900;
            text-transform: capitalize;
        }

        .fa-solid {
            font-size: 100px;
            margin: 5px;
        }

        .fa-puzzle-piece {
            color: blue;
        }

        .fa-microscope {
            color: yellow;
        }

        .fa-vial-virus {
            color: red;
        }

        .fa-stethoscope {
            color: orange;
        }

        .fa-globe {
            color: green;
        }

        .fa-comment-medical {
            color: purple;
        }

        .fa-truck-medical {
            font-size: 80px;
            color: red;
            font-weight: 900;
        }

        .fa-phone-flip {
            font-size: 30px;
            color: #2563eb;
        }

        .emergency_row {
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .emergency_text h1 {
            letter-spacing: 10px;

        }

        .emergency_text_number {
            font-size: 50px;
            font-weight: 900;
            color: blue;
            letter-spacing: 2px;
        }

        @media screen and (max-width: 600px) {
            .emergency_row .emergency_text h1 {
                font-size: 15px;
            }

            .emergency_row .fa-truck-medical {
                display: none;
            }

            .emergency_row .emergency_text_number {
                font-size: 15px;
            }
            .user-dashboard-sidebar .fa-solid{
                display: none;
            }


        }

        .user-dashboard-inner {
            height: 89vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-dashboard-sidebar {
            width: 300px;
            height: 100%;
            background-color: #ccddff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: sticky;
            top: 0;
        }

        .user-dashboard-body {
            width: 100%;
            height: 100%;
        }

        .user-dashboard-sidebar .fa-solid {
            font-size: 50px;
            color: white;
            margin: 30px 30px 0 30px;
        }

        .user-dashboard-sidebar a {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .user-dashboard-sidebar a p{
            font-weight: 900;
            font-size: 10px
        }
    </style>
</head>

<body>

    <div class="user-body-outer">
        <div class="user-dashboard-inner">
            <div class="user-dashboard-sidebar">
                <a href="<?php echo e(route('symptoms')); ?>">
                    <i class="fa-solid fa-puzzle-piece"></i>
                    <p>Symptoms</p>
                </a>
                <a href="<?php echo e(route('lung_test')); ?>">
                    <i class="fa-solid fa-microscope"></i>
                    <p>Testing Service</p>
                </a>
                <a href="<?php echo e(route('vaccination_appointments')); ?>">
                    <i class="fa-solid fa-vial-virus"></i>
                    <p>Vaccination Appointments</p>
                </a>
                <a href="<?php echo e(route('appointmentpage')); ?>">
                    <i class="fa-solid fa-stethoscope"></i>
                    <p>Doctor Appointments</p>
                </a>

                <a href="<?php echo e(route('news_page')); ?>">
                    <i class="fa-solid fa-globe"></i>
                    <p>news</p>
                </a>
                <a href="<?php echo e(route('chatify')); ?>">
                    <i class="fa-solid fa-comment-medical"></i>
                    <p>Chat With Us</p>
                </a>


            </div>
            <div class="user-dashboard-body">
                <div class="main-box">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col box">
                                <h1>Symptoms</h1>
                                <a href="<?php echo e(route('symptoms')); ?>"><i class="fa-solid fa-puzzle-piece"></i></a>
                            </div>
                            <div class="col box">
                                <h1>Testing Services</h1>
                                <a href="<?php echo e(route('lung_test')); ?>"><i class="fa-solid fa-microscope"></i></a>

                            </div>
                            <div class="col box">
                                <h1>Vaccination Appointment</h1>
                                <a href="<?php echo e(route('vaccination_appointments')); ?>"><i
                                        class="fa-solid fa-vial-virus"></i></a>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col box">
                                <h1>Contact Doctor</h1>
                                <a href="<?php echo e(route('appointmentpage')); ?>"><i class="fa-solid fa-stethoscope"></i></a>
                            </div>
                            <div class="col box">
                                <h1>News</h1>
                                <a href="<?php echo e(route('news_page')); ?>"><i class="fa-solid fa-globe"></i></a>
                            </div>
                            <div class="col box">
                                <h1>Chat With Us</h1>
                                <a href="<?php echo e(route('chatify')); ?>"><i class="fa-solid fa-comment-medical"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col emergency_row">
                                <a href=""><i class="fa-solid fa-truck-medical"></i></a><span
                                    class="emergency_text">
                                    <h1>For Emergencies Call <a href="tel:1990"><span
                                                class="emergency_text_number">1990</span><i
                                                class="fa-solid fa-phone-flip"></i></a></h1>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/user/userbody.blade.php ENDPATH**/ ?>