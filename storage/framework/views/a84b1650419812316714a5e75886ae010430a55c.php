<?php $__env->startSection('panel-title'); ?>
    Create User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panel-body'); ?>
	<form class="form-horizontal" role="form" method="POST" action="/admin">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <label for="name" class="col-md-4 control-label">Name</label>

	        <div class="col-md-6">
	            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

	            <?php if($errors->has('name')): ?>
	                <span class="help-block">
	                	<strong><?php echo e($errors->first('name')); ?></strong>
	                </span>
	            <?php endif; ?>
	        </div>
        </div>

        <div class="form-group<?php echo e($errors->has('surname') ? ' has-error' : ''); ?>">
            <label for="name" class="col-md-4 control-label">Last Name</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control" name="surname" value="<?php echo e(old('surname')); ?>">

                <?php if($errors->has('surname')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('surname')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('dob') ? ' has-error' : ''); ?>">
            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                <div class="col-md-6">
                    <input id="dob" type="date" class="form-control" name="dob" value="<?php echo e(old('dob')); ?>">

                    <?php if($errors->has('dob')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('dob')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
        </div>

        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
            <label for="username" class="col-md-4 control-label">Username</label>

            <div class="col-md-6">
                <input id="username" type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>">

                <?php if($errors->has('username')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('nuserame')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password">

                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                    <?php if($errors->has('password_confirmation')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                    </span>
                    <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('type') ? ' has-error' : ''); ?>">
            <label for="type" class="col-md-4 control-label">Type</label>

            <div class="col-md-6">
                <select id="type" class="form-control" name="type" value="<?php echo e(old('type')); ?>" style="width: 100px;">
                    <?php if(Auth::user()->type=='admin'): ?>
                        <option value="admin">Admin</option>
                    <?php endif; ?>
                    <option value="user">User</option>
                </select>
                <?php if($errors->has('type')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('type')); ?></strong>
                    </span>
                        <?php endif; ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>