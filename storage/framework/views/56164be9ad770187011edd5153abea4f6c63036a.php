<?php $__env->startSection('site-name'); ?>
	NinjaPI
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
	<div class="col-sm-12" style="margin-top: 100px !important; ">
		<div class="col-sm-12 text-left" style="margin-bottom: 30px">
			<div class="col-sm-10">
				<label>Search result for: <span><?php echo $searchName?><span>( <?php echo $resultCount?> items )</span></span></label>
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-default">Download PDF</button>
			</div>
		</div>
		<div class="row col-sm-12">
			<div class="col-sm-12">
				<ul class="nav nav-pills" style="border-bottom: 1px solid black">
				  <li><a href="#">Facebook</a></li>
				  <li><a href="#">Twitter</a></li>
				</ul>
			</div>
			<div class="col-sm-12">
				<ul class="nav nav-pills">
				  <li><a href="#">Profile</a></li>
				  <li><a href="#">Post</a></li>
				  <li><a href="#">Photos</a></li>
				  <li><a href="#">Videos</a></li>
				  <li><a href="#">Likes</a></li>
				  <li><a href="#">Interest</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<?php foreach ($searchUsers as $users) : ?>
				<a href="/search/tweets/<?php echo e($users->id); ?>">
				<div class="col-sm-12" style="margin: 10px">
					<div class="col-sm-2">
					<img src="<?php echo $users->profile_image_url ?>" class="img" width="80px" height="80px">
					</div>
					<div class="col-sm-6">
						<table>
						<tr>
							<td>Name : </td>
							<td><?php echo $users->name?></td>
						</tr>
						<tr>
							<td>Address : </td>
							<td><?php echo ($users->location == "") ? "not applicable" : $users->location  ?></td>
						</tr>
						<tr>
							<td>Id: </td>
							<td><?php echo $users->id  ?></td>
						</tr>
					
						</table>
					</div>
				</div>
				</a>
			<?php endforeach?>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.results', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>