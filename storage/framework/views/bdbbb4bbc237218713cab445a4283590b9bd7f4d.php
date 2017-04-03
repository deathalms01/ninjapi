<?php $__env->startSection('panel-title'); ?>
    Edit Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panel-body'); ?>

    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <center>
            <img src="/images/<?php echo e(Auth::user()->image); ?>" style="width:150px; height:150px; border-radius:50%; margin-right:25px;">

                <form action="../../profile/avatar" method="post" enctype="multipart/form-data">
                    <label>Update Profile Picture</label>
                    <input type="file" name="avatar">
                    <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
                    <input type="submit" class= "btn btn-primary" value="Upload">
                </form>
            </center>
        </div>
    </div>

	<form class="form-horizontal" role="form" method="POST" action="/admin/<?php echo e(Auth::user()->id); ?>">
        <?php echo e(method_field('PUT')); ?>

        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                
            </div>
        </div>
    
    <div class="panel panel-default panel-main">
        <div class="panel-heading">
            <center>Account Information</center>
        </div>
    </div>

        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
            <label for="username" class="col-md-4 control-label">Username</label>

            <div class="col-md-6">
                <input id="username" type="text" class="form-control" name="username" value="<?php echo e(Auth::user()->username); ?>">

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
            <input id="password" type="password" class="form-control" name="password" value="<?php echo e(Auth::user()->password); ?>">
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
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="<?php echo e(Auth::user()->password); ?>">

                    <?php if($errors->has('password_confirmation')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                    </span>
                    <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('type') ? ' has-error' : ''); ?>">
            <label for="type" class="col-md-4 control-label">Type</label>

            <div class="col-md-6">
                <input id="type" type="text" class="form-control" name="type" value="<?php echo e(Auth::user()->type); ?>" readonly>
            </div>
        </div>

    <div class="panel panel-default panel-main">
        <div class="panel-heading">
            <center>Personal Information</center>
        </div>
    </div>
        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>">

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
                <input id="surname" type="text" class="form-control" name="surname" value="<?php echo e(Auth::user()->surname); ?>">

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
                    <input id="dob" type="date" class="form-control" name="dob" value="<?php echo e(Auth::user()->dob); ?>">

                    <?php if($errors->has('dob')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('dob')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
        </div>

        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>">

                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
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