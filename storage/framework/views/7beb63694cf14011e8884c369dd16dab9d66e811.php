<?php $__env->startSection('content'); ?>

    <?php 
        #Remove this snippet once backend is complete
        $filters = array(
            array("name" => "Category", "options" => array("E-Commerce", "Event", "WordPress")),
            array("name" => "Rating", "options" => array("1", "2", "3", "4", "5")),
            array("name" => "Price", "options" => array("$5", "$10", "$20", "$50")),
        );
     ?>
    <style>
        .search-card{
            transition: .3s;
            min-height: 220px;
        }
        .search-card:hover{
            box-shadow: 0 20px 25px rgba(0,0,0,0.15);
            transform: translateY(-4px);
        }
    </style>
    <div class="container">
        <div class="row ml-3 mt-5"><h4><i class="fas fa-search"> </i> Search Results:</h4></div>

        <div class="row">
            <div class="col-3 w-100 mt-4 mb-5">

                <div class="card w-100 shadow-nav" style="min-height: 500px;">
                    <div class="card-header bg-white text-dark">
                        <h3 class="roboto text-center">Filter</h3>
                    </div>
                    <div class="card-body w-100 bg-white text-dark">
                        <form>
                            <?php foreach($filters as $f): ?>
                            <div class="form-group ">
                                <label class='roboto text-center' for="<?php echo e($f['name']); ?>"><?php echo e($f['name']); ?></label>
                                <select class="form-control bg-transparent border-top-0 border-left-0 border-right-0 text-dark roboto" id="<?php echo e($f['name']); ?>">
                                    <?php foreach($f['options'] as $op): ?>
                                    <option class='roboto'><?php echo e($op); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <?php endforeach; ?>
                        </form>
                        
                    </div>
                    <div class="card-footer bg-white">
                        <button class="btn btn-dark btn-block roboto">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                </div>
                <div class="card w-100 mt-5 shadow-nav" style="min-height: 500px;">
                    <div class="card-body w-100">
                        <img src="http://i64.tinypic.com/2chmdug.png" height="350px" width="">
                    </div>
                </div>
            </div>
            <div class="col-9   ">
                <div class="row mt-2">
                </div>
                <?php foreach($results as $r): ?>
                <div class="row mt-3 mr-1 shadow-nav">
                    <div class="col-12 card search-card rounded-0">
                        <div class="row clickable card-body p-0" data-url="<?php echo e(route('product', $r['id'])); ?>">
                            <div class="col-4 p-1">
                                <img src="<?php echo e($r['img']); ?>" class="h-100" width="234px" style="object-fit: cover;">
                            </div>
                            <div class="col-8 w-100 pt-3 pl-0 pr-4">
        


                                <div class="row">
                                    <div class="col-9">
                                        <div class="row">
                                            <div class="col-12">
                                                    <p class="text-left lead mb-0" style="font-size: 28px">
                                                        <span class="align-middle" ><?php echo e($r['name']); ?></span> 
                                                    
                                                    </p>
                                                    <p class="text-left lead mb-2" style="font-size: 14px">
                                                            <span class="text-warning align-middle" style="font-size: 14px;">
                                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                                <?php if($r['rating'] >= $i): ?>
                                                                    <i class="fas fa-star"></i>
                                                                <?php else: ?>
                                                                    <i class="far fa-star"></i>
                                                                <?php endif; ?>
                                                            <?php endfor; ?>
                                                            </span>
                                                                    
                                                        </p>
                                            
        
                                                
                                                                                                                                   
                                            </div>
                                        </div>

                                            <div class="row mt-" style="height: 50px;">
                                                    <p class="col-12 text-secondary pr-0 mt-">
                                                        Joomla Template for Home Maintenance and Handyman Service Websites
                                                    </p>
                                                    </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="row">
                                            <h2 class="col-12 text-right mb-0 roboto">
                                                $5
                                            </h2>
                                        </div>
                                        
                                        <div class="row mt-5"></div>
                                        <div class="row text-right mt-5 mb-2">
                                            <div class="col-12 mt-3">
                                                    <a class="btn btn-success text-white" href="<?php echo e(route('addToCart', $r['id'])); ?>">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>


                </div>

            </div>
                <?php endforeach; ?>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>