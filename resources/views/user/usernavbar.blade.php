<!doctype html>
<html lang="en">
<head>
    <title>Covi Guard</title>
    <link rel="icon" href="/images/logo.png">
    @include('layouts.all-css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        body {
            font-family: Ubuntu, serif;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #ccddff;
        }

        .nav-link {
            color: darkblue;
            font-weight: 900;
            text-decoration: none;
            list-style: none;
        }

        .nav-link:hover {
            border-bottom: 3px solid darkblue;
            transition-duration: 2s;
        }

        .btn a {
            color: white;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: 900;
        }

        .appoints {
            list-style: none;
        }

        /*.vac-card{*/
        /*    width: 130px;*/
        /*    height: 40px;*/
        /*    background-color: black;*/
        /*    color: white;*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    border-radius: 5px;*/
        /*}*/
        /*.vac-card:hover{*/
        /*    color: white;*/

        /*}*/

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navibar bg-light text-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('main_page')}}"><img src="images/logo.png" class="logo-image" alt="logo"
                                                                   width="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('symptoms')}}">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('lung_test')}}">Test Your Self</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('vaccination_appointments')}}">Vaccination Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('appointmentpage')}}">Doctor Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('news_page')}}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link vac-card" href="{{route('vaccination_card')}}" >Vaccination Card</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link vac-card" href="{{route('userDashBoard')}}">Dash Board</a>
                </li>
            </ul>
            @if(Route::has('login'))
                @auth
                    <li class="nav-item appoints">
                        <a class="nav-link" href="{{ route('my_appointment') }}">My Appointments</a>
                    </li>
                    <x-app-layout></x-app-layout>
                @endauth
            @endif
        </div>
    </div>
</nav>
</body>
</html>
