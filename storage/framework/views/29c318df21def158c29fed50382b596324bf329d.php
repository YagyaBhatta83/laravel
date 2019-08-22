<div class="container-fluid" style="background-color: #39BAF0; padding: 5px;">
    <div class="container">
        <a href="#" style="color:white;"><i class="fa fa-envelope"></i> onlinepharmacy@gmail.com &nbsp; </a>
        <a href="#" style="color:white;"><i class="fa fa-phone"></i> 65685854585 </a>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="col-md-4 col-sm-4 col-xs-4" id="logo">
                <a href="<?php echo e(route('home')); ?>" class="logo-text">
                    Online<span style="color:#39BAF0; font-size:40px">Pharmacy</span>
                </a>
            </div>
            <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12">
                <div id="top_right">
                    <!-- <div id="cart">
                        <div class="text">
                            <div class="img">
                                <a href="#"> <img class="img-responsive" src="<?php echo e(asset('assets/images/cart.png')); ?>" alt="" title="" width="26" height="27" /></a>
                            </div><span>Your cart:</span><span class="cart_total">Rs.00</span><span class="cart_items">(0 items)</span>
                        </div>
                    </div> -->
                    <div id="bottom_right">
                        <div class="row">
                            <div class="col-md-6 col-xs-6 wd_auto">
                                <div class="left">
                                    <?php if(Auth::guard('customer')->check()): ?>
                                    <div class="logout">
                                        <form action="<?php echo e(route('customer-logout')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-default reg_button" type="submit">Logout</button>
                                        </form>
                                    </div>
                                    <?php else: ?>

                                    <div class="login">
                                        <a class="btn btn-default reg_button" href="<?php echo e(route('customerlogin')); ?>">Login</a>
                                        <a class="btn btn-default reg_button" href="<?php echo e(route('customerregister')); ?>">Signup</a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <nav role="navigation" class="navbar navbar-inverse" id="nav_show">
                    <div id="nav" class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"> </span>
                            </button>

                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav site_nav_menu1">
                                <li class="first "><a href="<?php echo e(route('home')); ?>">Home</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle nav" data-toggle="dropdown">
                                        Category <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu ">
                                        <li><a class="dropdown-item" href="<?php echo e(route('prescription')); ?>">Prescription</a></li>
                                        <li><a class="dropdown-item" href="<?php echo e(route('nonprescription')); ?>">Non-Prescription</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo e(route('contactus')); ?>">Contact Us</a></li>
                            </ul>
                            <div class="container">
                                <form action="<?php echo e(route('search')); ?>" method="get" class="form-inline my-2 my-lg-0" style="margin-top: 8px;     margin-left: 745px;">
                                    <?php echo e(csrf_field()); ?>

                                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="contentText">
    <div class="breadcrumbs container-fluid">
        <a href="<?php echo e(route('home')); ?>" class="headerNavigation"><i class="fa fa-home"></i></a>
        <a href="<?php echo e(route('home')); ?>">Home</a>
    </div>
</div><?php /**PATH C:\xampp\htdocs\cp\Implementation\laravel\resources\views/front/layouts/navbar.blade.php ENDPATH**/ ?>