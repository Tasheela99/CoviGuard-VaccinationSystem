

<?php echo $__env->make('layouts.welcome-page-styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="contacts">
    <div class="contacts-page-outer">
        <div class="page-title text-center">
            <h1>Contact Us</h1>
        </div>
        <div class="main-content">
            

            <div class="page-image">
                <img src="./images/contact-us-image.jpg" alt="contacts-page-image" width="500px" style="margin: 0 0 10px 150px">
            </div>
            

            <div class="page-description" style="align-items: center">
                <div class="contact-form-inner">
                    <?php if(session()->has('message')): ?>
                        <div class="alert alert-primary text-center">
                            <?php echo e(session()->get('message')); ?>

                        </div>
                    <?php endif; ?>

                    

                    <form action="<?php echo e(route('contact_us')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <p class="text-center cuname">Contact Us 24/7</p>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Let us Know Your Comments" name="message" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary ">Sent Your Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php /**PATH C:\xampp\htdocs\CoviGuardFinal\resources\views/welcomepageitems/contactspage.blade.php ENDPATH**/ ?>