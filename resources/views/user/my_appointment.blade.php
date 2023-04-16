<!doctype html>
<html lang="en">
<head>
    <title>Covi Guard</title>
    @include('user.usernavbar')
    @include('layouts.all-css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        .container {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        table {
            width: 100%;
        }
        th{
            padding: 0 50px 20px 50px;
            text-align: center;
            font-size: 15px;
            text-transform: uppercase;
        }
        td{
            padding: 2px 50px;
        }

    </style>
</head>

<body>
<div class="container">
    <div class="main-outer">
        <div class="table-outer">
            <table class="table table-responsive">
                <thead class="bg-dark text-light">
                <tr>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Cancel</th>
                </tr>
                </thead>
                <tbody>
                @foreach($appoint as $appoints)
                    <tr >
                        <td>{{$appoints->name}}</td>
                        <td>{{$appoints->date}}</td>
                        <td class="message_box">{{$appoints->message}}</td>
                        <td>{{$appoints->status}}</td>
                        <td><a href="{{route('cancel_appoint',$appoints->id)}}" class="btn btn-danger"
                               onclick="return confirm('are you Sure ?')">Cancel</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>
