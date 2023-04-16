<!doctype html>
<html lang="en">
<head>
    <title>Covi Guard</title>
    <?php echo $__env->make('user.usernavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.all-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        .main-outer {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Ubuntu, serif;
        }

        .form-inner {
            width: 100%;
            height: 100%;
        }

        .vaccinationid-inner {
            width: 100%;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-image: url('images/vaccination_appointmentpage_image.png');
            background-position: center;
            background-size: cover;
            margin-left: 40px;
        }

        .vac-id {
            font-size: 70px;
            font-weight: 900;
            color: darkblue;
        }

        .appointment-title {
            font-weight: 900;
            color: darkblue;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row"><h1 class="text-center appointment-title">Make An Appointment For Vaccination</h1></div>
    <div class="main-outer">
        <div class="col-12 col-lg-6 col-md-12 col-sm-12">
            <div class="form-inner">

                <?php if(session()->has('message')): ?>
                    <div class="alert alert-success text-center">
                        <?php echo e(session()->get('message')); ?>

                    </div>
                <?php endif; ?>

                <div class="form-outer">
                    <form action="<?php echo e(route('vaccination_appointments_save')); ?>" method="post">

                        <?php echo csrf_field(); ?>

                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   placeholder="Enter your full name"
                                   required>
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                   required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                <input type="text" class="form-control" aria-label="address" placeholder="Address"
                                       name="address">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Division</label>
                                <select class="form-select" aria-label="Default select example" name="division"
                                        required>
                                    <option value="------Select Your Division------" selected disabled>choose</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Kaluthara">Kaluthara</option>
                                    <option value="Mahanuwara">Mahanuwara</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Yapanaya">Yapanaya</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Mannarama">Mannarama</option>
                                    <option value="Vavniyawa">Vavniyawa</option>
                                    <option value="Mulathuv">Mulathuv</option>
                                    <option value="Madakalapuwa">Madakalapuwa</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Thrikunamalaya">Thrikunamalaya</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Puttalama">Puttalama</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Rathnapura">Rathnapura</option>
                                    <option value="Kegalle">Kegalle</option>

                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile"
                                       required>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Identity</label>
                                <input type="text" class="form-control" id="identity" name="identity"
                                       placeholder="NIC/Passport" required>
                            </div>
                        </div>
                        <br>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Self Test Results</label>
                            <a href="<?php echo e(route('lung_test')); ?>">Click here to test your-self</a>
                            <select class="form-select" aria-label="Default select example" name="test_result" required>
                                <option value="------Select Your Self-Test Results------" selected disabled>choose
                                </option>
                                <option value="Red" style="color: red;">Red</option>
                                <option value="Yellow" style="color: yellow">Yellow</option>
                                <option value="Green" style="color: green">Green</option>
                                <option value="Blue" style="color: blue">Blue</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Date(current date)</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Vaccine type</label>
                                <select class="form-select" aria-label="Default select example" name="vaccine_type"
                                        required>
                                    <option value="------Select Your Self-Test Results------" selected disabled>choose
                                    </option>
                                    <option value="Synaphame">Synaphame</option>
                                    <option value="Moderna">Moderna</option>
                                    <option value="Sputnic">Sputnic</option>
                                    <option value="Pfizer">Pfizer</option>
                                    <option value="Covax-19">Covax-19</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="d-grid mt-2">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-md-12 col-sm-12">
            <div class="vaccinationid-inner">
                <?php if(session()->has('vaccination_id')): ?>
                    <div class="vac-id">
                        <?php echo e(session()->get('vaccination_id')); ?>

                    </div>
                    <div class="vac-id-text">
                        <p>Please remember or write down this code for your vaccination purposes.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

</body>
</html>


<?php /**PATH C:\laragon\www\CoviGuardFinal\resources\views/user/vaccination_appointments.blade.php ENDPATH**/ ?>