<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-main">
                <div class="panel-heading">
                    <?php echo $__env->yieldContent('panel-title'); ?>
                    <!--Dashboard-->
                </div>
                
                <div class="panel-body">
                    <?php echo $__env->yieldContent('panel-body'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>