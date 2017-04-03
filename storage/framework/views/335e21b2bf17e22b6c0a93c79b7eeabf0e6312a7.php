<style type="text/css">
	.profile-img{
		max-width: 150px;
		border: 5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0,0,0,0.3);
	}
</style>

<?php $__env->startSection('content'); ?>
<center>
<div class="row">
	<div class="col-md-2 col-md-offset-5">
		<div class="panel panel-default">
			<div class="panel-body text-centered">
				<img class="profile-img" src="/images/<?php echo e(Auth::user()->image); ?>">
				<h1><?php echo e($user->name); ?> <?php echo e($user->surname); ?></h1>
				<h5><?php echo e($user->type); ?></h5>
				<h5><?php echo e($user->email); ?></h5>
				<h5>(<?php echo e(Carbon\Carbon::createFromFormat('Y-m-d', $user->dob)->age); ?> years old)</h5>
				<?php if(Auth::user()->id == $user->id): ?>
					<form action="../admin/<?php echo e($user->id); ?>/edit">
						<input type="submit" class="btn btn-primary" value="edit">
					</form>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>