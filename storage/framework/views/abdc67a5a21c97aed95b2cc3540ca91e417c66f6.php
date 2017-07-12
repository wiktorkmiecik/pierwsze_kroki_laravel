<?php $__env->startSection('content'); ?>

    <?php echo Form::model($page, ['route' => ['pages.update', $page], 'method' => 'PUT']); ?>


        <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="alert alert-danger"><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <?php endif; ?>

        <div class="form-group">
            <?php echo Form::label('title', "Title:"); ?>

            <?php echo Form::text('title', $page->title, ['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('content', "Treść:"); ?>

            <?php echo Form::textarea('content', $page->content, ['class'=>'form-control']); ?>

        </div>
         <div class="form-group">
            <?php echo Form::label('url', "Link:"); ?>

            <?php echo Form::text('url', $page->link, ['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('nick', "Nick:"); ?>

            <?php echo Form::text('nick', $page->nick, ['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::submit('Zapisz', ['class'=>'btn btn-primary ']); ?>

            <?php echo link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']); ?>

        </div>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>