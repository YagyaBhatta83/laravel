<?php $__env->startSection('page_title'); ?>
Search-Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>


<div id="site_content">
    <div class="container">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" id="content">


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
                                <a class="btn btn-primary btn-lg reg_button" href="<?php echo e(route('cart',$product->id)); ?>"><i class="fa fa-shopping-cart"></i> BUY NOW!</a>
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

            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($data->links()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/search.blade.php ENDPATH**/ ?>