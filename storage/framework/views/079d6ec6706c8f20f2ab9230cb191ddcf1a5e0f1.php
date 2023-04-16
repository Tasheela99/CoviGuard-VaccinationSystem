<!doctype html>
<html lang="en">
<head>
    <title>Covi Guard</title>
    <?php echo $__env->make('user.usernavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.all-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                <?php $__currentLoopData = $appoint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoints): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr >
                        <td><?php echo e($appoints->name); ?></td>
                        <td><?php echo e($appoints->date); ?></td>
                        <td class="message_box"><?php echo e($appoints->message); ?></td>
                        <td><?php echo e($appoints->status); ?></td>
                        <td><a href="<?php echo e(route('cancel_appoint',$appoints->id)); ?>" class="btn btn-danger"
                               onclick="return confirm('are you Sure ?')">Cancel</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>
<?php /**PATH C:\laragon\www\CoviGuardFinal\resources\views/user/my_appointment.blade.php ENDPATH**/ ?>