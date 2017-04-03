<?php $__env->startSection('panel-title'); ?>
    Searches
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panel-body'); ?>
	<div class="table-responsive">          
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Searched Name</th>
                    <th>PDF</th>
                </tr>
            </thead>
            
            <?php foreach($data as $user): ?>
                    
                <tbody>
                    <tr>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->email); ?></td>
                    <td><?php echo e($data->subject_name); ?></td>
                    <td><?php echo e($data->data_location); ?></td>
                    </tr>
                </tbody>
                    
            <?php endforeach; ?>

        </table>
    </div>

    <center>
    <?php echo e($data->links()); ?>

    </center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>