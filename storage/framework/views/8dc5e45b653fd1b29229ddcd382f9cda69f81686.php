<?php echo $__env->make('admin.admin_body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        td,
        th {
            padding: 5px 30px;
            border-bottom: 1px solid black;
        }
        .fa-solid {
            font-size: 30px;
        }

        .fa-address-book {
            color: green;
        }

        .fa-trash-can {
            color: red;
        }
    </style>
<div class="content">
    <div class="main-outer">
        <table class="table">
            <thead class="bg-dark text-light" style="position: sticky; top: 82px">
            <tr>
                <th>Doctor Image</th>
                <th>Name</th>
                <th>phone</th>
                <th>Email</th>
                <th>Speciality</th>
                <th>Doctor Id</th>
            </tr>

            </thead>
            <tbody>

            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><img src="doctorimage/<?php echo e($doctor->image); ?>" alt="doctor_image"
                             style="width: 100px;height: 100px;border-radius: 50%"></td>
                    <td><?php echo e($doctor->name); ?></td>
                    <td><?php echo e($doctor->phone); ?></td>
                    <td><?php echo e($doctor->email); ?></td>
                    <td><?php echo e($doctor->speciality); ?></td>
                    <td><?php echo e($doctor->doctor_id); ?></td>
                    <td><a href="<?php echo e(route('update_doctor',$doctor->id)); ?>"><i class="fa-solid fa-address-book"></i></a>
                    </td>

                    
                    <td><a href="<?php echo e(route('delete_doctor',$doctor->id)); ?>" onclick="return confirm('Are You Sure')"><i
                                class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\laragon\www\CoviGuardFinal\resources\views/admin/show_doctor_view.blade.php ENDPATH**/ ?>