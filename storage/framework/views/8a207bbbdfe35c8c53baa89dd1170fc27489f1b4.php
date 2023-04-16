<!doctype html>
<html lang="en">
<head>
    <title>Covi Guard</title>
    <link rel="icon" href="/images/logo.png">
    <?php echo $__env->make('layouts.all-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        body {
            font-family: Ubuntu, serif;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #ccddff;
        }

        .nav-link {
            color: darkblue;
            font-weight: 900;
            text-decoration: none;
            list-style: none;
        }

        .nav-link:hover {
            border-bottom: 3px solid darkblue;
            transition-duration: 2s;
        }

        .btn a {
            color: white;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: 900;
        }

        .appoints {
            list-style: none;
        }

        /*.vac-card{*/
        /*    width: 130px;*/
        /*    height: 40px;*/
        /*    background-color: black;*/
        /*    color: white;*/
        /*    display: flex;*/
        /*    align-items: center;*/
        /*    justify-content: center;*/
        /*    border-radius: 5px;*/
        /*}*/
        /*.vac-card:hover{*/
        /*    color: white;*/

        /*}*/

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navibar">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('main_page')); ?>"><img src="images/logo.png" class="logo-image" alt="logo"
                                                                   width="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('symptoms')); ?>">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('lung_test')); ?>">Test Your Self</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('vaccination_appointments')); ?>">Vaccination Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('appointmentpage')); ?>">Doctor Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('news_page')); ?>">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link vac-card" href="<?php echo e(route('vaccination_card')); ?>" >Vaccination Card</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link vac-card" href="<?php echo e(route('userDashBoard')); ?>">Dash Board</a>
                </li>
            </ul>
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item appoints">
                        <a class="nav-link" href="<?php echo e(route('my_appointment')); ?>">My Appointments</a>
                    </li>
                    <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</nav>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/user/usernavbar.blade.php ENDPATH**/ ?>