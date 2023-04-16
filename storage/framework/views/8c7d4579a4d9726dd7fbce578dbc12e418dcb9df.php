

<?php echo $__env->make('layouts.welcome-page-styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="doctors">
    <div class="doctor-page-outer">
        <div class="page-title text-center">
            <h1>Doctors</h1>
        </div>
        <div class="main-content">
            <div class="doc-area">
                <section class="doc">
                    <button class="pre-btn"><i class="fa-solid fa-caret-left"></i></button>
                    <button class="nxt-btn"><i class="fa-solid fa-caret-right"></i></button>
                    <div class="doc-container">
                        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="doc-card">
                                <div class="doc-image">
                                    <img src="doctorimage/<?php echo e($doctor->image); ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="doc-info">
                                    <h2 class="doc-name"><?php echo e($doctor->name); ?></h2>
                                    <p class="doc-short-description"><?php echo e($doctor->email); ?></p>
                                    <p class="doc-short-description"><?php echo e($doctor->phone); ?></p>
                                    <p class="doc-short-description"><?php echo e($doctor->speciality); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </section>
            </div>

        </div>
    </div>
</section>
<script>
    const productContainers = [...document.querySelectorAll('.doc-container')];
    const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
    const preBtn = [...document.querySelectorAll('.pre-btn')];

    productContainers.forEach((item, i) => {
        let containerDimensions = item.getBoundingClientRect();
        let containerWidth = containerDimensions.width;

        nxtBtn[i].addEventListener('click', () => {
            item.scrollLeft += containerWidth;
        })

        preBtn[i].addEventListener('click', () => {
            item.scrollLeft -= containerWidth;
        })
    })
</script>
<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/welcomepageitems/doctorpage.blade.php ENDPATH**/ ?>