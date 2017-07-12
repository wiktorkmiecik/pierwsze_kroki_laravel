<br>
<div class="col-sm-offset-5 col-sm-2 text-center">
<a class="btn btn-warning btn-lg center-block" href="<?php echo e(route('pages.create')); ?>"> Dodaj Video ! </a>
</div>
<?php $__env->startSection('content'); ?>
<h2>Najlepsze filmy</h2>
<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<div class="col-xs-12 col-md-6 col-lg-4 single-video">
        <div class="card">
        
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php echo e($page->url); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-content">
                <a href="<?php echo e(url('pages', $page->id)); ?>">
                    <h4><?php echo e($page->title); ?></h4>
                </a>
                <p><?php echo e(str_limit($page->content, $limit=40)); ?></p>
                <span class="upper-label">Dodał</span>
                <span class="video-author"><?php echo e($page->nick); ?></span>
                <br>
                <td>
                <a class="btn btn-info" href="<?php echo e(route('pages.edit', $page)); ?>">Edytuj video</a></td><td>
                  <td>
                    <?php echo Form::model($page, ['route' => ['pages.delete', $page], 'method' => 'DELETE']); ?>

                    <br><button class="btn btn-danger">usuń video</button>
                    <?php echo Form::close(); ?>

      </td>
            </div>
            
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php echo e($pages->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>