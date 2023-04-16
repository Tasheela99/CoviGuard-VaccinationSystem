@include('admin.admin_body')
<style>
    .fa-solid{
        font-size: 30px;
    }
    .fa-thumbs-up{
        color: blue;
    }
    .fa-thumbs-down{
        color: red;
    }
</style>

<div class="content">
    <div class="main-outer">
                <table class="table">
                    <thead class="thead thead-dark" style="position: sticky; top: 80px; border: none">
                    <tr style="background-color: black; color: white">

                        {{-- Table Header --}}
                        <th>Custemer Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>doctor</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Approve</th>
                        <th>Cancel</th>
                    </tr>

                    </thead>
                    <tbody>

                        {{-- Table Data --}}

                    @foreach($data as $appoint)
                    <tr>
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor_name}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td class="text-center"><a href="{{route('approved',$appoint->id)}}" ><i class="fa-solid fa-thumbs-up "></i></a></td>
                        <td class="text-center"><a href="{{route('canceled',$appoint->id)}}" ><i class="fa-solid fa-thumbs-down "></i></a></td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
</div>

</body>
</html>

