@include('user.usernavbar')
@include('layouts.all-css')
<title>Covi Guard</title>
<style>
    .doctor-app-image {
        width: 700px;
        height: 100%;
        background-image: url('images/Doctor_appointment_page_image.png');
        background-size: cover;
        background-position: center;
    }

    .appointment-title {
        font-weight: 900;
        color: darkblue
    }
</style>
<div class="container">
    <div class="row text-center"><h1 class="appointment-title">Make An Appointment</h1></div>
    <div class="main-outer row">
        <div class="col-12 col-lg-6 col-md-12 col-sm-12">

            @if(session()->has('message'))
                <div class="alert alert-success text-center">
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="form-outer">
                <form action="{{url('appointment')}}" method="post">

                    @csrf

                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Doctor Name</label>
                            <label>
                                <select class="form-control">
                                    @foreach($doctors as $doctor)
                                        <option value="{{$doctor->name}}">{{$doctor->name}}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="1"></textarea>
                    </div>
                    <div class="d-grid mt-2">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-md-12 col-sm-12">
            <div class="doctor-app-image"></div>
        </div>

    </div>
</div>
