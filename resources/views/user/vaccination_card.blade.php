<!doctype html>
<html lang="en">
<head>
    <title>Covi Guard</title>
    @include('layouts.all-css')
    <link rel="icon" href="images/logo.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        .container {
            display: grid;
            grid-template-columns: auto auto auto;
            font-family: Ubuntu, serif;
        }
        .card {
            width: 450px;
            margin: 10px;
        }

        .card h5 {
            font-size: 35px;
            font-weight: 900;
            color: blue;
        }
        .vac-card-item{
            margin: 0 0 10px 0;
        }
        .vac-card-item h6{
            font-size: 22px;
            font-weight: 900;
        }
        .vac-date-center h6{
            font-size: 22px;
            font-weight: 900;
        }
        .marker{
            width: 200px;
            height: 30px;
            background-color: green;
            color: white;
            font-weight: 900;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
</head>
<body>
@include('user.usernavbar')

<div class="container">
    @foreach($vaccine_details as $details)
        <div class="card">
            <div class="card-header">
                <h5>{{ $details->vaccination_id }}</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="vac-card-item">
                            <h6>Name <i class="fa-solid fa-caret-down"></i></h6>
                            <p>{{ $details->name }}</p>
                        </div>
                        <div class="vac-card-item">
                            <h6>Identity <i class="fa-solid fa-caret-down"></i></h6>
                            <p>{{ $details->identity }}</p>
                        </div>
                        <div class="vac-card-item">
                            <h6>Vaccine Type <i class="fa-solid fa-caret-down"></i></h6>
                            <p>{{ $details->vaccine_type }}</p>
                        </div>
                        <div class="vac-card-item">
                            <h6>Appointment Date <i class="fa-solid fa-caret-down"></i></h6>
                            <p>{{$details->date}}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="visible-print text-center">
                            {!! QrCode::size(150)->generate($details->cust_id); !!}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                <div></div>
                    <div class="col">
                        <div class="mb-3 row">
                            <div class="vac-date-center"><h6>Your Vaccination Date <i class="fa-solid fa-caret-down"></i></h6></div>
                            <div class="col-sm-10">
                                <div class="marker">{{$details->vaccination_date}}</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class= " vac-date-center"><h6>Your Vaccination Center <i class="fa-solid fa-caret-down"></i></h6></div>
                            <div class="col-sm-10">
                                <div class="marker">{{$details->center}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>
