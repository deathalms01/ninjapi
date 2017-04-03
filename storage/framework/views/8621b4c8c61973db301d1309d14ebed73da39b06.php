<?php $__env->startSection('site-name'); ?>
	NinjaPI
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
	<?php foreach($tweets as $tweet): ?>
		<?php echo e($tweet->id); ?><br>
		<?php echo e($tweet->text); ?><br>
		<?php echo e($tweet->created_at); ?><br>
	<?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.results', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>