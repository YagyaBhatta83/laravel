<?php $__env->startSection('page_title'); ?>
Single-Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
<div id="site_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" id="content">
                <div class="breadcrumbs">
                    <a href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i></a>
                    <a href="">Single Product</a>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <ul class="thumbnails">
                            <li><a href="#" class="thumbnail fix-box"><img class="changeimg" src="<?php echo e(Voyager::image( $product->image )); ?>"></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">

                        <h1 style="color: #39baf0"><?php echo e($product->name); ?></h1>
                        <ul class="list-unstyled">
                            <li>
                                <h2>Price: Rs. <?php echo e($product->price); ?></h2>
                            </li>
                        </ul>
                        <div id="product">
                            <div class="form-group">
                                <h4 for="input-quantity" class="control-label">Avilable</h4>
                                <br>
                                <?php if(Auth::guard('customer')->check()): ?>
                                <a class="btn btn-primary btn-lg reg_button" href="<?php echo e(route('cart',$product->id)); ?>" role="button"><i class="fa fa-shopping-cart"></i> BUY NOW!</a>
                                <?php else: ?>
                                <a class="btn btn-default" href="<?php echo e(route('customerlogin')); ?>" role="button">
                                    Buy Now!
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row container">
                    <h3>Description</h3>
                    <hr>
                    <p><?php echo $product->description; ?></p>
                </div>
                <hr>
                <div class="rel-product">
                    <div class="infoBoxHeading">
                        <a>Related Product</a>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="column">
                                <div class="card">
                                    <h3 style="color:green;"><?php echo e($medicine->name); ?></h3>
                                    <a href="<?php echo e(route('singleproduct',$medicine->id)); ?>"><img src="<?php echo e(Voyager::image( $medicine->image )); ?>" alt="product-image"></a>
                                    <hr>
                                    <h5>Price: <?php echo e($medicine->price); ?></h5>
                                    <a class="btn btn-default" href="<?php echo e(route('cart',$product->id)); ?>" role="button">
                                        Buy Now!
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/singleproduct.blade.php ENDPATH**/ ?>