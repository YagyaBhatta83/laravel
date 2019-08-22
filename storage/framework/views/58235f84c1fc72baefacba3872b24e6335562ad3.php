<?php $__env->startSection('page_title'); ?>
    Cart
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
<div class="main-content">
        <div class="container cart-block-style">
            <div class="breadcrumbs">
                <a href="<?php echo e(route('home')); ?>"><i class="fa fa-home"></i></a>
                <span>Shopping Cart</span>
            </div>
            <div class="contentText">
                <h1>Shopping Cart
                </h1>
            </div>
            <form method="post" action="<?php echo e(route('checkout')); ?>" >
            <?php echo csrf_field(); ?>
            <input type="hidden" name="product_id"   value="<?php echo e($product->id); ?>">
                <div class="table-responsive margin-top">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="text-center"></td>
                                <td class="text-left">PRODUCT NAME</td>
                                <td class="text-left">QUANTITY</td>
                                <td class="text-right">UNIT PRICE</td>
                                <td class="text-right">TOTAL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <img title="ana" src="<?php echo e(Voyager::image( $product->image )); ?>" style="width: 100px; height: 80px;">
                                </td>
                                <td class="text-left"><?php echo e($product->name); ?>

                                </td>
                                
                                <td class="text-left"><br>
                                    <div style="max-width: 200px;" class="input-group btn-block">
                                        <input type="text" class="form-control input-sm" name="quantity" size="1" value="1" id="quantity">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="reset"
                                                data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                        </span></div>
                                </td>
                                <td class="text-right" ><br><input type="text" id="unit_price" value="<?php echo e($product->price); ?>" disabled></td>
                                <td class="text-right" ><br><input type="text" id="total" disabled ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            



            <br>
            
            <div class="buttons">
                <div class="pull-left"><a class="btn btn-default" href="<?php echo e(route('home')); ?>"><i
                            class="fa fa-caret-right"></i>&nbsp;Continue Shopping</a></div>
                <div class="pull-right">
                    <input type="submit" value="CheckOut" class="btn btn-primary reg_button">
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scripts'); ?>
        <script>
         $(document).ready(function(){
             $('#quantity').keyup(function(){
                 
                 $('#total').val($("#quantity").val() * $('#unit_price').val());
             });
        });

        </script>
    <?php $__env->stopSection(); ?>   
    
<?php echo $__env->make('front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/cart.blade.php ENDPATH**/ ?>