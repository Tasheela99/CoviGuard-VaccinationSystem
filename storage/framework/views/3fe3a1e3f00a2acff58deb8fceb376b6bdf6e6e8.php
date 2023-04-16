<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <style>
        .navbar a{
            color: white;
        }
        .navbar a:hover{
            color: white;
            font-weight: 900;
        }
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 250px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: blue;
            color: white;
        }
        .navbar{
            position: sticky;
            top: 0;
            z-index: 5000;
        }

        div.content {
            margin-left: 270px;
            padding: 1px 16px;
            height: 100%;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
        .nav-item{
            list-style: none;
        }
        .fa-caret-right{
            width: 20px;
        }
    </style>
</head>
<body>

    
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('main_page')); ?>"><img src="images/logo.png" class="logo-image" alt="logo"
                                                                   width="50px"></a>
        <a class="navbar-brand" href="<?php echo e(route('admin_dashboard')); ?>">Admin DashBoard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <li class="nav-item dropdown bg-dark">
            <a class="nav-link dropdown-toggle bg-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                DOCTOR
            </a>
            <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item bg-dark" href="<?php echo e(route('add_doctor_view')); ?>">Add Doctor</a></li>
                <li><a class="dropdown-item bg-dark" href="<?php echo e(route('show_doctor_view')); ?>">View Doctor</a></li>
                <li><a class="dropdown-item bg-dark" href="<?php echo e(route('show_doctor_view')); ?>">Update Doctor</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown bg-dark">
            <a class="nav-link dropdown-toggle bg-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                CITIZEN
            </a>
            <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item bg-dark" href="<?php echo e(route('user_contacts')); ?>">User Contacts</a></li>
                <li><a class="dropdown-item bg-dark" href="#">Another action</a></li>
                <li><a class="dropdown-item bg-dark" href="#">Something else here</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown bg-dark">
            <a class="nav-link dropdown-toggle bg-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                APPOINTMENT
            </a>
            <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item bg-dark" href="<?php echo e(route('show_appointment')); ?>">Doctor Appointments</a></li>
                <li><a class="dropdown-item bg-dark" href="<?php echo e(route('vaccination_appointments_show')); ?>">Vaccination Appointments</a></li>
            </ul>
        </li>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        <div>
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
        </div>
    </div>
    </div>
</nav>



<div class="sidebar bg-dark">
    <a href="<?php echo e(route('add_doctor_view')); ?>"><i class="fa-solid fa-caret-right"></i>Add Doctors</a>
    <a href="<?php echo e(route('show_doctor_view')); ?>"><i class="fa-solid fa-caret-right"></i>Show Doctors</a>
    <a href="<?php echo e(route('show_doctor_view')); ?>"><i class="fa-solid fa-caret-right"></i>Update Doctors</a>
    <a href="<?php echo e(route('show_appointment')); ?>"><i class="fa-solid fa-caret-right"></i>Doctor Appointments</a>
    <a href="<?php echo e(route('vaccination_appointments_show')); ?>"><i class="fa-solid fa-caret-right"></i>Vaccination Appointments</a>
    <a href="<?php echo e(route('user_contacts')); ?>"><i class="fa-solid fa-caret-right"></i>User Contacts</a>
    <a href="<?php echo e(route('chatify')); ?>"><i class="fa-solid fa-caret-right"></i>Chat With User</a>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/admin/admin_body.blade.php ENDPATH**/ ?>