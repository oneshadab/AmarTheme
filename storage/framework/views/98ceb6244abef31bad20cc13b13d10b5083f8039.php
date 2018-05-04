<?php $__env->startSection('content'); ?>
    <?php if(Session::has('email')): ?>
        <div class="alert alert-danger success-block">
            <strong>Welcome  <?php echo e(Session::get('email')); ?></strong>
            <br />
            <?php foreach($info as $i): ?>
                <li><?php echo e($i); ?></li>
            <?php endforeach; ?>
            <a href="<?php echo e(url('/logout')); ?>">Logout</a>
        </div>
    <?php else: ?>
        <?php echo e("GO HOME"); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>