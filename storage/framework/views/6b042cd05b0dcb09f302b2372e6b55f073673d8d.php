<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covi Guard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        :root {
            --green: #6789e7;
            --black: #444;
            --light-color: #777;
            --box-shadow: .5rem .5rem 0 rgba(22, 160, 133, .2);
            --text-shadow: .4rem .4rem 0 rgba(0, 0, 0, .2);
            --border: .2rem solid var(--green);
        }

        * {
            font-family: Ubuntu, serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-transform: capitalize;
            transition: all .2s ease-out;
            text-decoration: none;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 7rem;
            scroll-behavior: smooth;
        }

        section {
            padding: 2rem 9%;
        }

        section:nth-child(even) {
            background: #f5f5f5;
        }

        .heading {
            text-align: center;
            padding-bottom: 2rem;
            color: var(--black);
            font-size: 25px;
            letter-spacing: .3rem;
        }

        .heading span {

            color: var(--green);
        }

        .header {
            padding: 2rem 9%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgb(186, 208, 255);
        }


        .header .navbar a {
            font-size: 25px;
            color: blue;
            margin-left: 2rem;
        }

        .header .navbar a:hover {
            color: var(--green);
        }


        .home {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            padding-top: 10rem;
        }

        .home .image {
            flex: 1 1 45rem;
        }

        .home .image img {
            width: 100%;
        }

        .home .content {
            flex: 1 1 45rem;
        }

        .home .content h3 {
            font-size: 4.0rem;
            color: var(--black);
            line-height: 1.5;

        }

        .home .content p {
            font-size: 1.5rem;
            color: var(--light-color);
            line-height: 1.5;
            padding: 1rem 0;
        }

        .icons-container {
            display: grid;
            gap: 2rem;
            grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .icons-container .icons {
            border: var(--border);
            box-shadow: var(--box-shadow);
            border-radius: .5rem;
            text-align: center;
            padding: 2.5rem;
        }

        .icons-container .icons i {
            font-size: 4.5rem;
            color: var(--green);
            padding-bottom: .7rem;
        }

        .icons-container .icons h3 {
            font-size: 4.5rem;
            color: var(--black);
            padding: .5rem 0;
            text-shadow: var(--text-shadow);
        }

        .icons-container .icons p {
            font-size: 1.7rem;
            color: var(--light-color);
        }

        .symptoms .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
            gap: 2rem;
        }

        .symptoms .box-container .box {
            text-align: center;
            background: #fff;
            border-radius: .5rem;
            box-shadow: var(--box-shadow);
            border: var(--border);
            padding: 2.5rem;
        }

        .symptoms .box-container .box img {
            height: 20rem;
            border: var(--border);
            border-radius: .5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .symptoms .box-container .box h3 {
            color: var(--black);
            font-size: 2.5rem;
            padding: 1rem 0;
        }

        .symptoms .box-container .box p {
            color: black;
            font-size: 1.4rem;
            line-height: 1.5;
        }

        .doctors .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap: 2rem;
        }

        .doctors .box-container .box {
            text-align: center;
            background: rgb(217, 232, 247);
            border-radius: .5rem;
            border: var(--border);
            box-shadow: var(--box-shadow);
            padding: 2rem;
        }

        .doctors .box-container .box img {
            height: 20rem;
            border: var(--border);
            border-radius: .5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .doctors .box-container .box h3 {
            color: var(--black);
            font-size: 2.5rem;
        }

        .doctors .box-container .box span {
            color: var(--green);
            font-size: 1.5rem;
        }

        .doctors .box-container .box .share {
            padding-top: 2rem;
        }

        .doctors .box-container .box .share a {
            height: 5rem;
            width: 5rem;
            line-height: 4.5rem;
            font-size: 2rem;
            color: var(--green);
            border-radius: .5rem;
            border: var(--border);
            margin: .3rem;
        }

        .doctors .box-container .box .share a:hover {
            background: var(--green);
            color: #fff;
            box-shadow: var(--box-shadow);
        }

        .book .row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .book .row .image {
            flex: 1 1 45rem;
        }

        .book .row .image img {
            width: 100%;
        }

        .book .row form {
            flex: 1 1 45rem;
            background: rgb(161, 192, 242);
            border: var(--border);
            box-shadow: var(--box-shadow);
            text-align: center;
            padding: 2rem;
            border-radius: .5rem;
        }

        .book .row form h3 {
            color: var(--black);
            padding-bottom: 1rem;
            font-size: 3rem;
        }

        .book .row form .box {
            width: 100%;
            margin: .7rem 0;
            border-radius: .5rem;
            border: var(--border);
            font-size: 1.6rem;
            color: var(--black);
            text-transform: none;
            padding: 1rem;
        }

        .book .row form {
            padding: 1rem 4rem;
        }

        .form-control {
            height: 50px;;
        }

        #formcontroltextarea {
            height: 150px;
        }

        .review .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
            gap: 2rem;
        }

        .review .box-container .box {
            border: var(--border);
            box-shadow: var(--box-shadow);
            border-radius: .5rem;
            padding: 2.5rem;
            background: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 0;
        }

        .review .box-container .box img {
            height: 10rem;
            width: 10rem;
            border-radius: 50%;
            object-fit: cover;
            border: .5rem solid #fff;
        }

        .review .box-container .box h3 {
            color: #fff;
            font-size: 2.2rem;
            padding: .5rem 0;
        }

        .review .box-container .box .stars i {
            color: #fff;
            font-size: 1.5rem;
        }

        .review .box-container .box .text {
            color: var(--light-color);
            line-height: 1.8;
            font-size: 1.6rem;
            padding-top: 4rem;
        }

        .review .box-container .box::before {
            content: '';
            position: absolute;
            top: -4rem;
            left: 50%;
            transform: translateX(-50%);
            background: var(--green);
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
            height: 25rem;
            width: 120%;
            z-index: -1;
        }

        .btn {
            width: 100%;
            height: 50px;
            font-size: 20px;
            font-weight: 900;
            text-transform: capitalize;
        }

        .footer .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
            gap: 2rem;
        }

        .footer .box-container .box h3 {
            font-size: 2.5rem;
            color: var(--black);
            padding: 1rem 0;
        }

        .footer .box-container .box a {
            display: block;
            font-size: 1.5rem;
            color: var(--light-color);
            padding: 1rem 0;
        }

        .footer .box-container .box a i {
            padding-right: .5rem;
            color: var(--green);
        }

        .footer .box-container .box a:hover i {
            padding-right: 2rem;
        }

        /* media queries  */
        @media (max-width: 991px) {

            html {
                font-size: 55%;
            }

            .header {
                padding: 2rem;
            }

            section {
                padding: 2rem;
            }

        }

        @media (max-width: 768px) {

            #menu-btn {
                display: initial;
            }

            .header .navbar {
                position: absolute;
                top: 115%;
                right: 2rem;
                border-radius: .5rem;
                box-shadow: var(--box-shadow);
                width: 30rem;
                border: var(--border);
                background: #fff;
                transform: scale(0);
                opacity: 0;
                transform-origin: top right;
                transition: none;
            }

            .header .navbar.active {
                transform: scale(1);
                opacity: 1;
                transition: .2s ease-out;
            }

            .header .navbar a {
                font-size: 25px;
                display: block;
                margin: 2.5rem;
            }

        }

        @media (max-width: 450px) {

            html {
                font-size: 50%;
            }

        }

        ::placeholder{
            font-size: 15px;
        }
        .form-control 


    </style>

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <nav class="navbar">
        <a href="<?php echo e(route('userDashBoard')); ?>">Dash Board</a>
        <a href="#symptoms">Symptoms</a>
        <a href="#doctors">doctors</a>
        <a href="#book">book</a>
    </nav>
    <div class="userbutton">
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


</header>


<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="/images/Asymptomatic-bro.svg" alt="">
    </div>

    <div class="content">
        <h3>What are the main Symptomps?</h3>
        <p>If you have any Symptomps Contact us as soon as possible!</p>
        <divclass="allbtns">
        <a href="mailto:coviguardvac@gmail.com"><button type="button" class="btn btn-outline-primary">contact us</button></a>
        </div>
    </div>

</section>

<!-- home section ends -->


<!-- services section starts  -->

<section class="symptoms" id="symptoms">

    <h1 class="heading"> Main <span>Symptomps</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="/images/Stress-pana.svg" alt="">
            <h3>Head Ache</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
            </p>
            <a href="#">
                <button type="button" class="btn btn-outline-primary"> view more</button>
            </a>
        </div>

        <div class="box">
            <img src="/images/Person with a cold-amico.svg" alt="">
            <h3>High Fever</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
            </p>
            <a href="#">
                <button type="button" class="btn btn-outline-primary"> view more</button>
            </a>
        </div>

        <div class="box">
            <img src="/images/Person with a cold-pana.svg" alt="">
            <h3>Runny Nose</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
            </p>
            <a href="#">
                <button type="button" class="btn btn-outline-primary"> view more</button>
            </a>
        </div>

        <div class="box">
            <img src="/images/Virus transmission-pana.svg" alt="">
            <h3>Caugh</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
            </p>
            <a href="#">
                <button type="button" class="btn btn-outline-primary"> view more</button>
            </a>
        </div>

        <div class="box">
            <img src="/images/Virus transmission-bro.svg" alt="">
            <h3>Sore Troath</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
            </p>
            <a href="#">
                <button type="button" class="btn btn-outline-primary"> view more</button>
            </a>
        </div>

        <div class="box">
            <img src="/images/Virus transmission-cuate.svg" alt="">
            <h3>Shortness of breath</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
            </p>
            <a href="#">
                <button type="button" class="btn btn-outline-primary"> view more</button>
            </a>
        </div>

        <div class="box">
            <img src="/images/Remedy-amico.svg" alt="">
            <h3>Fever</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
            </p>
            <a href="#">
                <button type="button" class="btn btn-outline-primary"> view more</button>
            </a>
        </div>

        <div class="box">
            <img src="/images/Person with a cold-bro.svg" alt="">
            <h3>Cold</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.
            </p>
            <a href="#">
                <button type="button" class="btn btn-outline-primary"> view more</button>
            </a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span></h1>

    <div class="box-container">
        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="box">
                <img src="doctorimage/<?php echo e($doctor->image); ?>" alt="">
                <h3><?php echo e($doctor->name); ?></h3>
                <span><?php echo e($doctor->speciality); ?></span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<!-- doctors section ends -->

<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"><span>Make</span> Appoinment </h1>

    <div class="row">

        <div class="image">
            <img src="/images/Online Doctor-cuate.svg" alt="">
        </div>

        <form action="<?php echo e(url('appointment')); ?>" method="POST">

            <?php if(session('flush')): ?>
                <div class="alert alert-primary note">
                    SuccessFully Send The Request
                </div>
            <?php endif; ?>
            <?php echo csrf_field(); ?>

            <h3>Make appointment</h3>
            <div class="row">
                <div class="col-12">
                    <input type="text" class="form-control placeholder-text" placeholder="full name" aria-label="fullname"
                           name="fullname" value="<?php echo e(old('fullname')); ?>" required>
                </div>
            </div>
            <br>
            <div class="col-12">
                <input type="text" class="form-control placeholder-text" id="email" placeholder="E-mail" name="email"
                       value="<?php echo e(old('email')); ?>" required>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control placeholder-text" placeholder="address" aria-label="nic " name="nic"
                           value="<?php echo e(old('address')); ?>" required>
                </div>
                <div class="col">
                    <input type="number" class="form-control placeholder-text" id="phone" placeholder="phone" name="phone" required>
                </div>
            </div>
            <br>

            <div class="col-12">
                <input type="text" class="form-control placeholder-text" id="doctor_name" placeholder="doctor" name="doctor_name"
                       value="<?php echo e(old('doctor_name')); ?>" required>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <input type="date" class="form-control placeholder-text" placeholder="dd/mm/yyyy" aria-label="date" name="date">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <textarea class="form-control placeholder-text" id="formcontroltextarea" rows="6" name="message"
                              placeholder="Your Text Here"></textarea>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-primary"> Make An Appointment</button>
        </form>

    </div>

</section>

<!-- booking section ends -->

<!-- review section starts  -->


















































<!-- review section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#symptoms"> <i class="fas fa-chevron-right"></i> symptoms </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> book </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> Waruni@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> Waruni678@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Matara, Sri lanka </a>
        </div>

    </div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script>
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }

    window.onscroll = () => {
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    }

</script>
</body>
</html>
<?php /**PATH C:\laragon\www\CoviGuardFinal\resources\views/user/symptomspage.blade.php ENDPATH**/ ?>