<?php echo $__env->make('admin.admin_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        th {
            padding: 10px;
            border: 1px solid black;
            text-align: center;
        }

        td {
            text-align: center;
            padding: 10px;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Ubuntu, serif;
        }

        .content .btn-success {
            background-color: green;
            color: white;
        }

        .content .thead-dark {
            background-color: black;
            color: white;
        }

        .content .btn-danger {
            background-color: red;
            color: white;
        }
        </style>
<div class="content">

    <div class="main-outer">
        <table>
            <thead class="thead-dark"  style="position: sticky; top: 80px; border: none">

            <tr>
                <th>Name</th>
                <th width="130px">Vaccination ID</th>
                <th>Recognition ID</th>
                <th>Date</th>
                <th>Vaccination Date</th>
                <th>Center</th>
                <th>Approve</th>
                <th>Delete</th>
            </tr>

            </thead>
            <tbody>

            <?php $__currentLoopData = $vaccination_appointment_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($appointment_data->name); ?></td>
                    <td width="70px"><?php echo e($appointment_data->vaccination_id); ?></td>
                    <td width="350px"><?php echo e($appointment_data->cust_id); ?></td>
                    <td width="150px"><?php echo e($appointment_data->date); ?></td>
                    <form action="<?php echo e(route('appointment_update',$appointment_data->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <td><input type="date" class="form-control" name="vaccination_date"></td>
                        <td><input type="text" class="form-control" name="center"></td>
                        <td>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </td>
                        <td>
                            <a href="<?php echo e(route('cancel_vaccination_appointment',$appointment_data->id)); ?>">
                                <button type="button" class="btn btn-danger" onclick="return confirm('are you Sure ?')">
                                    Delete
                                </button>
                            </a>
                        </td>
                    </form>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/admin/vaccination_appointments.blade.php ENDPATH**/ ?>