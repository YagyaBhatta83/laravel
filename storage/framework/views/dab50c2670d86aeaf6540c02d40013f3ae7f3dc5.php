<?php $__env->startSection('page_title'); ?>
Register
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
<style type="text/css">
  body {
    background-color: #f1f1f1;
  }

  .register-form {
    margin: 50px auto;
    padding: 25px 20px;
    background: #39BAF0;
    box-shadow: 2px 2px 4px #ab8de0;
    border-radius: 5px;
    color: #fff;
  }

  .register-form h2 {
    margin-top: 0px;
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-radius: 10px;

  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2">
      <div class="register-form">
        <form action="<?php echo e(route('customer-register')); ?>" method="post">
          <?php echo e(csrf_field()); ?>


          <h2 class="text-center">Registration</h2>
          <p class="hint-text">Create your account. It's free and takes just a minute.</p>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label for="first name">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                <?php if ($errors->has('first_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('first_name'); ?>
                <span class="invalid-feedback" role="alert">
                  <strong style="color:red;"><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label for="last name">Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?>
                <span class="invalid-feedback" role="alert">
                  <strong style="color:red;"><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="address" name="address" class="form-control" placeholder="Address">
            <?php if ($errors->has('address')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('address'); ?>
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;"><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" class="form-control" placeholder="Phone">
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
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
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
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
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
          <div class="form-group">
            <label for="confirm password">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
          </div>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <input type="submit" value="Register" class="btn btn-success btn-block btn-lg" tabindex="7">
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <a href="<?php echo e(route('customerlogin')); ?>" class="btn btn-danger btn-block btn-lg">Login</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/customerregister.blade.php ENDPATH**/ ?>