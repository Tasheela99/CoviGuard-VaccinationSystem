<?php echo $__env->make('admin.admin_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .count {
            padding-top: 10px;
        }

        .count .fa-solid {
            font-size: 25px;
        }

        .card-subtitle {
            color: black;
            width: 100%;
        }

        .count .fa-user {
            background-color: blue;
        }

        .count .fa-user-doctor {
            background-color: green;
        }

        .count .fa-hand-holding-medical {
            background-color: yellow;
        }

        .count .fa-virus {
            background-color: red;
        }

        .card-user {
            border: 2px solid blue
        }

        .card-doctor {
            border: 2px solid green;
        }

        .card-doc-app {
            border: 2px solid yellow;
        }

        .card-vac-app {
            border: 2px solid red;
        }

        .count h1 {
            font-size: 25px;
            color: black;
            font-weight: 900;
        }

        .count .fa-solid {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 900;
            border-radius: 5px;
        }

        .content-home {
            z-index: -20;
        }

        .card-body-name {
            display: flex;
            align-items: center;
        }

        .card-title {
            padding-right: 10px;
        }

        .table-side {
            height: 400px;
        }

        .fa-bars {
            font-size: 25px;
        }
    </style>
</head>
<body>


<div class="content content-home">
    <div class="row count">

        
        <div class="col">
            <div class="card card-user">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title"><i class="fa-solid fa-user"></i></h5>
                        <h6 class="card-subtitle mb-2 ">Total Users</h6>
                    </div>
                    <h1><?php echo e($all_users); ?></h1>
                </div>

            </div>
        </div>

        
        <div class="col">
            <div class="card card-doctor">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title"><i class="fa-solid fa-user-doctor"></i></h5>
                        <h6 class="card-subtitle mb-2 ">Total Doctors</h6>
                    </div>
                    <h1><?php echo e($all_doctors); ?></h1>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card card-doc-app">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title">
                            <i class="fa-solid fa-hand-holding-medical"></i>
                        </h5>
                        <h6 class="card-subtitle mb-2 ">Doctor Appointments</h6>
                    </div>
                    <h1><?php echo e($all_doctor_appointments); ?></h1>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card card-vac-app">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title">
                            <i class="fa-solid fa-virus"></i>
                        </h5>
                        <h6 class="card-subtitle mb-2 ">Vaccination Appointments</h6>
                    </div>
                    <h1><?php echo e($all_vaccination_appointments); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-4">
            <form class="form-inline">
                <input class="form-control mr-sm-2 rounded" type="search" placeholder="Search" aria-label="Search">
            </form>

        </div>
        <div class="col-8 d-flex justify-content-end align-items-center">
            <span><i class="fa-solid fa-bars mr-2"></i></span>
        </div>


    </div>
    <div class="row mx-1">
        <div class="col-9 table-side p-2" style="overflow-y: scroll">
            <table class="table " style="">
                <thead style="position: sticky; top: 0">
                <tr class="bg-dark text-light">
                    <th scope="col">Name</th>
                    <th scope="col">Identity</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody style="font-size: 10px">
                <?php $__currentLoopData = $users_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($users->name); ?></td>
                        <td><?php echo e($users->nic); ?></td>
                        <td><?php echo e($users->email); ?></td>
                        <td><?php echo e($users->phone); ?></td>
                        <td><?php echo e($users->address); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="col-3 border border-primary">2</div>

    </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/admin/home.blade.php ENDPATH**/ ?>