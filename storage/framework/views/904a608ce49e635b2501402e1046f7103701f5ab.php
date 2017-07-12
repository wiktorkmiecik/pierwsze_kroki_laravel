<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => 'pages.store']); ?>



<?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <div class="btn btn-danger"><?php echo e($error); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    <?php endif; ?>


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
<div class="form-group">
	<?php echo Form::label('title', "Title:"); ?>

	<?php echo Form::text('title', null, ['class'=>'form-control']); ?>

</div>

<div class="form-group">
	<?php echo Form::label('content', "Treść:"); ?>

	<?php echo Form::textarea('content', null, ['class'=>'form-control']); ?>

</div>

<div class="form-group">
	<?php echo Form::label('url', "Link:"); ?>

	<?php echo Form::text('url', null, ['class'=>'form-control']); ?>

</div>

<div class="form-group">
	<?php echo Form::label('nick', "Nick:"); ?>

	<?php echo Form::text('nick', null, ['class'=>'form-control']); ?>

</div>

  <div class="form-group">
        <?php echo Form::submit('Zapisz', ['class'=>'btn btn-primary']); ?>

        <?php echo link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']); ?>

    </div>

</div>
	</div>
		</div>
			</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>