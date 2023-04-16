<?php echo $__env->make('layouts.welcome-page-styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    .home-background{
        background-image: url('images/background2.png');
        background-position: center;
        background-size: cover;
    }
    .right-leaf-image{
        position: absolute;
        top:580px;
        right: 0;
    }
    .left-leaf-image{
        position: absolute;
        top:580px;
        left: 0;
    }
    .red-virus{
        position: absolute;
        top: 300px;
        left: 800px;

    }
    .red-virus01{
        position: absolute;
        top: 120px;
        right: 420px;

    }
    .red-virus02{
        position: absolute;
        top: 220px;
        right: 50px;

    }
    .rotation{
        animation: rotation 60s infinite linear;
    }
    @keyframes rotation {
    from {
        transform: rotate(359deg);
    }
    to {
    transform: rotate(0deg);
    }

}

</style>
<section id="home">
    <div class="home-page-outer">
        <div class="virus-balls">
                <img src="images/Covid.png" alt="" width="120px" class="red-virus rotation">
                <img src="images/Covid.png" alt="" width="100px" class="red-virus01 rotation">
                <img src="images/Covid.png" alt="" width="80px" class="red-virus02 rotation">
                <img src="images/Right.png" alt="" width="200px" class="right-leaf-image">
                <img src="images/Left.png" alt="" width="150px" class="left-leaf-image">
        </div>
        <i class="fa-solid fa-house text-center"></i>
        <div class="main-content home-background row">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                <div class="page-description">
                    <h1 class="home-title">Together we fight against to covid-19.</h1>
                    <p class="home-description">Coronavirus disease 2019 (covid-19 or simply covid) is a contagious disease caused by severe acute respiratory syndrome coronavirus 2 (sars-cov-2). The first known case was identified in Wuhan, China, in December 2019. The disease
                        has since spread worldwide, leading to an ongoing pandemic. Symptoms of covid 19 are variable ,but often include fever cough, headache, fatigue, breathing difficulties, and loss of smell and taste. Symptoms may begin one to fourteen
                        days after exposure to the virus. at least a third of people who are infected do not develop noticeable symptoms.
                    </p>
                    <div class="home-page-button mt-3">
                        <button class="btn btn-primary">See More Details</button>
                        <a href="<?php echo e(route('login')); ?>"><button class="btn btn-primary">Use Our Services</button></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                <div class="page-image home-image" style="align-items: center;">
                    <img src="./images/home-page-image.png" class="img-responsive" alt="home-page-image" width="400px">
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /mnt/sda2/Projects/Laravel/CoviGuardFinal/resources/views/welcomepageitems/homepage.blade.php ENDPATH**/ ?>