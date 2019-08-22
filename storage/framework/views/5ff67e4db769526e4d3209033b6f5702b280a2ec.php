<?php $__env->startSection('page_title'); ?>
Home
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contents'); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="" src="<?php echo e(asset('assets/images/a1.jpg')); ?>" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img class="" src="<?php echo e(asset('assets/images/b1.jpg')); ?>" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img class="" src="<?php echo e(asset('assets/images/c1.jpg')); ?>" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="contentContainer">
        <!----slidder start-!-->
        <h2>Latest Products</h2>
        <div class="cententText">
          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="bg_best">
                <div class="owl-carousel">
                  <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="item">
                  <div class="panel-body">
                    <h3 class="infoBoxHeading"><?php echo e($medicine->name); ?></h3>    
                    <a href="<?php echo e(route('singleproduct',$medicine->id)); ?>">
                      <img class="carasoul_image" src="<?php echo e(Voyager::image( $medicine->image )); ?>">
                    </a>
                    <h3 class="infoBoxHeading">Price: <?php echo e($medicine->price); ?></h3>
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
        </div>

      </div>


      <!-- Section: Features v.1 -->
      <section class="text-center my-5">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-3">

            <i class="fas fa-book fa-3x cyan-text"></i>
            <h5 class="font-weight-bold my-4">Cash on Delivery</h5>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3">

            <i class="fas fa-book fa-3x cyan-text"></i>
            <h5 class="font-weight-bold my-4">Free Shipping</h5>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3">

            <i class="far fa-comments fa-3x orange-text"></i>
            <h5 class="font-weight-bold my-4">Lowest Price</h5>

          </div>

          <div class="col-md-3">

            <i class="far fa-comments fa-3x orange-text"></i>
            <h5 class="font-weight-bold my-4">Return and Exchange Policy</h5>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </section>

      <section>
        <div class="contentContainer">
         
          <h2>Featured Products</h2>
          <div class="cententText">
            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
               
                <div class="bg_best">
                  <div class="owl-carousel">
                    <?php $__currentLoopData = $fmedicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fmedicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                      <h3 class="infoBoxHeading"><?php echo e($fmedicine->name); ?></h3>

                      <div class="panel-body">
                        </div>

                      <a href="<?php echo e(route('singleproduct',$fmedicine->id)); ?>">
                          <img class="carasoul_image" src="<?php echo e(Voyager::image( $fmedicine->image )); ?>">
                      </a>
                      <h3 class="infoBoxHeading">Price: <?php echo e($fmedicine->price); ?></h3>
                      <?php if(Auth::guard('customer')->check()): ?>
                      <a class="btn btn-default" href="<?php echo e(route('cart',$fmedicine->id)); ?>" role="button">
                        Buy Now!
                      </a>
                      <?php else: ?>
                      <a class="btn btn-default" href="<?php echo e(route('customerlogin')); ?>" role="button">
                        Buy Now!
                      </a>
                      <?php endif; ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>

                  <script>
                    $(document).ready(function () {
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/home.blade.php ENDPATH**/ ?>