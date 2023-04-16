@include('admin.admin_body')
    <style>
        td,
        th {
            padding: 5px 30px;
            border-bottom: 1px solid black;
        }
        .fa-solid {
            font-size: 30px;
        }

        .fa-address-book {
            color: green;
        }

        .fa-trash-can {
            color: red;
        }
    </style>
<div class="content">
    <div class="main-outer">
        <table class="table">
            <thead class="bg-dark text-light" style="position: sticky; top: 82px">
            <tr>
                <th>Doctor Image</th>
                <th>Name</th>
                <th>phone</th>
                <th>Email</th>
                <th>Speciality</th>
                <th>Doctor Id</th>
            </tr>

            </thead>
            <tbody>

            @foreach($data as $doctor)
                <tr>
                    <td><img src="doctorimage/{{$doctor->image}}" alt="doctor_image"
                             style="width: 100px;height: 100px;border-radius: 50%"></td>
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->speciality}}</td>
                    <td>{{$doctor->doctor_id}}</td>
                    <td><a href="{{route('update_doctor',$doctor->id)}}"><i class="fa-solid fa-address-book"></i></a>
                    </td>

                    {{-- Delete Doctor and Delete Confirmation with JS Alert --}}
                    <td><a href="{{route('delete_doctor',$doctor->id)}}" onclick="return confirm('Are You Sure')"><i
                                class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
