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
            <div class="card border-3 card-user border border-primary">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title"><i class="fa-solid fa-user text-light bg-primary"></i></h5>
                        <h6 class="card-subtitle mb-2 ">Total Users</h6>
                    </div>
                    <h1><?php echo e($all_users); ?></h1>
                </div>

            </div>
        </div>

        
        <div class="col">
            <div class="card border-3 card-doctor border border-success">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title"><i class="fa-solid fa-user-doctor text-light bg-success"></i></h5>
                        <h6 class="card-subtitle mb-2 ">Total Doctors</h6>
                    </div>
                    <h1><?php echo e($all_doctors); ?></h1>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card border-3 card-doc-app border border-warning">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title">
                            <i class="fa-solid fa-hand-holding-medical text-light bg-warning"></i>
                        </h5>
                        <h6 class="card-subtitle mb-2 ">Doctor Appointments</h6>
                    </div>
                    <h1><?php echo e($all_doctor_appointments); ?></h1>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card border-3 card-vac-app border border-danger">
                <div class="card-body">
                    <div class="card-body-name">
                        <h5 class="card-title">
                            <i class="fa-solid fa-virus text-light bg-danger"></i>
                        </h5>
                        <h6 class="card-subtitle mb-2 ">Vaccination Appointments</h6>
                    </div>
                    <h1><?php echo e($all_vaccination_appointments); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-6">
            <form class="form-inline d-flex" type="get" action="<?php echo e(route('searchUsersByName')); ?>">
                <input class="form-control mr-sm-2 mr-2 rounded" type="search" placeholder="Search User" aria-label="Search" name="query">
                <button class="btn btn-success bg-success" type="submit">Search</button>
            </form>

        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <span><i class="fa-solid fa-bars mr-2"></i></span>
        </div>


    </div>
    <div class="row mx-1">
        <div class="col-12 table-side p-2" style="overflow-y: scroll">
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
    </div>
</div>

</body>
</html>
<?php /**PATH C:\laragon\www\CoviGuardFinal\resources\views/admin/home.blade.php ENDPATH**/ ?>