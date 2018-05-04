<?php $__env->startSection('content'); ?>
    <?php 
        #Remove this snippet once backend is complete
        if(isset($user_info))
        {
            //echo "Welcome ".$user_info->user_name."<br>";

            for($i=0;$i<2;$i++)
            {
                echo  "<b>".$CATAGORIES[$i]."</b><br><br>";
                foreach ($PRODUCTS[$i] as $PRODUCT)
                {
                    echo $PRODUCT->product_name."<br>";
                }
            }
        }



        $categories = array(
            array("title" => "E-Commerce", "icon" => "fab fa-sellcast"),
            array("title" => "Event", "icon" => "fas fa-calendar"),
        );
        $products = array(
            array("name" => "Product", "img" => "http://i68.tinypic.com/124j41d.png", "rating" => 3, "id" => 1),
            array("name" => "Product", "img" => "http://i68.tinypic.com/124j41d.png", "rating" => 3, "id" => 1),
            array("name" => "Product", "img" => "http://i68.tinypic.com/124j41d.png", "rating" => 3, "id" => 1),
        );
     ?>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body row p-0 pl-3">
                <div class="col-4 p-0">
                    <img class="p-0 m-0" src="http://i66.tinypic.com/2d854q0.png" height="300">
                </div>
                <div class="col-8 pl-4">
                    <h3>Amartheme.com</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulpu tate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <?php foreach($categories as $c): ?>
            <div class="row ml-2 mt-5 mb-2">
                <h4>
                    <i class="<?php echo e($c['icon']); ?>"></i>
                    <?php echo e($c['title']); ?>

                </h4>
            </div>

            <div class="card">
                <div class="row card-body">
                    <?php foreach($products as $p): ?>
                    <div class="col-4">
                        <div class="row" >
                            <div class="col-2"></div>
                            <div class="col-7 card pl-0 pr-0 pb-3 text-center clickable" data-url="<?php echo e(route('product')); ?>">
                                <img src="<?php echo e($p['img']); ?>" style="object-fit: cover;" height="206px" width="206px">
                                <div class="row mt-1 p-1">
                                    <div class="col-12 mx-auto">
                                        <div class="row mx-auto">
                                            <h5 class="text-center mx-auto">
                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                    <?php if($p['rating'] >= $i): ?>
                                                        <i class="fas fa-star"></i>
                                                    <?php else: ?>
                                                        <i class="far fa-star"></i>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </h5>
                                        </div>
                                        <div class="row mx-auto">
                                            <h4 class="mx-auto"><?php echo e($p['name']); ?></h4>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>