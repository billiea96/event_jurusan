<?php echo $__env->yieldContent('header'); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-md-offset-1">
            <?php foreach($posts as $post): ?>
            <div class="post-preview text-justify">
                <h1 class="post-title">
                    <?php echo e($post->judul); ?>

                </h1>
                <h4 class="post-subtitle">
                    <?php echo e($post->subjek); ?>

                </h4>
                <?php echo $post->isi; ?>

                <p class="post-meta"><span class="fa fa-user"></span> Dipost oleh <a href="#"><?php echo e($post->user->name); ?></a> pada <?php echo e(date('j F Y, H:i:s', strtotime($post->tgl_posting))); ?></p>
            </div>
            <hr>
            <?php endforeach; ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>