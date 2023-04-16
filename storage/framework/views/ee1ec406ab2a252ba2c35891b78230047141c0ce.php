<?php echo $__env->make('admin.admin_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .fa-solid{
        font-size: 30px;
    }
    .fa-thumbs-up{
        color: blue;
    }
    .fa-thumbs-down{
        color: red;
    }
</style>

<div class="content">
    <div class="main-outer">
                <table class="table">
                    <thead class="thead thead-dark" style="position: sticky; top: 80px; border: none">
                    <tr style="background-color: black; color: white">

                        
                        <th>Custemer Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>doctor</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Approve</th>
                        <th>Cancel</th>
                    </tr>

                    </thead>
                    <tbody>

                        

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($appoint->name); ?></td>
                        <td><?php echo e($appoint->email); ?></td>
                        <td><?php echo e($appoint->phone); ?></td>
                        <td><?php echo e($appoint->doctor_name); ?></td>
                        <td><?php echo e($appoint->date); ?></td>
                        <td><?php echo e($appoint->message); ?></td>
                        <td><?php echo e($appoint->status); ?></td>
                        <td class="text-center"><a href="<?php echo e(route('approved',$appoint->id)); ?>" ><i class="fa-solid fa-thumbs-up "></i></a></td>
                        <td class="text-center"><a href="<?php echo e(route('canceled',$appoint->id)); ?>" ><i class="fa-solid fa-thumbs-down "></i></a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
</div>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/admin/show_appointment.blade.php ENDPATH**/ ?>