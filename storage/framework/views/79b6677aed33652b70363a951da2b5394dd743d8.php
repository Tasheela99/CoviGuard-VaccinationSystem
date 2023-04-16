<?php echo $__env->make('user.usernavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.all-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<title>Covi Guard</title>
<style>
    .doctor-app-image{
        width: 700px;
        height: 100%;
        background-image: url('images/Doctor_appointment_page_image.png');
        background-size: cover;
        background-position: center;
    }
    .appointment-title{
            font-weight: 900;
            color: darkblue
        }
</style>
<div class="container">
    <div class="row text-center"><h1 class="appointment-title">Make An Appointment</h1></div>
        <div class="main-outer row">
            <div class="col">

                <?php if(session()->has('message')): ?>
                <div class="alert alert-success text-center">
                        <?php echo e(session()->get('message')); ?>

                </div>
                <?php endif; ?>
                <div class="form-outer">
                        <form action="<?php echo e(url('appointment')); ?>" method="post">

                                <?php echo csrf_field(); ?>

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
                                <div class="mb-2">
                                        <label for="exampleFormControlInput1" class="form-label">Doctor Name</label>

                                        <select class="form-control">
                                            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($doctor->doctor_name); ?>"><?php echo e($doctor->doctor_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

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
            <div class="col">
                <div class="doctor-app-image"></div>
            </div>

        </div>
</div>
<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/user/appointment.blade.php ENDPATH**/ ?>