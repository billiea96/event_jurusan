<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/akademik.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php echo e($post->judul); ?></h1>
                    <hr class="small">
                    <span class="subheading"><?php echo e($post->subjek); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-md-offset-1">
            <?php echo $post->isi; ?>

            <p class="post-meta"><span class="fa fa-user"></span> Dipost oleh <a href="#"><?php echo e($post->user->name); ?></a> pada <?php echo e(date('j F Y, H:i:s', strtotime($post->tgl_posting))); ?></p>
            <hr>
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