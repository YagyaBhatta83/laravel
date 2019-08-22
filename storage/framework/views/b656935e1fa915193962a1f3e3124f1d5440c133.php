<?php $__env->startSection('page_title'); ?>
Non-Prescription
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Float four columns side by side */
    .column {
        float: left;
        width: 25%;
        padding: 0 10px;
        margin-bottom: 20px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media  screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
            margin-bottom: 20px;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #f1f1f1;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Latest Products</h2>
            <div class="cententText">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg_best">
                            <div class="owl-carousel">
                                <?php $__currentLoopData = $lmedicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lmedicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item">
                                    <div class="panel-body">
                                        <h3 class="infoBoxHeading"><?php echo e($lmedicine->name); ?></h3>
                                        <a href="<?php echo e(route('singleproduct',$lmedicine->id)); ?>">
                                            <img class="carasoul_image" src="<?php echo e(Voyager::image( $lmedicine->image )); ?>">
                                        </a>
                                        <h3 class="infoBoxHeading">Price: <?php echo e($lmedicine->price); ?></h3>
                                        <?php if(Auth::guard('customer')->check()): ?>
                                        <a class="btn btn-default" href="<?php echo e(route('cart',$lmedicine->id)); ?>" role="button">
                                            Buy Now!
                                        </a>
                                        <?php else: ?>
                                        <a class="btn btn-default" href="<?php echo e(route('customerlogin')); ?>" role="button">
                                            Buy Now!
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 20,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 5,
                            nav: true,
                            loop: false,
                            margin: 20
                        }

                    }
                })
            })
        </script>

        <div class="container-fluid">

            <div class="row">
                <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="column">
                    <div class="card">
                        <h3 style="color:green;"><?php echo e($medicine->name); ?></h3>
                        <a href="<?php echo e(route('singleproduct',$medicine->id)); ?>"><img src="<?php echo e(Voyager::image( $medicine->image )); ?>" alt="product-image"></a>
                        <hr>
                        <h5>Price: <?php echo e($medicine->price); ?></h5>
                        <?php if(Auth::guard('customer')->check()): ?>
                        <a class="btn btn-default" href="<?php echo e(route('cart',$medicine->id)); ?>" role="button">
                            Buy Now!
                        </a>
                        <?php else: ?>
                        <a class="btn btn-default" href="<?php echo e(route('customerlogin')); ?>" role="button">
                            Buy Now!
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/nonprescription.blade.php ENDPATH**/ ?>