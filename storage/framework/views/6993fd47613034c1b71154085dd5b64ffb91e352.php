<?php $__env->startSection('title','About'); ?>

<?php $__env->startSection('body'); ?>
	    <?php if(empty($mimi)): ?>
        	I am PIKU
        <?php endif; ?>

        <?php $__currentLoopData = $mimi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $piku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        	<?php echo e($piku); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php for($i = 0; $i < 10; $i++): ?>
    		The current value is <?php echo e($i); ?>

		<?php endfor; ?>

		<?php $__currentLoopData = $mimi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		    <?php if($loop->first): ?>
		        This is the first iteration.
		    <?php endif; ?>

		    <?php if($loop->last): ?>
		        This is the last iteration.
		    <?php endif; ?>

    			<p>This is user </p>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>