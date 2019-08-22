<?php $__env->startSection('page_title'); ?>
Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
<div id="site_content">
    <div class="container">
        <div class="row">
            <aside class="col-sm-3 hidden-xs" id="column-left">
            </aside>
            <div class="col-sm-9" id="content">
                <div class="breadcrumbs">
                    <a href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i></a>
                    <a href="#">Login</a>
                </div>
                <div class="contentText">
                    <h1>Welcome, Please Sign In</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <!--<div class="well">!-->
                            <h2>New Customer</h2>
                            <p>I am a new customer.</p>
                            <p>By creating an account at steroid-shop.to you will be able to shop faster, be up to date on an orders status,
                                and keep track of the orders you have previously made.</p>
                            <a class="btn btn-primary reg_button" href="<?php echo e(route('customerregister')); ?>">
                                <i class="fa fa-caret-right"></i>&nbsp;
                                Continue
                            </a>
                            <!--</div>!-->
                        </div>
                        <div style="border-left: 1px dashed #c1bebe" class="col-sm-6">
                            <!--<div class="well">!-->
                            <h2>Returning Customer</h2>
                            <p>I am a returning customer</p>
                            <form action="<?php echo e(route('customer-login')); ?>" method="post" enctype="multipart/form-data" role="form" class="form-horizontal add_margin">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="input-email" class="control-label col-sm-4">E-Mail Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="email">
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
                                <div class="form-group">
                                    <label for="input-password" class="control-label col-sm-4">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                                        <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red;"><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                                    </div>

                                </div>
                                <button class="btn btn-primary reg_button" value="Login" type="submit">
                                    <i class="fa fa-key"></i>&nbsp;
                                    Login
                                </button>
                            </form>
                            <!--</div>!-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/customerlogin.blade.php ENDPATH**/ ?>