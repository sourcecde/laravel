<?php $__env->startSection('title','Users'); ?>


<?php $__env->startSection('body'); ?>
		<?php echo e($users->name); ?>-<?php echo e($users->number); ?>

		<?php $__currentLoopData = $mobiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo e($mobile->number); ?>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>