<?php $__env->startSection('panel-title'); ?>
    Recent Activities
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panel-body'); ?>
	<div class="table-responsive">          
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Activity</th>
                    <th>Table</th>
                    <th>User ID</th>
                    <th>Reference</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <?php foreach($logs as $log): ?>
                    <tbody>
                    	<tr>
                    		<td><?php echo e($log->id); ?></td>
                    		<td><?php echo e($log->activity); ?></td>
                    		<td><?php echo e($log->table); ?></td>
                    		<td><?php echo e($log->user_id); ?></td>
                    		<td><?php echo e($log->created_id); ?></td>
                    		<td><?php echo e($log->date); ?></td>
                    	</tr>
                    </tbody>
                <?php endforeach; ?>

            </table>
        </div>
    <center>
    	<?php echo e($logs->links()); ?>

    </center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>