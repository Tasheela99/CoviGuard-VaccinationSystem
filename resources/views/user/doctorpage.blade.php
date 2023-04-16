<div class="container">
        <div class="home-outer">
                @foreach($doctors as $doctor)
                <div class="image">
                        <img src="doctorimage/{{$doctor->image}}" alt="">
                </div>
                <div class="name">{{$doctor->name}}</div>
                <div class="id">{{$doctor->speciality}}</div>
                <div class="hospital"></div>
                @endforeach
        </div>
</div>
