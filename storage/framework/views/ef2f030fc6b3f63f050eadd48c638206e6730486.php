<!doctype html>
<html lang="en">
<head>
    <title>Covi Guard</title>
    <?php echo $__env->make('layouts.all-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php echo $__env->make('user.usernavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <?php $__currentLoopData = $vaccine_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <div class="card-header">
                <h5><?php echo e($details->vaccination_id); ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="vac-card-item">
                            <h6>Name <i class="fa-solid fa-caret-down"></i></h6>
                            <p><?php echo e($details->name); ?></p>
                        </div>
                        <div class="vac-card-item">
                            <h6>Identity <i class="fa-solid fa-caret-down"></i></h6>
                            <p><?php echo e($details->identity); ?></p>
                        </div>
                        <div class="vac-card-item">
                            <h6>Vaccine Type <i class="fa-solid fa-caret-down"></i></h6>
                            <p><?php echo e($details->vaccine_type); ?></p>
                        </div>
                        <div class="vac-card-item">
                            <h6>Appointment Date <i class="fa-solid fa-caret-down"></i></h6>
                            <p><?php echo e($details->date); ?></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="visible-print text-center">
                            <?php echo QrCode::size(150)->generate($details->cust_id); ?>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <div class="vac-date-center"><h6>Your Vaccination Date <i class="fa-solid fa-caret-down"></i></h6></div>
                            <div class="col-sm-10">
                                <div class="marker"><?php echo e($details->vaccination_date); ?></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class= " vac-date-center"><h6>Your Vaccination Center <i class="fa-solid fa-caret-down"></i></h6></div>
                            <div class="col-sm-10">
                                <div class="marker"><?php echo e($details->center); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</body>
</html>
<?php /**PATH /mnt/sda2/Projects/Laravel/CoviGuardFinal/resources/views/user/vaccination_card.blade.php ENDPATH**/ ?>