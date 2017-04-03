<?php $__env->startSection('panel-title'); ?>
    Users
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panel-body'); ?>

        <a href="<?php echo e(url('/admin/create')); ?>" class="btn btn-primary" style="color: white !important;">Create User</a>
    
        <div class="table-responsive">          
            <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Created By</th>
                    <th>Created At</th>
                  </tr>
                </thead>
                <?php foreach($data as $user): ?>
                    <?php if( $user->id != Auth::user()->id ): ?>
                        <tbody>
                          <tr>
                            <td><a href="/profile/<?php echo e($user->username); ?>" style="color: #303030 !important"><?php echo e($user->name); ?></a></td>
                            <td><?php echo e($user->surname); ?></td>
                            <td><a href="/profile/<?php echo e($user->username); ?>" style="color: #303030 !important"><?php echo e($user->username); ?></a></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->type); ?></td>
                            <td><?php echo e($user->created_by); ?></td>
                            <td><?php echo e($user->created_at); ?></td>
                            <?php if(Auth::user()->type == 'admin'): ?>
                                <form method="post" action="/admin/<?php echo e($user->id); ?>" onsubmit = 'return confirmDelete()'> 
                                    <?php echo e(method_field('DELETE')); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <td><input type="submit" class="btn btn-danger btn-sm" value="delete"></td>
                                </form>
                            <?php endif; ?>
                          </tr>
                    </tbody>
                    
                    <?php endif; ?>
                <?php endforeach; ?>

            </table>
        </div>
    

    <center>
    <?php echo e($data->links()); ?>

    </center>

<script type="text/javascript">
    function confirmDelete() {
        var result = confirm('Are you sure you want to delete?');

        if (result) {
                return true;
        } 
        else 
        {
                return false;
        }
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>