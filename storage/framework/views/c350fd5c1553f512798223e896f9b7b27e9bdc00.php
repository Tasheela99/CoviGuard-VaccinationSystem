<?php echo $__env->make('layouts.all-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

    .navbar {
        position: fixed;
        top: 0;
        z-index: 1000;
        font-family: Ubuntu, serif;
        width: 100%;
    }

    .nav-item {
        padding: 0 15px;
    }

    .nav-item a {
        font-size: 20px;
        color: blue;
        font-weight: 900;
    }

    .nav-link:hover {
        border-bottom: 3px solid darkblue;
        transition-duration: 0.5s;
    }

    .btn {
        width: 100px;
    }

    .naviBtn {
        color: white;
        text-transform: uppercase;
        text-decoration: none;
        font-weight: 900;
    }

    .fa-truck-medical {
        font-size: 30px;
        color: red;
    }

    .fa-users-gear {
        font-size: 30px;
        color: green;
    }

    .appt {
        text-decoration: none;
        list-style: none;
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
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
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link abc" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">Faq</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#resources">Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#doctors">Doctors</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="https://www.1990.lk/news/1990-suwa-seriya/" target="_blank"><i
                            class="fa-solid fa-truck-medical"></i></a>
                </li>
            </ul>
            <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>

                    
                    <?php if(auth()->user()->user_type == 0): ?>
                        <div class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('userDashBoard')); ?>"><i class="fa-solid fa-users-gear"></i></a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link appt" href="<?php echo e(route('my_appointment')); ?>">My Appointments</a>
                        </div>
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
                    <?php else: ?>
                    
                        <div class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('admin_dashboard')); ?>"><i class="fa-solid fa-users-gear"></i></a>
                        </div>
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
                <?php else: ?>
                    <div class="nav-buttons">
                        <a href="<?php echo e(route('register')); ?>"><button class=" btn btn-primary naviBtn">register</button></a>
                        <a href="<?php echo e(route('login')); ?>"><button class=" btn btn-info naviBtn">login</button></a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</nav>
<?php /**PATH /mnt/sda2/Projects/Laravel/CoviGuardFinal/resources/views/welcomepageitems/navbar.blade.php ENDPATH**/ ?>