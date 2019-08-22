<?php $__env->startSection('page_title'); ?>
ContactUs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
<style type="text/css">
  body {
    background-color: #f1f1f1;
  }

  .contact-form {
    margin: 50px auto;
    padding: 25px 20px 10px;
    background: #39BAF0;

    border-radius: 5px;
    color: #fff;
  }

  .contact-form h2 {
    margin-top: 0px;
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-radius: 10px;

  }
</style>

<div class="container">
  <div class="row">
    <div class="col-md-6  col-md-6 offset-6 ">
      <div class="contact-form">
        <form action="<?php echo e(route('contact-us')); ?>" method="post">
          <?php echo e(csrf_field()); ?>

          <h2 class="text-center">Contact Us</h2>
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
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Your Email">
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
            <label for="text">Subject</label>
            <input type="text" name="subject" class="form-control" placeholder="Subject">
            <?php if ($errors->has('subject')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('subject'); ?>
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;"><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          <div class="form-group">
            <label for="your message">Your Message</label>
            <textarea name="message" rows="8" class="form-control" placeholder="Your Message"></textarea>
            <?php if ($errors->has('message')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('message'); ?>
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;"><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-success btn-block btn-lg" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/contactus.blade.php ENDPATH**/ ?>