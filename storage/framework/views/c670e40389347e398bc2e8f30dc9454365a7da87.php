<?php $__env->startSection('page_title'); ?>
CheckOut
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
<div class="main-content">
    <div class="container checkout">
        <div class="breadcrumbs">
            <a href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i></a>
            <a href="#">Checkout</a>
        </div>
        <h2 class="text-center text-uppercase text-bold">checkout</h2>
        <hr class="small-line">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="true"> Delivery Details <i class="fa fa-caret-down"></i></a></h4>
            </div>
            <div id="collapse-shipping-address" class="panel-collapse collapse in" aria-expanded="true" style="">
                <div class="panel-body">

                    <form method="POST" action="<?php echo e(route('store.checkout')); ?>" enctype="multipart/form-data" class="form-horizontal">
                        <?php echo csrf_field(); ?>

                        <div class="form-group required">
                            <label for="input-shipping-email" class="col-sm-2 control-label">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-shipping-email" placeholder="E-Mail" value="" name="email">
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red;"><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group required">
                            <label for="input-shipping-location" class="col-sm-2 control-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-shipping-location" placeholder="Location" value="" name="location">
                                <?php if ($errors->has('location')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('location'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red;"><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="input-phone" class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="pho" class="form-control" id="input-phone" placeholder="phone" value="" name="phone">
                                <?php if ($errors->has('phone')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red;"><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <input type="hidden" name="customer_id" value="<?php echo e(auth()->user()->id); ?>">
                        <input type="hidden" name="medicine_id" value="<?php echo e($product->id); ?>">
                        <input type="hidden" name="quantity" value="<?php echo e($quantity); ?>">
                        <?php if($product->category_id == 1): ?>
                        <label for="file">Choose your prescription file.</label>
                        <input type="file" name="prescription" id="Prescription"><br>
                        <?php endif; ?>

                        <div class="buttons">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary" id="button-guest-shipping">Order</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/checkout.blade.php ENDPATH**/ ?>