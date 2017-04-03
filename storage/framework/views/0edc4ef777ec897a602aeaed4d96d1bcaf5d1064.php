<?php $__env->startSection('title'); ?>
	NinjaPI - Social Media Investigation
<?php $__env->stopSection(); ?>

<?php $__env->startSection('site-name'); ?>
	NinjaPI
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
	<div class="inner cover">
            <h1 class="cover-heading">
            NinjaPI</h1>
            <p class="lead">Social Media investigator</p>
            <form method="post" action="./search">
              <?php echo e(method_field('POST')); ?>

              <?php echo e(csrf_field()); ?>

              <div class="lead"><input type="text" name = "search" style="width: 600px; color: #333333; border-radius: 5px;"></div>

              <div class="lead" style="display: inline;">
                <input type="submit" href="#" class="btn btn-lg btn-default" style="width: 140px;" value = "Facebook">
                  <input type="submit" class="btn btn-lg btn-default" style="width: 140px;" value = "Twitter">
              </div>
            </form>
            
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>